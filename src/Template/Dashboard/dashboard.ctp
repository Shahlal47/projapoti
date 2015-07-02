<!-- BEGIN PAGE BREADCRUMB -->
<ul class="page-breadcrumb breadcrumb"><!-- ADD CLASS hide for not showing breadcrumb -->
	<li>
		<a href="<?php echo $this->request->webroot;?>">Home</a><i class="fa fa-circle"></i>
	</li>
	<li class="active">
		 Dashboard
	</li>
</ul>
<!-- END PAGE BREADCRUMB -->
<!-- BEGIN PAGE HEAD -->
<div class="page-head">
	<!-- BEGIN PAGE TITLE -->
	<div class="page-title">
		<h1><?= $loggedUser['username'];?> Dashboard</h1>
	</div>
	<!-- END PAGE TITLE -->
	
	<!-- BEGIN PAGE TOOLBAR -->
	<?= $this->element('layout_settings') ?>
	<!-- END PAGE TOOLBAR -->
</div>
<!-- END PAGE HEAD -->