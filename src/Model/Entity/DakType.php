<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DakType Entity.
 */
class DakType extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'id' => true,
        'name' => true,
        'created_by' => true,
        'modified_by' => true,
        'dak_daptoriks' => true,
        'dak_nagoriks' => true,
    ];
}
