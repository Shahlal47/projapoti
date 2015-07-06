<div class="portlet light">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-table"></i>Dak Nagorik List</div>
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
                        <?= $this->Html->link('Add New Dak Nagorik', ['action' => 'add'], ['class' => 'btn btn-default']) ?>
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
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center"><?= $this->Paginator->sort('AAAA') ?></th>
                <th class="text-center"><?= $this->Paginator->sort('AAAA') ?></th>
                <th class="text-center"><?= $this->Paginator->sort('AAAA') ?></th>
                <th class="text-center"><?= $this->Paginator->sort('AAAA') ?></th>
                <th class="actions text-center"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($query as $rows): ?>
                <tr>
                    <td class="text-center"><?php echo $rows['name_eng']; ?></td>
                    <td class="text-center"><?php echo $rows['mobile_no']; ?></td>
                    <td class="text-center"><?php echo $rows['email']; ?></td>
                    <td class="text-center"><?php echo $rows['remarks']; ?></td>
                    <td class="actions text-center">
                        <?= $this->Html->link(__('View'), ['action' => 'view'], ['class' => 'btn btn-primary']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit'], ['class' => 'btn btn-success']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete'], ['class' => 'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?')]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
