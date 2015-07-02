<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Menu extends Entity
{
    // Make all fields mass assignable for now.
    protected $_accessible = ['*' => true];
}