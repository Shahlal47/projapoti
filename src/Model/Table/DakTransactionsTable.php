<?php
namespace App\Model\Table;

use App\Model\Entity\DakTransaction;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class DakTransactionsTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('dak_transactions');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('DakActions', [
            'foreignKey' => 'dak_action_id'
        ]);
        $this->belongsTo('OfficeOrganizations', [
            'foreignKey' => 'office_organization_id',
            'joinType' => 'INNER'
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('id', 'create');
            
        $validator
            ->allowEmpty('dak');
            
        $validator
            ->allowEmpty('decision_taken');
            
        $validator
            ->add('transaction_date', 'valid', ['rule' => 'date'])
            ->requirePresence('transaction_date', 'create')
            ->notEmpty('transaction_date');
            
        $validator
            ->allowEmpty('sender_action_owner');
            
        $validator
            ->allowEmpty('receiver_action_owner');
            
        $validator
            ->requirePresence('recipient', 'create')
            ->notEmpty('recipient');
            
        $validator
            ->requirePresence('attention', 'create')
            ->notEmpty('attention');
            
        $validator
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');
            
        $validator
            ->allowEmpty('modified_by');

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['dak_action_id'], 'DakActions'));
        $rules->add($rules->existsIn(['office_organization_id'], 'OfficeOrganizations'));
        return $rules;
    }
}
