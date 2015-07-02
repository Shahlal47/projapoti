<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;

class UsersController extends AppController
{

	public function beforeFilter(Event $event)
	{
	    parent::beforeFilter($event);
	    // Allow users to register and logout.
	    // You should not add the "login" action to allow list. Doing so would
	    // cause problems with normal functioning of AuthComponent.
	    $this->Auth->allow(['login', 'logout']);
	}
	
	public function login()
	{
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
			
			if ($user) {
				$this->Auth->setUser($user);
				
				$modules = array();
				$moduleInfos = TableRegistry::get('ModuleInfos');
				$modules = $moduleInfos->getModuleList();
				
				$session = $this->request->session();
				$session->write('modules', $modules);
				
				$menus = TableRegistry::get('Menus');
				$menus = $menus->setupModuleMenu(1);
				
				$session = $this->request->session();
				$session->write('module_id', 1);
				$session->write('menu_items', $menus);
				
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Flash->error(__('Invalid username or password, try again'));
		}
	}
	
	
	public function logout()
	{
		$session = $this->request->session();
		$session->destroy();
		return $this->redirect($this->Auth->logout());
	}	
	
	public function index()
    {
    	$query = $this->Users->find('all')->contain(['UserTypes']);
        $this->set('users', $query);
    }

    public function view($id)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid user'));
        }

        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }
        $this->set('user', $user);
        $UTTable = TableRegistry::get('UserTypes');
        $userTypes = $UTTable->find('list')->select(['id, name'])->toArray();
        $this->set('userTypes', $userTypes);
    }
    
    
    public function edit($id = null)
    {
    	$user = $this->Users->get($id);
    	
    	if ($this->request->is(['patch', 'post', 'put'])) {
    		$user = $this->Users->patchEntity($user, $this->request->data);
    		if ($this->Users->save($user)) {
    			$this->Flash->success('The user has been updated.');
    			return $this->redirect(['action' => 'index']);
    		}
    		$this->Flash->error('Unable to update user. Please, try again.');
    	}
    	$this->set('user', $user);
    	$UTTable = TableRegistry::get('UserTypes');
    	$userTypes = $UTTable->find('list')->select(['id, name'])->toArray();
    	$this->set('userTypes', $userTypes);
    }
    
    public function delete($id)
    {
    	$user = $this->Users->get($id);
    	$result = $this->Users->delete($user);
    	if($result == 1)
    	{
    		$this->Flash->success(__('The user has been deleted.'));
    		return $this->redirect(['action' => 'index']);
    	}
    	$this->Flash->error(__('Unable to delete the user.'));
    }

}