<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;
use Cake\Cache\Cache;

/**
 * Articles Model
 */
class UserTypesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('user_types');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
    }
    
    public function getUserTypes()
    {
    	$userTypes = $this->find();
    	$uts = array();
    	foreach ($userTypes as $ut)
    	{
    		if($ut->id)
    		{
    			$uts[$ut->id] = $ut->name;
    		}
    	}
    
    	return $uts;
    }
    
    public function getUserTypeIdsAndNames()
    {
    	$userTypes = $this->find();
    	$uts = array();
    	foreach ($userTypes as $ut)
    	{
    		$row = array();
    		$row['id'] = $ut->id;
    		$row['name'] = $ut->name;
    		
    		$uts[] = $row;
    	}
    
    	return $uts;
    }
    
    /**
     * Used to check permissions of group
     *
     * @access public
     * @param string $controller controller name
     * @param string $action action name
     * @param integer $userGroupID group id
     * @return boolean
     */
    public function isUserGroupAccess($controller, $action, $userGroupID)
    {
    	$includeGuestPermission = false;
    	if(!PERMISSIONS)
    	{
    		return true;
    	}
    	
    	if($userGroupID == SUPERMAN_GROUP_ID && !SUPERMAN_PERMISSIONS)
    	{
    		return true;
    	}
    
    	$permissions = $this->getPermissions($userGroupID, $includeGuestPermission);
    	$access      = str_replace(' ', '', ucwords(str_replace('_', ' ', $controller))) . '/' . $action;
    	
    	if(in_array($access, $permissions))
    	{
    		return true;
    	}
    	return false;
    }
    
    /**
     * Used to check permissions of guest group
     *
     * @access public
     * @param string $controller controller name
     * @param string $action action name
     * @return boolean
     */
    public function isGuestAccess($controller, $action)
    {
    	if(PERMISSIONS)
    	{
    		return $this->isUserGroupAccess($controller, $action, GUEST_GROUP_ID);
    	} else
    	{
    		return true;
    	}
    }
    
    /**
     * Used to get permissions from cache or database of a group
     *
     * @access public
     * @param integer $userGroupID group id
     * @return array
     */
    public function getPermissions($userGroupID)
    {
    	if(empty($userGroupID))
    	{
    		$userGroupID = 0;
    	}
    	$permissions = array();
    	// using the cake cache to store rules
    	$cacheKey = 'rules_for_group_' . $userGroupID;
    	$actions  = Cache::read($cacheKey, 'UserMgmt');
    	
    	if($actions === false)
    	{
    		$userGroupPermissions = TableRegistry::get('UserGroupPermissions');
    		$actions = $userGroupPermissions->find('all', array('conditions' => 'user_type_id = ' . $userGroupID . ' AND allowed = 1'));
    		
    		$actions = $actions->toArray();
    		Cache::write($cacheKey, $actions, 'UserMgmt');
    	}
    	foreach($actions as $action)
    	{
    		$permissions[] = $action['controller'] . '/' . $action['action'];
    	}
    	
    	return $permissions;
    }
}
