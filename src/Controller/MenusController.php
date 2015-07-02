<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;
use Cake\View\CellTrait;

class MenusController extends AppController
{
	public function beforeFilter(Event $event)
	{
	    parent::beforeFilter($event);
	}
	
	public function index()
	{
		$session = $this->request->session();
		$module_id = $session->read('module_id');
		$menus = TableRegistry::get('Menus');
		$menus = $menus->setupModuleMenu($module_id);
		$session = $this->request->session();
		$session->write('menu_items', $menus);
	}

	public function add()
	{
		if(isset($this->request->query['is_ajax']))
		{
			$this->layout = "";
		}
		if($this->request->is('post'))
		{
			$session = $this->request->session();
			$selected_module = $session->read('module_id');
			if(empty($selected_module))
			{
				$this->Flash->error('Invalid Module Information.');
				return;	
			}
			else
			{
				$this->request->data['module_info_id'] = $selected_module;
			}
			if(empty($this->request->data['main_menu_id']))
			{
				$this->request->data['main_menu_id'] = 0;
			}
			if(empty($this->request->data['sub_menu_id']))
			{
				$this->request->data['sub_menu_id'] = 0;
			}
			
			//Maintain Display Sequence
			
			$display_seq = $this->Menus->getMenuWiseDisplaySeq($this->request->data['module_info_id'],
																$this->request->data['main_menu_id'],
																$this->request->data['sub_menu_id']);
			
			$this->request->data['sequence_no'] = (intval($display_seq['sequence_no']) + 1);
			
			$menu = $this->Menus->newEntity();
			$menu = $this->Menus->patchEntity($menu, $this->request->data);
			
			if ($this->Menus->save($menu)) {
				$this->Flash->success(__('Menu has been saved.'));
				$this->redirect(array('action'=>'index'));
				return;
			}
			
			$errors = $menu->errors();
			$error_list = array();
			foreach($errors as $error)
			{
				foreach($error as $err)
				{
					$error_list[] = $err;
				}
			}
			$this->Flash->error(json_encode($error_list));
			$this->redirect(array('action'=>'index'));
			return;
		}
		$menu = $this->Menus->newEntity();
		$this->set('menu', $menu);
		
		$firstLayerMenu = $this->Menus->find()->where(['main_menu_id'=>0]);
		
		$firstLayer = array();
		foreach($firstLayerMenu as $first)
		{
			$id = $first->id;
			$firstLayer[$id] = $first->menu_name;
				
		}
		
		$this->set('firstLayer', $firstLayer);
		
		$scan_controllers = $this->ControllerList->getControllerList();
		$controllers = array();
		foreach($scan_controllers as $controller)
		{
			$controllers[lcfirst(str_replace('Controller','',$controller))] = $controller;
		}
		$this->set('controllers',$controllers);
		$this->set('type', $this->request->query['type']);
		if($this->request->query['type'] == 2)
		{
			$this->set('main_menu_id', $this->request->query['main_menu_id']);
		}
		if($this->request->query['type'] == 3)
		{
			$this->set('main_menu_id', $this->request->query['main_menu_id']);
			$this->set('sub_menu_id', $this->request->query['sub_menu_id']);
			
			$secondLayerMenu = $this->Menus->find()->where(['main_menu_id'=>$this->request->query['main_menu_id']]);
			
			$secondLayer = array();
			foreach($secondLayerMenu as $second)
			{
				$id = $second->id;
				$secondLayer[$id] = $second->menu_name;
			
			}
			$this->set('secondLayer', $secondLayer);
		}
		
	}
	
	/**
	 * Params ModuleId
	 */
	public function loadModuleWiseMenu()
	{
		$module_id = $this->request->data['module_id'];
		$session = $this->request->session();
		$session->write('module_id', $module_id);
		
		$menus = TableRegistry::get('Menus');
		$menus = $menus->setupModuleMenu($module_id);
		$session = $this->request->session();
		$session->write('menu_items', $menus);
		return $this->response;
	}
	
	public function edit($id = null)
	{
		if(isset($this->request->query['is_ajax']))
		{
			$this->layout = "";
		}
		$menu = $this->Menus->get($id);
		 
		if ($this->request->is(['patch', 'post', 'put'])) {
			$menu = $this->Menus->patchEntity($menu, $this->request->data);
			if ($this->Menus->save($menu)) {
				$this->Flash->success('Menu has been updated.');
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error('Unable to update menu. Please, try again.');
		}
		
		$this->set('menu', $menu);
		
		$firstLayerMenu = $this->Menus->find()->where(['main_menu_id'=>0]);
		
		$firstLayer = array();
		foreach($firstLayerMenu as $first)
		{
			$id = $first->id;
			$firstLayer[$id] = $first->menu_name;
				
		}
		
		$this->set('firstLayer', $firstLayer);
		
		$scan_controllers = $this->ControllerList->getControllerList();
		$controllers = array();
		foreach($scan_controllers as $controller)
		{
			$controllers[lcfirst(str_replace('Controller','',$controller))] = $controller;
		}
		$this->set('controllers',$controllers);
		$this->set('type', $this->request->query['type']);
		if($this->request->query['type'] == 2)
		{
			$this->set('main_menu_id', $this->request->query['main_menu_id']);
		}
		if($this->request->query['type'] == 3)
		{
			$this->set('main_menu_id', $this->request->query['main_menu_id']);
			$this->set('sub_menu_id', $this->request->query['sub_menu_id']);
			
			$secondLayerMenu = $this->Menus->find()->where(['main_menu_id'=>$this->request->query['main_menu_id']]);
			
			$secondLayer = array();
			foreach($secondLayerMenu as $second)
			{
				$id = $second->id;
				$secondLayer[$id] = $second->menu_name;
			
			}
			$this->set('secondLayer', $secondLayer);
		}
	}
	
	public function delete($id)
	{
		$this->layout = "";
		$menu = $this->Menus->get($id);
		$result = $this->Menus->delete($menu);
		if($result == 1)
		{
			$this->Flash->success(__('Menu has been deleted.'));
			return $this->redirect(['action' => 'index']);
		}
		$this->Flash->error(__('Unable to delete menu.'));
	}
	
}