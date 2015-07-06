<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\DakTypesTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

class DakTypesController extends AppController
{
    public function index()
    {
        $dak_types = TableRegistry::get('DakTypes');
        $query = $dak_types->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {

        $dak_types = $this->DakTypes->newEntity();
        if ($this->request->is('post')) {
            $dak_types = $this->DakTypes->patchEntity($dak_types, $this->request->data);
            if ($this->DakTypes->save($dak_types)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('dak_types', $dak_types);
    }

    public function edit($id = null)
    {
        $dak_types = $this->DakTypes->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->DakTypes->patchEntity($dak_types, $this->request->data);
            if ($this->DakTypes->save($dak_types)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('dak_types', $dak_types);
    }

    public function view($id = null)
    {
        $dak_types = $this->DakTypes->get($id);
        $this->set(compact('dak_types'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $dak_types = $this->DakTypes->get($id);
        if ($this->DakTypes->delete($dak_types)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
