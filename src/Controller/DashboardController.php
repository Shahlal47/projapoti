<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;

class DashboardController extends AppController
{
	public function beforeFilter(Event $event)
	{
	    parent::beforeFilter($event);
	}
	
	/**
	 * LOGGED USER DASHBOARD
	 */
	public function dashboard()
	{
		
	}
}