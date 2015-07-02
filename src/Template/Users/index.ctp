<ul class="page-breadcrumb breadcrumb"><!-- ADD CLASS hide for not showing breadcrumb -->
	<li>
		<a href="<?php echo $this->request->webroot;?>">Home</a><i class="fa fa-circle"></i>
	</li>
	<li class="active">
		 Users
	</li>
</ul>
<!-- END PAGE BREADCRUMB -->
<div class="portlet box red">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i>User Table
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
							 <?= $this->Paginator->sort('username') ?>
						</th>
						<th>
							Role
						</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($users as $user):
					?>
					<tr>
						<td>
							<?= $this->Number->format($user->id) ?>
						</td>
						<td>
							 <?= h($user->username) ?>
						</td>
						<td>
							 <?= h($user->user_type->name) ?>
						</td>
						<td class="actions">
			                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
			                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
			             </td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

