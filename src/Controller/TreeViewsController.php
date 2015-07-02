<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\TreeViewsTable;
use Cake\Event\Event;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

class TreeViewsController extends AppController
{
    public function getDivisionsTree()
    {
        $this->loadModel('GeoDivisions');
        $divisionsTable = TableRegistry::get('GeoDivisions');
        $geoDivisions = $divisionsTable->find()->select(['id','division_name_eng'])->order(['id'])->toArray();

        $data = array();
        foreach($geoDivisions as $div)
        {
            $row = array();
            $row["id"] = "node_div_".$div['id'];
            $row["data-id"] = $div['id'];
            $row["text"] = '<a href="javascript:;" data-type="division" data-id="'.$div['id'].'" onclick="GeoTree.gotoEdit(this)">'.$div['division_name_eng'].'</a>';//$div['division_name_eng'];
            $row["icon"] = "icon icon-arrow-right";
            $row["children"] = true;
            $row["type"] = "root";
            $data[] = $row;
        }

        $this->response->body(json_encode($data));
        $this->response->type('application/json');
        return $this->response;
    }



    public function union_tree()
    {

    }

    public function thana_tree()
    {

    }

    public function postoffice_tree()
    {

    }

    public function city_ward()
    {

    }

    public function municipality_ward()
    {

    }



    public function getUnionsTree()
{
    $request_data = $this->request->query['id'];
    $request_arr = explode("_", $request_data);
    $type = "";
    foreach($request_arr as $arr)
    {
        if(intval($arr) > 0){
            continue;
        }
        $type .= $arr."_";
    }
    $id = $request_arr[count($request_arr) - 1];

    $data_array = array();
    $field_name = "";
    $node_name = "";
    $child = false;

    if($type == 'node_div_')
    {
        $this->loadModel('GeoDistricts');
        $districtTable = TableRegistry::get('GeoDistricts');
        $data_array = $districtTable->find()->select(['id', 'district_name_eng'])->where(['geo_division_id'=>$id])->order(['id'])->toArray();
        $field_name = 'district_name_eng';
        $node_name = 'dist';
        $child = true;
    }

    if($type == 'node_dist_')
    {
        $this->loadModel('GeoUpazilas');
        $upazilaTable = TableRegistry::get('GeoUpazilas');
        $data_array = $upazilaTable->find()->select(['id', 'upazila_name_eng'])->where(['geo_district_id'=>$id])->order(['id'])->toArray();
        $field_name = 'upazila_name_eng';
        $node_name = 'upazila';
        $child = true;
    }

    if($type == 'node_upazila_')
    {
        $this->loadModel('GeoUnions');
        $unionsTable = TableRegistry::get('GeoUnions');
        $data_array = $unionsTable->find()->select(['id', 'union_name_eng'])->where(['geo_upazila_id'=>$id])->order(['id'])->toArray();
        $field_name = 'union_name_eng';
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

    public function getThanasTree()
    {

        $request_data = $this->request->query['id'];
        $request_arr = explode("_", $request_data);
        $type = "";
        foreach($request_arr as $arr)
        {
            if(intval($arr) > 0){
                continue;
            }
            $type .= $arr."_";
        }
        $id = $request_arr[count($request_arr) - 1];

        $data_array = array();
        $field_name = "";
        $node_name = "";
        $child = false;

        if($type == 'node_div_')
        {
            $this->loadModel('GeoDistricts');
            $districtTable = TableRegistry::get('GeoDistricts');
            $data_array = $districtTable->find()->select(['id', 'district_name_eng'])->where(['geo_division_id'=>$id])->order(['id'])->toArray();
            $field_name = 'district_name_eng';
            $node_name = 'dist';
            $child = true;
        }

        if($type == 'node_dist_')
        {
            $this->loadModel('GeoThanas');
            $thanasTable = TableRegistry::get('GeoThanas');
            $data_array = $thanasTable->find()->select(['id', 'thana_name_eng'])->where(['geo_district_id'=>$id])->order(['id'])->toArray();
            $field_name = 'thana_name_eng';
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

    public function getPostOfficesTree()
    {
        $request_data = $this->request->query['id'];
        $request_arr = explode("_", $request_data);
        $type = "";
        foreach($request_arr as $arr)
        {
            if(intval($arr) > 0){
                continue;
            }
            $type .= $arr."_";
        }
        $id = $request_arr[count($request_arr) - 1];

        $data_array = array();
        $field_name = "";
        $node_name = "";
        $child = false;

        if($type == 'node_div_')
        {
            $this->loadModel('GeoDistricts');
            $districtTable = TableRegistry::get('GeoDistricts');
            $data_array = $districtTable->find()->select(['id','district_name_eng'])->where(['geo_division_id'=>$id])->order(['id'])->toArray();
            $field_name = 'district_name_eng';
            $node_name = 'dist';
            $child = true;
        }

        if($type == 'node_dist_')
        {
            $this->loadModel('GeoUpazilas');
            $upazilaTable = TableRegistry::get('GeoUpazilas');
            $data_array = $upazilaTable->find()->select(['id','upazila_name_eng'])->where(['geo_district_id'=>$id])->order(['id'])->toArray();
            $field_name = 'upazila_name_eng';
            $node_name = 'upazila';
            $child = true;
        }

        if($type == 'node_upazila_')
        {
            $this->loadModel('GeoPostOffices');
            $postOfficesTable = TableRegistry::get('GeoPostOffices');
            $data_array = $postOfficesTable->find()->select(['id', 'postoffice_name_eng'])->where(['geo_upazila_id'=>$id])->order(['id'])->toArray();
            $field_name = 'postoffice_name_eng';
            $node_name = 'postoffice';
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

    public function getCityWardTree()
    {
        $request_data = $this->request->query['id'];
        $request_arr = explode("_", $request_data);
        $type = "";
        foreach($request_arr as $arr)
        {
            if(intval($arr) > 0){
                continue;
            }
            $type .= $arr."_";
        }
        $id = $request_arr[count($request_arr) - 1];

        $data_array = array();
        $field_name = "";
        $node_name = "";
        $child = false;

        if($type == 'node_div_')
        {
            $this->loadModel('GeoDistricts');
            $districtTable = TableRegistry::get('GeoDistricts');
            $data_array = $districtTable->find()
                ->select(['id', 'district_name_eng'])
                ->where(['geo_division_id'=>$id])
                ->order(['id'])
                ->toArray();
            $field_name = 'district_name_eng';
            $node_name = 'dist';
            $child = true;
        }

        if($type == 'node_dist_')
        {
            $this->loadModel('GeoCityCorporations');
            $cityCorporationTable = TableRegistry::get('GeoCityCorporations');
            $data_array = $cityCorporationTable->find()
                ->select(['id', 'city_corporation_name_eng'])
                ->where(['geo_district_id' => $id])
                ->order(['id'])
                ->toArray();
            $field_name = 'city_corporation_name_eng';
            $node_name = 'city';
            $child = true;
        }

        if($type == 'node_city_')
        {
            $this->loadModel('GeoCityCorporationWards');
            $cityCorporationWardTable = TableRegistry::get('GeoCityCorporationWards');
            $data_array = $cityCorporationWardTable->find()
                ->select(['id', 'ward_name_eng'])
                ->where(['geo_city_corporations_id' => $id])
                ->order(['id'])
                ->toArray();
            $field_name = 'ward_name_eng';
            $node_name = 'cityward';
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

    public function getMunicipalityTree()
    {
        $request_data = $this->request->query['id'];
        $request_arr = explode("_", $request_data);
        $type = "";
        foreach($request_arr as $arr)
        {
            if(intval($arr) > 0){
                continue;
            }
            $type .= $arr."_";
        }
        $id = $request_arr[count($request_arr) - 1];

        $data_array = array();
        $field_name = "";
        $node_name = "";
        $child = false;

        if($type == 'node_div_')
        {
            $this->loadModel('GeoDistricts');
            $districtTable = TableRegistry::get('GeoDistricts');
            $data_array = $districtTable->find()->select(['id','district_name_eng'])->where(['geo_division_id'=>$id])->order(['id'])->toArray();
            $field_name = 'district_name_eng';
            $node_name = 'dist';
            $child = true;
        }

        if($type == 'node_dist_')
        {
            $this->loadModel('GeoUpazilas');
            $upazilaTable = TableRegistry::get('GeoUpazilas');
            $data_array = $upazilaTable->find()->select(['id','upazila_name_eng'])->where(['geo_district_id'=>$id])->order(['id'])->toArray();
            $field_name = 'upazila_name_eng';
            $node_name = 'upazila';
            $child = true;
        }

        if($type == 'node_upazila_')
        {
            $this->loadModel('GeoMunicipalities');
            $municipalitiesTable = TableRegistry::get('GeoMunicipalities');
            $data_array = $municipalitiesTable->find()->select(['id','municipality_name_eng'])->where(['geo_upazila_id'=>$id])->order(['id'])->toArray();
            $field_name = 'municipality_name_eng';
            $node_name = 'municipality';
            $child = true;
        }

        if($type == 'node_municipality_')
        {
            $this->loadModel('GeoMunicipalityWards');
            $municipalityWardsTable = TableRegistry::get('GeoMunicipalityWards');
            $data_array = $municipalityWardsTable->find()->select(['id', 'ward_name_eng'])->where(['geo_municipalities_id'=>$id])->order(['id'])->toArray();
            $field_name = 'ward_name_eng';
            $node_name = 'municipalityward';
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