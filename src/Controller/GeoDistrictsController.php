<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\GeoDistrictsTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\GeoDistricts;
use Cake\ORM\TableRegistry;

class GeoDistrictsController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'contain' => ['GeoDivisions']
        ];
        $this->set('geoDistricts', $this->paginate($this->GeoDistricts));
        $this->set('_serialize', ['geoDistricts']);
    }

    public function add()
    {
        $this->loadModel('GeoDivisions');
        $geo_divisions = $this->GeoDivisions->find('all');
        $this->set(compact('geo_divisions'));

        if ($this->request->is('post')) {

            $d = $this->request->data['geo_division_id'];

            $this->loadModel('GeoDivisions');
            $geo_division = TableRegistry::get('GeoDivisions');

            $geo_division = $geo_division->find()
                ->where(['id =' => $d])
                ->extract('bbs_code');
            foreach($geo_division as $division):
            endforeach;

//            pr($division);
//            die();

            $geo_district = $this->GeoDistricts->newEntity();
            $geo_district->division_bbs_code = $division;
            $geo_district = $this->GeoDistricts->patchEntity($geo_district, $this->request->data);
            if ($this->GeoDistricts->save($geo_district)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('user', $geo_district);
    }

    public function edit($id = null, $is_ajax = null)
    {
        if($is_ajax == 'ajax'){
            $this->layout=null;
        }
        $geo_district = $this->GeoDistricts->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->GeoDistricts->patchEntity($geo_district, $this->request->data);
            if ($this->GeoDistricts->save($geo_district)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('geo_district', $geo_district);
    }

    public function view($id = null)
    {
        $geo_district = $this->GeoDistricts->get($id);
        $this->set(compact('geo_district'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $geo_district = $this->GeoDistricts->get($id);
        if ($this->GeoDistricts->delete($geo_district)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
