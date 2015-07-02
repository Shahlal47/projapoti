<?php
	namespace App\Controller\Component;

	use Cake\Controller\Component;
	use Cake\Event\Event;
	use Cake\Network\Exception\NotFoundException;
	use ReflectionClass;
	use ReflectionMethod;
	
    class ControllerListComponent extends Component
    {
    	
        /**
         * Used to get all controllers with all methods for permissions
         *
         * @access public
         * @return array
         */
        public function get()
        {
            $controllerClasses    = $this->_getControllers();
            
            $controllers          = array();
            foreach($controllerClasses as $controller)
            {
                $controllername = str_replace('Controller', '', $controller);
                if($controllername == "All"){
                	continue;	
                }
                $actions        = $this->_getActions($controllername);//$this->__getControllerMethods($controllername, $superParentActions, $parentActions);
                if(!empty($actions))
                {
                    $controllers[ ] = $actions;
                }
            }
            return $controllers;
        }

        /**
         * Used to delete private actions from list of controller's methods
         *
         * @access private
         * @param array $actions Controller's action
         * @return array
         */
        private function _removePrivateActions($actions)
        {
            foreach($actions as $k => $v)
            {
                if($v{0} == '_')
                {
                    unset($actions[ $k ]);
                }
            }
            return $actions;
        }

        /**
         * Used to get methods of controller
         *
         * @access private
         * @param string $controllername Controller name
         * @param array $superParentActions Controller class methods
         * @param array $parentActions App Controller class methods
         * @param string $p plugin name
         * @return array
         */
        private function __getControllerMethods($controllername, $superParentActions, $parentActions, $p = null)
        {
            if(empty($p))
            {
                App::import('Controller', $controllername);
            } else
            {
                App::import('Controller', $p . '.' . $controllername);
            }
            $actions = get_class_methods($controllername . "Controller");
            if(!empty($actions))
            {
                $actions = $this->_removePrivateActions($actions);
                $actions = ($controllername == 'App') ? array_diff($actions, $superParentActions) : array_diff($actions, $parentActions);
            }
            return $actions;
        }
        
        public function getControllerActions($controllerName) {
        	
        	return $this->_getActions($controllerName);
        }
        
        public function getControllerList() {
        	 
        	return $this->_getControllers();
        }

  
        private function _getControllers() {
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
        
        private function _getActions($controllerName) {
        	$className = 'App\\Controller\\'.$controllerName.'Controller';
        	$class = new ReflectionClass($className);
        	$actions = $class->getMethods(ReflectionMethod::IS_PUBLIC);
        	$results = [$controllerName => []];
        	$ignoreList = ['beforeFilter', 'afterFilter', 'initialize'];
        	foreach($actions as $action){
        		if($action->class == $className && !in_array($action->name, $ignoreList)){
        			array_push($results[$controllerName], $action->name);
        		}
        	}
        	return $results;
        }
    }