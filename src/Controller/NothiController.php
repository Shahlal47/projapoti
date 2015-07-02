<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;

class NothiController extends AppController
{
//	public function beforeFilter(Event $event)
//	{
//	    parent::beforeFilter($event);
//	}
	
	public function index()
	{
		$nothi = TableRegistry::get('Nothi');
		$query = $nothi->find('all');
		$this->set(compact('query'));
	}
	
	public function view()
	{
	
	}	
    public function nothiList()
    {

    }

	
}