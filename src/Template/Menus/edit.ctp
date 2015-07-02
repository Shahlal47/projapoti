<?php
$session = $this->request->session();
$modules = $session->read('modules');
$selected_module = $session->read('module_id');
?>

<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-gift"></i>Setup Menu
		</div>
		<div class="tools">
			<a href="javascript:;" class="collapse">
			</a>
			<a href="#portlet-config" data-toggle="modal" class="config">
			</a>
			<a href="javascript:;" class="reload">
			</a>
			<a href="javascript:;" class="remove">
			</a>
		</div>
	</div>
	<div class="portlet-body form">
		<!-- BEGIN FORM-->
		 <?= $this->Form->create($menu, ['id'=>'menu_manger_form','action' => 'edit','type'=>'post','class'=>'form-horizontal']);
		 	if(isset($type) && $type != 1){
		 		$this->Form->input('type', ['value'=>$type]);
		 	}
		 ?>
			<div class="form-body">
				<?= $this->Form->hidden('module_info_id',['label'=>false,'class'=>'form-control','value'=>$selected_module]);?>
				<?= $this->Form->hidden('id');?>
				<?php if(isset($type) && $type != 1){?>
				<div class="form-group">
					<label class="col-md-3 control-label">Main Menu</label>
					<div class="col-md-4">
						<?php
						if(!isset($main_menu_id)){
							$main_menu_id = "";
						}
						echo $this->Form->input('main_menu_id',['onchange'=>"MENU_SETUP.getSubMenuList($(this).va())",'options'=>$firstLayer,'label'=>false,'class'=>'form-control','empty'=>'--Select Main Menu--','value'=>$main_menu_id,'readonly'=>'readonly']);?>
					</div>
				</div>
				<?php }
				if(isset($type) && $type == 3){
				if(!isset($sub_menu_id)){
					$sub_menu_id = "";
				}
				?>
				<div class="form-group">
					<label class="col-md-3 control-label">Sub Menu</label>
					<div class="col-md-4">
						<?= $this->Form->input('sub_menu_id',['options'=>$secondLayer,'label'=>false,'class'=>'form-control','empty'=>'--Select Sub Menu--','value'=>$sub_menu_id]);?>
					</div>
				</div>
				<?php }?>
				<div class="form-group">
					<label class="col-md-3 control-label">Menu Name</label>
					<div class="col-md-4">
						<?= $this->Form->input('menu_name',['label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>'Menu Name']);?>	
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">Controller</label>
					<div class="col-md-4">
						<?= $this->Form->input('menu_controller',['onchange'=>"MENU_SETUP.getActionList($(this).text())",'label'=>false,'class'=>'form-control','options'=>$controllers,'type'=>'select','empty'=>'Select Controller']);?>	
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">Action</label>
					<div class="col-md-4">
						<?= $this->Form->input('menu_action',['type'=>'select','label'=>false,'class'=>'form-control']);?>	
					</div>
				</div>
			</div>
			<div class="form-actions">
				<div class="row">
					<div class="col-md-offset-3 col-md-9">
						<button type="submit" class="btn btn-circle blue">Submit</button>
						<button type="reset" class="btn btn-circle default">Cancel</button>
						<button type="button" onclick="PROJAPOTI.ajaxDeleteRecordAction('<?= $this->request->webroot; ?>menus/delete/<?= $menu->id?>')" class="btn btn-circle default">Delete</button>
					</div>
				</div>
			</div>
		<?= $this->Form->end();?>
		
		<!-- END FORM-->
	</div>
</div>

<script>
		
	var controller_name = $("#menu-controller option:selected").text();
    if(controller_name)
        {
    		MENU_SETUP.getActionList();
        }
    		
</script>
