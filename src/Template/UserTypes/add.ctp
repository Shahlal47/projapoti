<ul class="page-breadcrumb breadcrumb"><!-- ADD CLASS hide for not showing breadcrumb -->
	<li>
		<a href="<?php echo $this->request->webroot;?>">Home</a><i class="fa fa-circle"></i>
	</li>
	<li>
		<a href="<?php echo $this->request->webroot;?>users/">User Roles</a><i class="fa fa-circle"></i>
	</li>
	<li class="active">
		 Add User Role
	</li>
</ul>
<!-- END PAGE BREADCRUMB -->
<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-gift"></i>Add User Role
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
		 <?= $this->Form->create($userType, ['action' => 'add','type'=>'post','class'=>'form-horizontal']);?>
			<div class="form-body">
				<div class="form-group">
					<label class="col-md-3 control-label">Role</label>
					<div class="col-md-4">
						<div class="input-group">
							<span class="input-group-addon input-circle-left">
							<i class="fa fa-user"></i>
							</span>
							<?= $this->Form->input('name',['label'=>false,'class'=>'form-control input-circle-right','type'=>'text','placeholder'=>'Role']);?>
						</div>
					</div>
				</div>
			</div>
			<div class="form-actions">
				<div class="row">
					<div class="col-md-offset-3 col-md-9">
						<button type="submit" class="btn btn-circle blue">Submit</button>
						<button type="reset" class="btn btn-circle default">Cancel</button>
					</div>
				</div>
			</div>
		<?= $this->Form->end();?>
		
		<!-- END FORM-->
	</div>
</div>