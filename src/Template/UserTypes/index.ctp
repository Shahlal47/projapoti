<ul class="page-breadcrumb breadcrumb"><!-- ADD CLASS hide for not showing breadcrumb -->
	<li>
		<a href="<?php echo $this->request->webroot;?>">Home</a><i class="fa fa-circle"></i>
	</li>
	<li class="active">
		 User Role
	</li>
</ul>
<!-- END PAGE BREADCRUMB -->
<div class="portlet box red">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i>User Role Table
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
	<div class="portlet-body">
		<div class="table-scrollable">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>
							 <?= $this->Paginator->sort('id') ?>
						</th>
						<th>
							 <?= $this->Paginator->sort('name') ?>
						</th>
						<th>
							Action
						</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($userTypes as $userType):
					?>
					<tr>
						<td>
							<?= $this->Number->format($userType->id) ?>
						</td>
						<td>
							 <?= h($userType->name) ?>
						</td>
						<td class="actions">
			                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userType->id]) ?>
			                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userType->name)]) ?>
			             </td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

