<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;


class MenusTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('menus');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('ModuleInfos');
    }
    
    public function validationDefault(Validator $validator)
    {
    	return $validator
					->requirePresence('menu_name')
    				->notEmpty('menu_name', 'Please fill this field')
				    ->add('menu_name', [
				    		'length' => [
				    		'rule' => ['maxLength', 64],
				    		'message' => 'Menu name should not exceed 64 characters',
				    		]
				    		]);
    }
    /**
     * Prepare Module Wise Menu
     */
    public function setupModuleMenu($module_id)
    {
    	$query = $this->find()->where(['module_info_id'=>$module_id])->order(['sequence_no' => 'ASC']);	
    	$results = $query->toArray();

    	$menuLayer[1] = array();
    	$menuLayer[2] = array();
    	$menuLayer[3] = array();

    	foreach($results as $menu)
    	{
    		if(intval($menu->main_menu_id) == 0 && intval($menu->sub_menu_id) == 0 )
    		{
    			$menuLayer[1][$menu->id] = $menu;
    		}
    	}
    	foreach($results as $menu)
    	{
    		if(intval($menu->main_menu_id) > 0 && intval($menu->sub_menu_id) == 0 )
    		{
    			$menuLayer[2][$menu->main_menu_id][] = $menu;
    		}
    	}
    	foreach($results as $menu)
    	{
    		if(intval($menu->main_menu_id) > 0 && intval($menu->sub_menu_id) > 0 )
    		{
    			$menuLayer[3][$menu->main_menu_id][$menu->sub_menu_id][] = $menu;
    		}
    	}
//		pr($menuLayer); die();
    	return $menuLayer;
    }
    
    /**
     * Get Menu Sequence No
     */
    public function getMenuWiseDisplaySeq($module_id, $main_menu_id, $sub_menu_id)
    {
    	$query = $this->find()->select(['sequence_no'])->where(['module_info_id'=>$module_id, 'main_menu_id'=>$main_menu_id, 'sub_menu_id'=>$sub_menu_id])->order(['sequence_no' => 'DESC']);
    	return $results = $query->first();
    }
}

