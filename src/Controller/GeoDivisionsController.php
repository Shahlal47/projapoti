<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\GeoDivisionsTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

class GeoDivisionsController extends AppController
{
    public $paginate = [
        'fields' => ['Districts.id'],
        'limit' => 25,
        'order' => [
            'Districts.id' => 'asc'
        ]
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function index()
    {
        $geo_division = TableRegistry::get('GeoDivisions');
        $query = $geo_division->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {

        $geo_division = $this->GeoDivisions->newEntity();
        if ($this->request->is('post')) {
            $geo_division = $this->GeoDivisions->patchEntity($geo_division, $this->request->data);
            if ($this->GeoDivisions->save($geo_division)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('geo_division', $geo_division);
    }

    public function edit($id = null, $is_ajax = null)
    {
		if($is_ajax == 'ajax'){
			$this->layout=null;
		}
        $geo_division = $this->GeoDivisions->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->GeoDivisions->patchEntity($geo_division, $this->request->data);
            if ($this->GeoDivisions->save($geo_division)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('geo_division', $geo_division);
    }

    public function view($id = null)
    {
        $geo_division = $this->GeoDivisions->get($id);
        $this->set(compact('geo_division'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $geo_division = $this->GeoDivisions->get($id);
        if ($this->GeoDivisions->delete($geo_division)) {
            return $this->redirect(['action' => 'index']);
        }
    }
    
    public function geoTree()
    {
    	$geoDivisions = $this->GeoDivisions->find()->select(['id','division_name_bng'])->order(['id']);
    	$this->set('divisions', $geoDivisions->toArray());
    }
    
    public function getDivisionsTree()
    {
    	$geoDivisions = $this->GeoDivisions->find()->select(['id','division_name_bng'])->order(['id'])->toArray();

		$data = array();
    	foreach($geoDivisions as $div)
    	{
    		$row = array();
    		$row["id"] = "node_div_".$div['id'];
    		$row["data-id"] = $div['id'];
    		$row["text"] = '<a href="javascript:;" data-type="division" data-id="'.$div['id'].'" onclick="GeoTree.gotoEdit(this)">'.$div['division_name_bng'].'</a>';//$div['division_name_bng'];
    		$row["icon"] = "icon icon-arrow-right";
    		$row["children"] = true;
    		$row["type"] = "root";
    		$data[] = $row;
    	}

    	$this->response->body(json_encode($data));
		$this->response->type('application/json');
		return $this->response;
    }

    public function getDistrictsTree()
    {
    	$request_data = $this->request->query['id'];
    	$request_arr = str_split($request_data, (strlen($request_data) - 1));
    	$type = $request_arr[0];
    	$id = $request_arr[1];

    	$data_array = array();
    	$field_name = "";
    	$node_name = "";
    	$child = false;

    	if($type == 'node_div_')
    	{
    		$districtTable = TableRegistry::get('GeoDistricts');
    		$data_array = $districtTable->find()->select(['id','district_name_bng'])->where(['geo_division_id'=>$id])->order(['id'])->toArray();
    		$field_name = 'district_name_bng';
    		$node_name = 'dist';
    		$child = true;
    	}

    	if($type == 'node_dist_')
    	{
    		$upazilaTable = TableRegistry::get('GeoUpazilas');
    		$data_array = $upazilaTable->find()->select(['id','upazila_name_bng'])->where(['geo_district_id'=>$id])->order(['id'])->toArray();
    		$field_name = 'upazila_name_bng';
    		$node_name = 'upazila';
    		$child = true;
    	}

    	if($type == 'node_upazila_')
    	{
    		$unionsTable = TableRegistry::get('GeoUnions');
    		$data_array = $unionsTable->find()->select(['id','union_name_bng'])->where(['geo_upazila_id'=>$id])->order(['id'])->toArray();
    		$field_name = 'union_name_bng';
    		$node_name = 'union';
    		$child = false;
    	}

    	$data = array();
    	foreach($data_array as $row_data)
    	{
    		$row = array();
    		$row["id"] = "node_".$node_name."_".$row_data['id'];
    		$row["text"] = '<a href="javascript:;" data-type="'.$node_name.'" data-id="'.$row_data['id'].'" onclick="GeoTree.gotoEdit(this)">'.$row_data[$field_name].'</a>';//$row_data[$field_name];
    		$row["icon"] = "icon icon-arrow-right";
    		$row["children"] = $child;
    		if(!$child)
    		{
    			$row["state"] = array("disabled" => true);
    		}
    		$data[] = $row;
    	}

    	$this->response->body(json_encode($data));
    	$this->response->type('application/json');
    	return $this->response;
    }
}
