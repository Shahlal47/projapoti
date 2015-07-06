<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\DakDaptoriksTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

class DakDaptoriksController extends AppController
{
    public function index()
    {
        $dak_daptoriks = TableRegistry::get('DakDaptoriks');
        $query = $dak_daptoriks->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {
        $this->loadModel('DakTypes');
        $dak_types = $this->DakTypes->find('all');
        $this->set(compact('dak_types'));

        $dak_daptoriks = $this->DakDaptoriks->newEntity();
        if ($this->request->is('post')) {

            $this->loadModel('DakTypes');


            $dak_daptoriks = $this->DakDaptoriks->patchEntity($dak_daptoriks, $this->request->data);
            if ($this->DakDaptoriks->save($dak_daptoriks)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('dak_daptoriks', $dak_daptoriks);
    }

    public function edit($id = null)
    {
        $dak_daptoriks = $this->DakDaptoriks->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->DakDaptoriks->patchEntity($dak_daptoriks, $this->request->data);
            if ($this->DakDaptoriks->save($dak_daptoriks)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('dak_daptoriks', $dak_daptoriks);
    }

    public function view($id = null)
    {
        $dak_daptoriks = $this->DakDaptoriks->get($id);
        $this->set(compact('dak_daptoriks'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $dak_daptoriks = $this->DakDaptoriks->get($id);
        if ($this->DakDaptoriks->delete($dak_daptoriks)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
