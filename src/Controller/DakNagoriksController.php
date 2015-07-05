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
        $dak_nagorik = TableRegistry::get('DakNagoriks');
        $query = $dak_nagorik->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {

        $dak_nagorik = $this->DakNagoriks->newEntity();
        if ($this->request->is('post')) {
            $dak_nagorik = $this->DakNagoriks->patchEntity($dak_nagorik, $this->request->data);
            if ($this->DakNagoriks->save($dak_nagorik)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('dak_nagorik', $dak_nagorik);
    }

    public function edit($id = null)
    {
        $dak_nagorik = $this->DakNagoriks->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->DakNagoriks->patchEntity($dak_nagorik, $this->request->data);
            if ($this->DakNagoriks->save($dak_nagorik)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('dak_nagorik', $dak_nagorik);
    }

    public function view($id = null)
    {
        $dak_nagorik = $this->DakNagoriks->get($id);
        $this->set(compact('dak_nagorik'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $dak_nagorik = $this->DakNagoriks->get($id);
        if ($this->DakNagoriks->delete($dak_nagorik)) {
            return $this->redirect(['action' => 'index']);
        }
    }

}
