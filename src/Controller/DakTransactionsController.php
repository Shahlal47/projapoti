<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\DakTransactionsTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

class DakTransactionsController extends AppController
{
    public function index()
    {
        $dak_transaction = TableRegistry::get('DakTransactions');
        $query = $dak_transaction->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {

        $dak_transaction = $this->DakTransactions->newEntity();
        if ($this->request->is('post')) {
            $dak_transaction = $this->DakTransactions->patchEntity($dak_transaction, $this->request->data);
            if ($this->DakTransactions->save($dak_transaction)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('dak_transaction', $dak_transaction);
    }

    public function edit($id = null)
    {
        $dak_transaction = $this->DakTransactions->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->DakTransactions->patchEntity($dak_transaction, $this->request->data);
            if ($this->DakTransactions->save($dak_transaction)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('dak_transaction', $dak_transaction);
    }

    public function view($id = null)
    {
        $dak_transaction = $this->DakTransactions->get($id);
        $this->set(compact('dak_transaction'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $dak_transaction = $this->DakTransactions->get($id);
        if ($this->DakTransactions->delete($dak_transaction)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
