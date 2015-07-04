<?php
//	$session = $this->request->session();
//	$menu_items = $session->read('menu_items');
//	$selected_module = $session->read('module_id');
//?>


<!--<ul class="page-breadcrumb breadcrumb"><!-- ADD CLASS hide for not showing breadcrumb -->-->
<!--	<li><a href="--><?php //echo $this->request->webroot;?><!--">Home</a><i class="fa fa-circle"></i></li>-->
<!--	<li class="active">Menu Manager</li>-->
<!--</ul>-->

<div class="portlet light">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-table"></i>Nothi List</div>
		<div class="tools">
			<a href="javascript:" class="collapse"></a>
			<a href="#portlet-config" data-toggle="modal" class="config"></a>
			<a href="javascript:" class="reload"></a>
			<a href="javascript:" class="remove"></a>
		</div>
	</div>
	<div class="portlet-body">
		<div class="table-toolbar">
			<div class="row">
				<div class="col-md-6">
					<?= $this->Html->link('Add New Nothi', ['action' => 'add'], ['class' => 'btn btn-default']) ?>
				</div>
				<div class="col-md-6">
					<div class="btn-group pull-right">
						<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i></button>
						<ul class="dropdown-menu pull-right">
							<li><a href="#">Print </a></li>
							<li><a href="#">Save as PDF </a></li>
							<li><a href="#">Export to Excel </a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th class="text-center">Nothi ID</th>
					<th class="text-center">Nothi No</th>
					<th class="text-center">Subject</th>
					<th class="actions text-center"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody role="alert" aria-live="polite" aria-relevant="all">

			<?php foreach ($query as $row): ?>
			<tr>
				<td class="text-center"><?= h($row->id) ?></td>
				<td class="text-center"><?= h($row->nothi_no) ?></td>
				<td class="text-center"><?= h($row->subject) ?></td>
				<td class="actions text-center">
					<?= $this->Html->link(__(''), ['action' => 'view', $row->id], ['class' => 'fa fa-eye']) ?> |
					<?= $this->Html->link(__(''), ['action' => 'edit', $row->id], ['class' => 'fa fa-pencil']) ?> |
					<?= $this->Form->postLink(__(''), ['action' => 'delete', $row->id], ['class' => 'fa fa-trash'], ['confirm' => __('Are you sure you want to delete # {0}?', $row->id)]) ?>
				</td>
			</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
