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
	<div class="datatable">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th class="text-center">Nothi No</th>
					<th class="text-center">Subject</th>
					<th class="actions text-center"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody role="alert" aria-live="polite" aria-relevant="all">
				<tr class="odd">
					<td class="text-center">০৪৬.০১৮.০৩৩.০০.০০.০০৪.২০১৫.০৪৩&nbsp;</td>
					<td class="text-center">রাস্তা  উন্নয়ন &nbsp;</td>
					<td class="actions text-center">
						<a href="http://localhost/projapoti/nothi/nothiList"><i class="fa fa-eye"></i></a>
						<a href="http://localhost/projapoti/nothi/nothiList"><i class="icon-pencil"></i></a>
						<a href="http://localhost/projapoti/nothi/nothiList"><i class="icon-eye"></i></a>
						<form method="post" style="display:none;" id="post_55852eec08d24" name="post_55852eec08d24" action="/nothi/nothiMasters/delete/1"><input type="hidden" value="POST" name="_method"></form><a onclick="if (confirm('Are you sure you want to delete the ০৪৬.০১৮.০৩৩.০০.০০.০০৪.২০১৫.০৪৩?')) { document.post_55852eec08d24.submit(); } event.returnValue = false; return false;" class="role_enable" href="#"><i class="icon-cancel"></i></a>						
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

