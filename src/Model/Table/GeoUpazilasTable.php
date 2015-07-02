<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;


class GeoUpazilasTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('geo_upazilas');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('GeoDistricts', [
            'foreignKey' => 'geo_district_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('GeoDivisions', [
            'foreignKey' => 'geo_division_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('GeoMunicipalities', [
            'foreignKey' => 'geo_upazila_id'
        ]);
        $this->hasMany('GeoMunicipalityWards', [
            'foreignKey' => 'geo_upazila_id'
        ]);
        $this->hasMany('GeoPostOffices', [
            'foreignKey' => 'geo_upazila_id'
        ]);
        $this->hasMany('GeoUnions', [
            'foreignKey' => 'geo_upazila_id'
        ]);
        $this->hasMany('OfficeGeos', [
            'foreignKey' => 'geo_upazila_id'
        ]);
    }
}