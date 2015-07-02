<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;

class NothiMastersController extends AppController
{
	public function index()
	{
		$nothi = TableRegistry::get('NothiMasters');
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