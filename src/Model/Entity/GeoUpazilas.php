<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class GeoUpazilas extends Entity
{
    protected $_accessible = [
        'geo_district_id' => true,
        'geo_division_id' => true,
        'divisin_bbs_code' => true,
        'district_bbs_code' => true,
        'upazila_name_bng' => true,
        'upazila_name_eng' => true,
        'bbs_code' => true,
        'status' => true,
        'created_by' => true,
        'modified_by' => true,
        'geo_district' => true,
        'geo_division' => true,
        'geo_municipalities' => true,
        'geo_municipality_wards' => true,
        'geo_post_offices' => true,
        'geo_unions' => true,
        'office_geos' => true,
    ];
}