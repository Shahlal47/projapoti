<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\DakNagoriksTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

class DakNagoriksController extends AppController
{
    public function index()
    {
        $dak_nagoriks = TableRegistry::get('DakNagoriks');
        $query = $dak_nagoriks->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {
        $this->loadModel('DakTypes');
        $dak_types = $this->DakTypes->find('all');
        $this->set(compact('dak_types'));

        $dak_nagoriks = $this->DakNagoriks->newEntity();
        if ($this->request->is('post')) {

            $this->loadModel('DakTypes');


            $dak_nagoriks = $this->DakNagoriks->patchEntity($dak_nagoriks, $this->request->data);
            if ($this->DakNagoriks->save($dak_nagoriks)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('dak_nagoriks', $dak_nagoriks);
    }

    public function edit($id = null)
    {
        $dak_nagoriks = $this->DakNagoriks->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->DakNagoriks->patchEntity($dak_nagoriks, $this->request->data);
            if ($this->DakNagoriks->save($dak_nagoriks)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('dak_nagoriks', $dak_nagoriks);
    }

    public function view($id = null)
    {
        $dak_nagoriks = $this->DakNagoriks->get($id);
        $this->set(compact('dak_nagoriks'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $dak_nagoriks = $this->DakNagoriks->get($id);
        if ($this->DakNagoriks->delete($dak_nagoriks)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
