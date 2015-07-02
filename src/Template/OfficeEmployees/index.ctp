<div class="row">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-pencil"></i>Office Employee List
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <?= $this->Html->link('Add New Employee', ['action' => 'add'], ['class' => 'btn btn-default']) ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group pull-right">
                                <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Print </a></li>
                                    <li><a href="#">Save as PDF </a></li>
                                    <li><a href="#">Export to Excel </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover" id="sample_1">
                    <thead>
                    <tr>
                        <th class="text-center">Full Name</th>
                        <th class="text-center">Mobile</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Gender</th>
                        <th class="text-center">National ID</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="odd gradeX">
                        <?php
                        foreach ($query as $rows):
                        ?>
                    <tr>
                        <td class="text-center"><?php echo $rows['fullname_eng']; ?></td>
                        <td class="text-center"><?php echo $rows['mobile_no']; ?></td>
                        <td class="text-center"><?php echo $rows['email']; ?></td>
                        <td class="text-center"><?php echo $rows['gender']; ?></td>
                        <td class="text-center"><?php echo $rows['nid']; ?></td>
                        <td class="text-center">
                            <?= $this->Form->postLink(
                                'Delete',
                                ['action' => 'delete', $rows->id],
                                ['class' => 'btn btn-danger'],
                                ['confirm' => 'Are you sure to delete this item?'])
                            ?>
                            <?= $this->Html->link('Edit', ['action' => 'edit', $rows->id], ['class' => 'btn btn-primary']) ?>
                            <?= $this->Html->link('View', ['action' => 'view', $rows->id], ['class' => 'btn btn-success']) ?>

                        </td>
                        <?php
                        endforeach;
                        ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>