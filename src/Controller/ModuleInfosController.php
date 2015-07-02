<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;

class ModuleInfosController extends AppController
{
	public function beforeFilter(Event $event)
	{
	    parent::beforeFilter($event);
	}
	
	public function index()
	{
		$query = $this->ModuleInfos->find('all');
    	$this->set('moduleInfos', $this->paginate($query));
	}
	
	public function add()
	{
		if($this->request->is('post'))
		{
			$moduleInfo = $this->ModuleInfos->newEntity();
			$moduleInfo = $this->ModuleInfos->patchEntity($moduleInfo, $this->request->data);
			
			if ($result = $this->ModuleInfos->save($moduleInfo)) 
			{
				$id = $result->id;
				
				$data['user_type_id'] = 1;
				$data['module_info_id'] = $id;
				
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
				
				$this->Flash->success(__('Module has been saved.'));
				$this->redirect(array('action'=>'index'));
				return;
			}
			
			$this->Flash->error(__('Unable to add Module.'));
		}
		$moduleInfo = $this->ModuleInfos->newEntity();
		$this->set('moduleInfo', $moduleInfo);
	}
	
	public function edit($id = null)
	{
		$moduleInfo = $this->ModuleInfos->get($id);
		 
		if ($this->request->is(['patch', 'post', 'put'])) {
			$moduleInfo = $this->ModuleInfos->patchEntity($moduleInfo, $this->request->data);
			if ($this->ModuleInfos->save($moduleInfo)) {
				$this->Flash->success('Module has been updated.');
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error('Unable to update module. Please, try again.');
		}
		
		$this->set('moduleInfo', $moduleInfo);
	}
	
	public function delete($id)
	{
		$moduleInfo = $this->ModuleInfos->get($id);
		$result = $this->ModuleInfos->delete($moduleInfo);
		if($result == 1)
		{
			$this->Flash->success(__('Module has been deleted.'));
			return $this->redirect(['action' => 'index']);
		}
		$this->Flash->error(__('Unable to delete module.'));
	}
	
}