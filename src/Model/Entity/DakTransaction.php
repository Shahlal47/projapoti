<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class DakTransaction extends Entity
{
    protected $_accessible = [
        'dak' => true,
        'dak_action_id' => true,
        'office_organization_id' => true,
        'decision_taken' => true,
        'transaction_date' => true,
        'sender_action_owner' => true,
        'receiver_action_owner' => true,
        'recipient' => true,
        'attention' => true,
        'created_by' => true,
        'modified_by' => true,
        'dak_action' => true,
        'office_organization' => true,
    ];
}
