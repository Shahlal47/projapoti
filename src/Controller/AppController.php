<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	/**
	 * Initialization hook method.
	 *
	 * Use this method to add common initialization code like loading components.
	 *
	 * @return void
	 */
	
	public function initialize() 
	{
		parent::initialize ();
		$this->loadComponent ( 'Flash' );
		$this->loadComponent('ControllerList');
		$this->loadComponent ( 'RequestHandler' );
		$this->loadComponent ( 'Auth', [ 
				'loginRedirect' => [ 
						'controller' => 'dashboard',
						'action' => 'dashboard' 
				],
				'logoutRedirect' => [ 
						'controller' => 'Users',
						'action' => 'login'
				]
		] );
	}
	
	public function beforeFilter(Event $event) {
		$this->_pickLayout();
		$this->set('loggedUser', $this->Auth->user());
		$this->_setupAccessControl($event);
	}
	
	
	private function _setupAccessControl(Event $event)
	{
		$user = $this->Auth->user();
		UsermgmtInIt($this);
		$session = $this->request->session();
		$pageRedirect = $session->read('permission_error_redirect');
		$session->delete('permission_error_redirect');
	
		$controller     = $this->request->params ['controller'];
		$action         = $this->request->params ['action'];
		$actionUrl      = $controller . '/' . $action;
	
		$requested      = (isset($controller->params['requested']) && $controller->params['requested'] == 1) ? true : false;
	
		$permissionFree = array(
				'users/login',
				'users/logout',
				'logout',
				'login',
				'access_denied',
				'usergrouppermissions/access_denied',
				'usergrouppermissions/index',
				'update_permission',
				'dashboard/dashboard'
		);
		
		if(!in_array(strtolower($actionUrl), $permissionFree))
		{
			$userGroupModel = TableRegistry::get('UserTypes');
			
			if(!$userGroupModel->isUserGroupAccess($controller, $action, $user['user_type_id']))
			{
				$this->log('permission: actionUrl-' . $actionUrl, LOG_DEBUG);
				$session->write('permission_error_redirect', '/users/login');
				return $this->redirect('/access_denied');
			}
		}
	}
	
	private function _pickLayout() 
	{
		if ($this->request->url == 'login' || ($this->request->params ['controller'] == 'Users' && $this->request->params ['action'] == 'login')) {
			$this->layout = "login";
		} else {
			$this->layout = "default";
    	}
    }
    
    public function _getControllers() {
    	$files = scandir('../src/Controller/');
    	$results = [];
    	$ignoreList = [
    	'.',
    	'..',
    	'Component',
    	'AppController.php',
    	];
    	array_push($results, "All");
    	foreach($files as $file){
    		if(!in_array($file, $ignoreList)) {
    			$controller = explode('.', $file)[0];
    			array_push($results, $controller);
    		}
    	}
    	
    	return $results;
    }
    
    
}
