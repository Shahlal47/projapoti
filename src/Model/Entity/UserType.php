<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class UserType extends Entity
{
    // Make all fields mass assignable for now.
    protected $_accessible = ['*' => true];
}