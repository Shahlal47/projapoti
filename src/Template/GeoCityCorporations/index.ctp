<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-table"></i>City Corporation List</div>
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
                        <?= $this->Html->link('Add New City Corporation', ['action' => 'add'], ['class' => 'btn btn-default']) ?><br><br>
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
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center">BBS Code</th>
                <th class="text-center">District BBS Code</th>
                <th class="text-center">Division BBS Code</th>
                <th class="text-center">City Corp. Name (Bangla)</th>
                <th class="text-center">City Corp. Name (English)</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>

            <?php
            foreach ($query as $rows):
            ?>
            <tr>
                <td class="text-center"><?php echo $rows['bbs_code']; ?></td>
                <td class="text-center"><?php echo $rows['district_bbs_code']; ?></td>
                <td class="text-center"><?php echo $rows['division_bbs_code']; ?></td>
                <td class="text-center"><?php echo $rows['city_corporation_name_bng']; ?></td>
                <td class="text-center"><?php echo $rows['city_corporation_name_eng']; ?></td>
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



