<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\GeoUpazilasTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\GeoUpazilas;
use Cake\ORM\TableRegistry;

class GeoUpazilasController extends AppController
{

    public function index()
    {
        $this->paginate = [
            'contain' => ['GeoDistricts', 'GeoDivisions']
        ];
//        $this->set('geoUpazilas', $this->paginate($this->GeoUpazilas));
//        $this->set('_serialize', ['geoUpazilas']);

        $geo_upazila = TableRegistry::get('GeoUpazilas');
        $query = $geo_upazila->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {
        $this->loadModel('GeoDivisions');
        $geo_divisions = $this->GeoDivisions->find('all');
        $this->set(compact('geo_divisions'));

        $this->loadModel('GeoDistricts');
        $geo_districts = $this->GeoDistricts->find('all');
        $this->set(compact('geo_districts'));

        $geo_upazila = $this->GeoUpazilas->newEntity();
        if ($this->request->is('post')) {
            $geo_upazila = $this->GeoUpazilas->patchEntity($geo_upazila, $this->request->data);
            if ($this->GeoUpazilas->save($geo_upazila)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('geo_upazila', $geo_upazila);
    }

    public function edit($id = null, $is_ajax = null)
    {
        if($is_ajax == 'ajax'){
            $this->layout=null;
        }
        $geo_upazila = $this->GeoUpazilas->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->GeoUpazilas->patchEntity($geo_upazila, $this->request->data);
            if ($this->GeoUpazilas->save($geo_upazila)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('geo_upazila', $geo_upazila);
    }


    public function view($id = null)
    {
        $geo_upazila = $this->GeoUpazilas->get($id);
        $this->set(compact('geo_upazila'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $geo_upazila = $this->GeoUpazilas->get($id);
        if ($this->GeoUpazilas->delete($geo_upazila)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
