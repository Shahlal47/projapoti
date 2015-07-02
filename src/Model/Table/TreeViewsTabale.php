<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;


class TreeViewsTable extends Table{

//    public  function loadArray(){
//
//        $this->loadModel('GeoDivisions');
//        $geo_division = TableRegistry::get('GeoDivisions');
//        $this->loadModel('GeoDistricts');
//        $geo_district = TableRegistry::get('GeoDistricts');
//        $this->loadModel('GeoUpazilas');
//        $geo_upazila = TableRegistry::get('GeoUpazilas');
//
//        $level[1] = array();
//        $level[2] = array();
//        $level[3] = array();
//
////        pr('==========  Divisions  ==============');
//        $geo_division = $geo_division->find()
//            ->select(['id', 'division_name_eng'])
//            ->order('id');
//        foreach ($geo_division as $division):
//            $level[1][$division['id']][] = $division;
//        endforeach;
////        pr($level);  die();
//
////        pr('===========  Districts  =============');
//        $geo_district = $geo_district->find()
//            ->select(['id', 'geo_division_id', 'district_name_eng'])
//            ->order('geo_division_id');
//
//        foreach ($geo_district as $district):
//            $level[2][$district['geo_division_id']][] = $district;
//        endforeach;
////        pr($level); die();
//
////        pr('============  Upazilas  =============');
//        $geo_upazila = $geo_upazila->find()
//            ->select(['id', 'geo_district_id', 'upazila_name_eng'])
//            ->order('geo_district_id');
//
//        foreach ($geo_upazila as $upazila):
//            $level[3][$district['geo_division_id']][$upazila['geo_district_id']][] = $upazila;
//        endforeach;
////        pr($level); die();
//    }

}