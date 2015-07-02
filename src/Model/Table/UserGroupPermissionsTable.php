<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articles Model
 */
class UserGroupPermissionsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        
        $this->belongsTo('UserTypes');
    }
}
