<?php
    /*
        This file is part of UserMgmt.

        Author: Chetan Varshney (http://ektasoftwares.com)

        UserMgmt is free software: you can redistribute it and/or modify
        it under the terms of the GNU General Public License as published by
        the Free Software Foundation, either version 3 of the License, or
        (at your option) any later version.

        UserMgmt is distributed in the hope that it will be useful,
        but WITHOUT ANY WARRANTY; without even the implied warranty of
        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
        GNU General Public License for more details.

        You should have received a copy of the GNU General Public License
        along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
    */
   
	namespace App\Controller;

	use App\Controller\UserMgmtAppController;
	use Cake\Event\Event;
	use Cake\Network\Exception\NotFoundException;

	use RecursiveDirectoryIterator;
	use RecursiveIteratorIterator;
	
    class UserGroupPermissionsController extends UserMgmtAppController
    {

       // var $uses       = array('Usermgmt.UserGroupPermission', 'Usermgmt.UserGroup');
       // var $components = array('ControllerList', 'RequestHandler');

        /**
         * Used to display all permissions of site by Admin
         *
         * @access public
         * @return array
         */
        public function index()
        {
        	$this->loadModel('UserTypes');
        	$userTypes = $this->UserTypes->getUserTypes();
        	
            $c = -2;
            if(isset($_GET['c']) && $_GET['c'] != '')
            {
                $c = $_GET['c'];
            }
            $this->set('c', $c);
            
            $allControllers = $this->ControllerList->getControllerList();//$this->_getControllers();
            
            $this->set('allControllers', $allControllers);
            if($c >= 0)
            {
                $con    = array();
                $conAll = $this->ControllerList->get();
                
                if($c == 0)
                {
                    $con                    = $conAll;
                    $user_group_permissions = array();//$this->UserGroupPermissions->find('all', array('order' => array('controller', 'action')))->toArray();
                } 
                else
                {
                	$selected_controller = str_replace('Controller','',$allControllers[ $c ]);
                    $user_group_permissions       = $this->UserGroupPermissions->find('all', array('order' => array('controller', 'action'), 'conditions' => array('controller' => $selected_controller)))->toArray();
                    $con[ $selected_controller ] = (isset($conAll[ $selected_controller ])) ? $conAll[ $selected_controller ] : array();
                }
               
                if(count($user_group_permissions) > 0 )
                {
	               foreach($user_group_permissions as $row)
	               {
	                    $cont                            = $row['controller'];
	                    $act                             = $row['action'];
	                    $ugname                          = $userTypes[$row['user_type_id']];
	                    $allowed                         = $row['allowed'];
	                    $con[ $cont ][ $act ][ $ugname ] = $allowed;
	               }
                }
                else
                {
                	$con = array();
                	foreach($conAll as $controllers)
                	{
                		if($c == 0)
                		{
                			//pr($controllers);
	                		$controller = key($controllers);
	                		$actions = $controllers[$controller];
	                		foreach($actions as $action)
	                		{
	                			$cont                            = $controller;
	                			$act                             = $action;
	                			$allowed                         = 0;
	                			
	                			foreach($userTypes as $key=>$ugname)
	                			{
	                				$query = $this->UserGroupPermissions->find('all', array('conditions' => array('controller' => $controller, 'action' => $action, 'user_type_id' => $key)));
	                				$res = $query->first();
	                				if(!empty($res))
	                				{
	                					$con[ $cont ][ $act ][ $ugname ] = $res['allowed'];
	                				}
	                				else
	                				{
	                					$con[ $cont ][ $act ][ $ugname ] = 0;
	                				}
	                			}
	                		}
                		}
                		else
                		{
                			$con = array();
                			$selected_controller = str_replace('Controller','',$allControllers[ $c ]);
                			$controller = key($controllers);
                			
                			if($selected_controller == $controller)
                			{
                				$actions = $controllers[$controller];
                				
                				foreach($actions as $action)
                				{
                					$cont                            = $controller;
                					$act                             = $action;
                					$allowed                         = 0;
                				
                					foreach($userTypes as $ugname)
                					{
                						$con[ $cont ][ $act ][ $ugname ] = $allowed;
                					}
                				}
                				break;	
                			}
                		}
                	}
                }
               	
                $this->set('controllers', $con);
                
                $groups = '';
                
                $groups = implode(",",$userTypes);
               
                $this->set('user_groups', $userTypes);
                
                $this->set('groups', $groups);
            }
        }

        /**
         *  Used to update permissions of site using Ajax by Admin
         *
         * @access public
         * @return integer
         */
        public function update()
        {
            $this->autoRender = false;
            $controller       = $this->request->data['controller'];
            $action           = $this->request->data['action'];
           	$this->loadModel('UserTypes');
        	$result = $this->UserTypes->getUserTypeIdsAndNames();
            $success          = 0;
           
            foreach($result as $row)
            {
                if(isset($this->request->data[ $row['name'] ]))
                {
                	$this->loadModel('UserGroupPermissions');
                    $query = $this->UserGroupPermissions->find('all', array('conditions' => array('controller' => $controller, 'action' => $action, 'user_type_id' => $row['id'])));
                    $res = $query->first();
                    if(empty($res))
                    {
                        $data				   = array();
                        $data['user_type_id'] = $row['id'];
                        $data['controller']    = $controller;
                        $data['action']        = $action;
                        $data['allowed']       = $this->request->data[ $row['name'] ];
                        $data['id']            = null;
                        
                        $ugp = $this->UserGroupPermissions->newEntity();
                        $ugp = $this->UserGroupPermissions->patchEntity($ugp, $data);
                        
                        $rtn = $this->UserGroupPermissions->save($ugp);
                        if($rtn)
                        {
                            $success = 1;
                        }
                    } 
                    else
                    {
                        if($this->request->data[ $row['name'] ] != $res['allowed'])
                        {
                        	$ugp = $this->UserGroupPermissions->get($res['id']);
                            $data                                   = array();
                            $data['allowed'] = $this->request->data[ $row['name'] ];
                            $data['id']      = $res['id'];
                            
                            $ugp = $this->UserGroupPermissions->patchEntity($ugp, $data);
                            $rtn = $this->UserGroupPermissions->save($ugp);
                            if($rtn)
                            {
                                $success = 1;
                            }
                        } else
                        {
                            $success = 1;
                        }
                    }
                }
            }
            echo $success;
            $this->__deleteCache();
        }

        /**
         * Used to delete cache of permissions and used when any permission gets changed by Admin
         *
         * @access private
         * @return void
         */
        private function __deleteCache()
        {
            $iterator = new RecursiveDirectoryIterator(CACHE);
            foreach(new RecursiveIteratorIterator($iterator, RecursiveIteratorIterator::CHILD_FIRST) as $file)
            {
                $path_info = pathinfo($file);
               
                if($path_info['dirname'] == ROOT . DS . "tmp" . DS . "cache")
                {
                	$file_name = $path_info['filename'];
                	$file_arr = str_split($file_name, 25);
                	
                    if($file_arr[0] == "UserMgmt_rules_for_group_")
                    {
                    	unlink($file->getPathName());
                    }
                }
            }
        }
        
        /**
         * Prevent unwanted access
         */
        public function access_denied()
        {
        
        }
        
        public function getControllerActions()
        {
        	$controller = $this->request->data['controller_name'];
        	$controller = str_replace('Controller','',$controller);
        	$actions = $this->ControllerList->getControllerActions($controller);
			$actions = $actions[$controller];
			$action_list = array();
			foreach($actions as $action){
				$action_list[$action] = $action;
			}
			$this->response->body(json_encode($action_list));
			$this->response->type('application/json');
			return $this->response;
        }
        
        
    }