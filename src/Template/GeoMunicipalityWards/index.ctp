<div class="portlet light">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-table"></i>Municipality Ward List</div>
        <div class="tools">
            <a href="javascript:" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:" class="reload"></a>
            <a href="javascript:" class="remove"></a>
        </div>
    </div>
    <div class="portlet-window-body">
        <?= $this->Html->link('Add New Municipality Ward', ['action' => 'add'], ['class' => 'btn btn-default']) ?><br><br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center">Municipality</th>
                <th class="text-center">Upazila</th>
                <th class="text-center">District</th>
                <th class="text-center">BBS Code</th>
                <th class="text-center">Municipality BBS Code</th>
                <th class="text-center">Upazila BBS Code</th>
                <th class="text-center">District BBS Code</th>
                <th class="text-center">Ward Name (Bangla)</th>
                <th class="text-center">Ward Name (English)</th>
                <th class="text-center">Status</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>

            <?php
            foreach ($query as $rows):
            ?>
            <tr>
                <td class="text-center"><?php echo $rows['geo_municipality_id']; ?></td>
                <td class="text-center"><?php echo $rows['geo_upazila_id']; ?></td>
                <td class="text-center"><?php echo $rows['geo_district_id']; ?></td>
                <td class="text-center"><?php echo $rows['bbs_code']; ?></td>
                <td class="text-center"><?php echo $rows['municipality_bbs_code']; ?></td>
                <td class="text-center"><?php echo $rows['upazila_bbs_code']; ?></td>
                <td class="text-center"><?php echo $rows['district_bbs_code']; ?></td>
                <td class="text-center"><?php echo $rows['ward_name_bng']; ?></td>
                <td class="text-center"><?php echo $rows['ward_name_eng']; ?></td>
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
