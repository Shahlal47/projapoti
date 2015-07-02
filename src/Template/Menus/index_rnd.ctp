<ul class="page-breadcrumb breadcrumb"><!-- ADD CLASS hide for not showing breadcrumb -->
	<li><a href="<?php echo $this->request->webroot;?>">Home</a><i class="fa fa-circle"></i></li>
	<li class="active">Menus</li>
</ul>
<!-- END PAGE BREADCRUMB -->
<div class="portlet box red">
	<div class="portlet-title">
		<div class="caption"><i class="fa fa-cogs"></i>Menu Table</div>
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
					<th>Module</th>
					<th>Menu</th>
					<th>Sequence</th>
					<th>Main Menu</th>
					<th>Sub Menu</th>
				</tr>
				</thead>
				<tbody>
				<?php
				foreach ($menus as $menu):
					?>
					<tr>
						<td><?= $this->Number->format($menu['id']) ?></td>
						<td><?= h($menu['module_name']) ?></td>
						<td><?= h($menu['menu_name']) ?></td>
						<td><?= h($menu['sequence_no']) ?></td>
						<td><?= h($menu['main_menu']) ?></td>
						<td><?= h($menu['sub_menu']) ?></td>
						<td class="actions">
							<?= $this->Html->link(__('Edit'), ['action' => 'edit', $menu['id']]) ?>
							<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $menu['id']], ['confirm' => __('Are you sure you want to delete # {0}?', $menu['id'])]) ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

