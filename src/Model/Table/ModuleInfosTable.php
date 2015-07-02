<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articles Model
 */
class ModuleInfosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('module_infos');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
    }
    
    public function getModuleList()
    {
    	$moduleList = $this->find('list')->toArray();
    	return $moduleList;
    }
}
