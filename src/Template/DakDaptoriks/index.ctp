<div class="portlet light">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-table"></i>Daptorik Dak List</div>
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
                    <div class="btn-group">
                        <?= $this->Html->link('New Daptorik Dak', ['action' => 'add'], ['class' => 'btn btn-default']) ?>
                    </div>
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
        <table class="table table-striped table-advance table-hover">
            <thead>
            <tr>
                <th colspan="3">
                    <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                    <div class="btn-group">
                        <a class="btn btn-sm blue dropdown-toggle" href="#" data-toggle="dropdown">
                            More <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">
                                    <i class="fa fa-pencil"></i> Mark as Read </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-ban"></i> Spam </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-trash-o"></i> Delete </a>
                            </li>
                        </ul>
                    </div>
                </th>
                <th class="pagination-control" colspan="3">
		<span class="pagination-info">
		1-30 of 789 </span>
                    <a class="btn btn-sm blue">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="btn btn-sm blue">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($query as $rows): ?>
                <tr class="unread" data-messageid=<?php echo $rows['id']; ?>>
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells">
                        <i class="fa fa-star"></i>
                    </td>
                    <td class="view-message hidden-xs"><?php echo $rows['sarok_no']; ?></td>
                    <td class="view-message "><?php echo $rows['subject']; ?></td>
                    <td class="view-message text-right"><?php echo $rows['dak_date']; ?></td>
                    <td class="actions inbox-small-cells">
                        <?= $this->Html->link(__(''), ['action' => 'view', $rows['id']], ['class'=>'btn btn-xs fa fa-eye text-primary']) ?>
                        <?= $this->Html->link(__(''), ['action' => 'edit', $rows['id']], ['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                        <?= $this->Form->postLink(__(''), ['action' => 'delete', $rows['id']], ['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?')]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
