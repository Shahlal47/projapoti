<ul class="page-breadcrumb breadcrumb"><!-- ADD CLASS hide for not showing breadcrumb -->
	<li>
		<a href="<?php echo $this->request->webroot;?>">Home</a><i class="fa fa-circle"></i>
	</li>
	<li class="active">
		 Modules
	</li>
</ul>

<!-- END PAGE BREADCRUMB -->
<div class="portlet box red">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i>Module Table
		</div>
		<div class="tools">
			<a href="javascript:;" class="collapse"></a>
			<a href="#portlet-config" data-toggle="modal" class="config"></a>
			<a href="javascript:;" class="reload"></a>
			<a href="javascript:;" class="remove"></a>
		</div>
	</div>
	<div class="portlet-body">
		<div class="table-scrollable">
			<table class="table table-hover">
				<thead>
					<tr>
						<th><?= $this->Paginator->sort('id') ?></th>
						<th>Name</th>
						<th>Name (Bangla)</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($moduleInfos as $module):
					?>
					<tr>
						<td><?= $this->Number->format($module['id']) ?></td>
						<td><?= h($module['name']) ?></td>
						<td><?= h($module['name_bn']) ?></td>
						<td class="actions">
			                <?= $this->Html->link(__('Edit'), ['controller'=>'moduleInfos','action' => 'edit', $module['id']], ['class' => 'btn btn-primary']) ?>
			                <?= $this->Form->postLink(__('Delete'), ['controller'=>'moduleInfos','action' => 'delete', $module['id']], ['class' => 'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $module['id'])]) ?>
			             </td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

