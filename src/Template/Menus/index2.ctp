<?php
	$session = $this->request->session();
	$menu_items = $session->read('menu_items');
	$selected_module = $session->read('module_id');

?>
<ul class="page-breadcrumb breadcrumb"><!-- ADD CLASS hide for not showing breadcrumb -->
	<li><a href="<?php echo $this->request->webroot;?>">Home</a><i class="fa fa-circle"></i></li>
	<li class="active">Menu Manager</li>
</ul>
<div class="row">
	<div class="col-md-4">
		<div class="portlet green-meadow box">
			<div class="portlet-title">
				<div class="caption"><i class="fa fa-cogs"></i>Menu Tree</div>
				<div class="tools">
					<a href="javascript:;" class="collapse"></a>
					<a href="#portlet-config" data-toggle="modal" class="config"></a>
					<a href="javascript:;" class="reload"></a>
					<a href="javascript:;" class="remove"> </a>
				</div>
			</div>
			<div class="portlet-body">
				<div id="jstree">
					<!-- in this example the tree is populated from inline HTML -->
					<?php $main_index = 0;?>
					<ul>
						<?php if(isset($menu_items[1]))
							{
								foreach($menu_items[1] as $main_menu_id=>$main_menu)
								{?>
						
								<li data_menu_id = "<?= $main_menu->id;?>" class="main_menu" id="main_menu_<?= $main_index++;?>" data-jstree='{"icon":"icon icon-arrow-right"}'>
									<a href="" ><?= $main_menu->menu_name;?></a>
									<?php $sub_index = 0;?>
									<?php
									 if(isset($menu_items[2][$main_menu_id]) && !empty($menu_items[2][$main_menu_id])){
										echo "<ul>";
										foreach($menu_items[2][$main_menu_id] as $sub_menu)
											{?>
											<li data_menu_id = "<?= $sub_menu->id;?>" data_main_menu_id = "<?= $main_menu->id;?>" class="sub_menu" id="main_menu_<?= $main_index;?>_sub_menu_<?= $sub_index++;?>" data-jstree='{"icon":"icon icon-arrow-right"}'>
												<a href="<?= $this->request->webroot.$sub_menu->menu_controller."/".$sub_menu->menu_action;?>" ><?= $sub_menu->menu_name;?></a>
												<?php
												$child_index = 1;
												if(isset($menu_items[3][$main_menu_id][$sub_menu->id]) && !empty($menu_items[3][$main_menu_id][$sub_menu->id]))
												{
												echo "<ul>";
												foreach($menu_items[3][$main_menu_id][$sub_menu->id] as $menu)
													{?>
													<li data_menu_id = "<?= $menu->id;?>" data_main_menu_id = "<?= $main_menu->id;?>" data_sub_menu_id = "<?= $sub_menu->id;?>" class="child_menu" id="main_menu_<?= $main_index;?>_sub_menu_<?= $sub_index++;?>_child_menu_<?= $child_index++;?>" data-jstree='{"icon":"icon icon-arrow-right"}'>
														<a href="<?= $this->request->webroot.$menu->menu_controller."/".$menu->menu_action;?>" ><?= $menu->menu_name;?></a>
													</li>			
												<?php	}
												echo "</ul>";
												}?>
												<ul>
													<li data_menu_id = "0" data_main_menu_id = "<?= $main_menu->id;?>" data_sub_menu_id = "<?= $sub_menu->id;?>" class="child_menu" id="main_menu_<?= $main_index;?>_sub_menu_<?= $sub_index++;?>_child_menu_<?= $child_index++;?>" data-jstree='{"icon":"icon icon-arrow-right"}'>
														<a href="" ><span class="badge badge-success"><strong>+</strong></span></a>
													</li>
												</ul>
											</li>			
									<?php	}
										echo "</ul>";
										}?>
									<ul>
										<li data_main_menu_id = "<?= $main_menu->id;?>" class="sub_menu" id="main_menu_<?= $main_index;?>_sub_menu_<?= $sub_index++;?>" data-jstree='{"icon":"icon icon-arrow-right"}'>
											<a href="" ><span class="badge badge-success"><strong>+</strong></span></a>
										</li>
									</ul>
								</li>
						<?php 	}
							}		
						?>
						<li data_menu_id="0" class="main_menu" id="main_menu_<?= $main_index++;?>" data-jstree='{"icon":"icon icon-arrow-right"}'>
							<a href="" ><span class="badge badge-success"><strong>+</strong></span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-8" id="menu_setup_div">
	</div>
</div>

<script>
var MENU_SETUP = {
		setupMainMenu:function(node_id)
		{
			if(node_id == "0"){
				PROJAPOTI.ajaxLoadWithRequestData("<?= $this->request->webroot;?>menus/add", {"is_ajax":true,"type":1}, "#menu_setup_div");	
			}
			else{
				PROJAPOTI.ajaxLoadWithRequestData("<?= $this->request->webroot;?>menus/edit/"+node_id, {"is_ajax":true,"type":1}, "#menu_setup_div");
			}		
		},
		setupSubMenu:function(parent_id, node_id)
		{
			if(node_id == "0"){
				PROJAPOTI.ajaxLoadWithRequestData("<?= $this->request->webroot;?>menus/add", {"is_ajax":true,"type":2, "main_menu_id":parent_id}, "#menu_setup_div");
			}
			else{
				PROJAPOTI.ajaxLoadWithRequestData("<?= $this->request->webroot;?>menus/edit/"+node_id, {"is_ajax":true,"type":2, "main_menu_id":parent_id}, "#menu_setup_div");
			}	
		},
		setupChildMenu:function(main_menu_id, sub_menu_id, node_id)
		{
			if(node_id == "0"){
				PROJAPOTI.ajaxLoadWithRequestData("<?= $this->request->webroot;?>menus/add", {"is_ajax":true,"type":3,"main_menu_id":main_menu_id, "sub_menu_id":sub_menu_id}, "#menu_setup_div");
			}
			else{
				PROJAPOTI.ajaxLoadWithRequestData("<?= $this->request->webroot;?>menus/edit/"+node_id, {"is_ajax":true,"type":3,"main_menu_id":main_menu_id, "sub_menu_id":sub_menu_id}, "#menu_setup_div");	
			}	
		},
		getActionList:function()
		{
			controller = $("#menu-controller option:selected").text();
			PROJAPOTI.ajaxSubmitDataCallback("<?= $this->request->webroot;?>userGroupPermissions/getControllerActions",{"controller_name":controller}, function(response){
				PROJAPOTI.projapoti_dropdown("#menu-action", response, "--Select Action--");
				<?php   
			    if(isset($menu['menu_action']) && !empty($menu['menu_action'])){?>
			    	$("#menu-action").val('<?php echo $menu['menu_action']?>');
			    <?php }?>
										
			});		
		},
		saveMenu:function(type)
		{
			// Type : 1->Main Menu, 2->Sub Menu, 3->link Menu
			PROJAPOTI.ajaxSubmitDataCallback("<?= $this->request->webroot;?>menus/add",{"is_ajax":true,"type":type, "form_data":$("#menu_manger_form").serialize()}, function(response){
				PROJAPOTI.ajaxRequestModelAction();	
			});	
		}
};
$(function () {
	// 6 create an instance when the DOM is ready
    
    $('#jstree').jstree({
	  "core" : {
	    "themes" : {
	      "variant" : "large"
	    }
	  }
	});
    // 7 bind to events triggered on the tree
    $('#jstree').on("changed.jstree", function (e, data) {
		var selected_node_class = data.node.li_attr.class;
		var selected_node_id = data.node.li_attr.data_menu_id;
		var main_menu_id = data.node.li_attr.data_main_menu_id;
		var sub_menu_id = data.node.li_attr.data_sub_menu_id;
		if(selected_node_id == "n/a" || selected_node_id == "" || typeof selected_node_id === "undefined")
			{
			selected_node_id = "0";
			}
		
		if(selected_node_class == 'main_menu')
		{
			MENU_SETUP.setupMainMenu(selected_node_id);
		}
		else if(selected_node_class == 'sub_menu')
		{
			MENU_SETUP.setupSubMenu(main_menu_id, selected_node_id);
		}
		else
		{
    		MENU_SETUP.setupChildMenu(main_menu_id, sub_menu_id, selected_node_id);	
  		}
    });
    // 8 interact with the tree - either way is OK
    $('button').on('click', function () {
      $('#jstree').jstree(true).select_node('child_node_1');
      $('#jstree').jstree('select_node', 'child_node_1');
      $.jstree.reference('#jstree').select_node('child_node_1');
    });

  });
</script>