<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;


class GeoDistrictsTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('geo_districts');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('GeoDivisions', [
            'foreignKey' => 'geo_division_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('GeoCityCorporationWards', [
            'foreignKey' => 'geo_district_id'
        ]);
        $this->hasMany('GeoCityCorporations', [
            'foreignKey' => 'geo_district_id'
        ]);
        $this->hasMany('GeoMunicipalities', [
            'foreignKey' => 'geo_district_id'
        ]);
        $this->hasMany('GeoMunicipalityWards', [
            'foreignKey' => 'geo_district_id'
        ]);
        $this->hasMany('GeoPostOffices', [
            'foreignKey' => 'geo_district_id'
        ]);
        $this->hasMany('GeoThanas', [
            'foreignKey' => 'geo_district_id'
        ]);
        $this->hasMany('GeoUnions', [
            'foreignKey' => 'geo_district_id'
        ]);
        $this->hasMany('GeoUpazilas', [
            'foreignKey' => 'geo_district_id'
        ]);
        $this->hasMany('OfficeGeos', [
            'foreignKey' => 'geo_district_id'
        ]);
    }
}