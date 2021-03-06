<div class="portlet light">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-table"></i>Municipality List</div>
        <div class="tools">
            <a href="javascript:" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:" class="reload"></a>
            <a href="javascript:" class="remove"></a>
        </div>
    </div>
    <div class="portlet-window-body">
        <?= $this->Html->link('Add New Municipality', ['action' => 'add'], ['class' => 'btn btn-default']) ?><br><br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center">Upazila</th>
                <th class="text-center">District</th>
                <th class="text-center">BBS Code</th>
                <th class="text-center">Upazila BBS Code</th>
                <th class="text-center">District BBS Code</th>
                <th class="text-center">Municipality Name (Bangla)</th>
                <th class="text-center">Municipality Name (English)</th>
                <th class="text-center">Status</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>

            <?php
            foreach ($query as $rows):
            ?>
            <tr>
                <td class="text-center"><?php echo $rows['upazila_id']; ?></td>
                <td class="text-center"><?php echo $rows['district_id']; ?></td>
                <td class="text-center"><?php echo $rows['municipality_bbs_code']; ?></td>
                <td class="text-center"><?php echo $rows['upazila_bbs_code']; ?></td>
                <td class="text-center"><?php echo $rows['district_bbs_code']; ?></td>
                <td class="text-center"><?php echo $rows['municipality_name_bd']; ?></td>
                <td class="text-center"><?php echo $rows['municipality_name_en']; ?></td>
                <td class="text-center"><?php echo $rows['status']; ?></td>
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
