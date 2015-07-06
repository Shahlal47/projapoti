<?php
namespace App\Model\Table;

use App\Model\Entity\DakType;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DakTypes Model
 */
class DakTypesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('dak_types');
        $this->displayField('name');
        $this->addBehavior('Timestamp');
        $this->hasMany('DakDaptoriks', [
            'foreignKey' => 'dak_type_id'
        ]);
        $this->hasMany('DakNagoriks', [
            'foreignKey' => 'dak_type_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('id', 'create')
            ->notEmpty('id');
            
        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');
            
        $validator
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');
            
        $validator
            ->allowEmpty('modified_by');

        return $validator;
    }
}
