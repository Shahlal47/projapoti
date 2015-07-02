<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class GeoDistricts extends Entity
{
    protected $_accessible = [
        'geo_division_id' => true,
        'division_bbs_code' => true,
        'district_name_eng' => true,
        'district_name_bng' => true,
        'bbs_code' => true,
        'status' => true,
        'created_by' => true,
        'modified_by' => true,
        'geo_division' => true,
        'geo_city_corporation_wards' => true,
        'geo_city_corporations' => true,
        'geo_municipalities' => true,
        'geo_municipality_wards' => true,
        'geo_post_offices' => true,
        'geo_thanas' => true,
        'geo_unions' => true,
        'geo_upazilas' => true,
        'office_geos' => true,
    ];
}