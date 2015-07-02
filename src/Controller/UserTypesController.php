<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;

class UserTypesController extends AppController
{

	public function beforeFilter(Event $event)
	{
	    parent::beforeFilter($event);
	}
	
	public function index()
    {
    	$query = $this->UserTypes->find('all');
        $this->set('UserTypes', $query);
    }

    public function add()
    {
        $userType = $this->UserTypes->newEntity();
        if ($this->request->is('post')) {
            $userType = $this->UserTypes->patchEntity($userType, $this->request->data);
            if ($this->UserTypes->save($userType)) {
                $this->Flash->success(__('The user role has been saved.'));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Unable to add the user role.'));
        }
        $this->set('userType', $userType);
    }
    
    
    public function edit($id = null)
    {
    	$userType = $this->UserTypes->get($id);
    	
    	if ($this->request->is(['patch', 'post', 'put'])) {
    		$userType = $this->UserTypes->patchEntity($userType, $this->request->data);
    		if ($this->UserTypes->save($userType)) {
    			$this->Flash->success('The user role has been updated.');
    			return $this->redirect(['action' => 'index']);
    		}
    		$this->Flash->error('Unable to update user role. Please, try again.');
    	}
    	$this->set('userType', $userType);
    	
    }
    
    public function delete($id)
    {
    	$userType = $this->UserTypes->get($id);
    	$result = $this->UserTypes->delete($userType);
    	if($result == 1)
    	{
    		$this->Flash->success(__('The user role has been deleted.'));
    		return $this->redirect(['action' => 'index']);
    	}
    	$this->Flash->error(__('Unable to delete the user role.'));
    }
    
}