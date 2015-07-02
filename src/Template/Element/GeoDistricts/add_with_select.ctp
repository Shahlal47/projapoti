<?php
$geoDivisions = array();
foreach($geo_divisions as $divisions):
    $geoDivisions[$divisions->id] = $divisions['division_name_eng'];
endforeach;
?>

<div class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-4 control-label">Geo Division</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('geo_division_id', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoDivisions)); ?>
        </div>
    </div>
</div>
<hr><br>

<div class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-4 control-label">District Name in Bangla</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('district_name_bng', array('label' => false, 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">District Name in English</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('district_name_eng', array('label' => false, 'class' =>'form-control')); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">BBS Code</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('bbs_code', array('label' => false, 'class' =>'form-control')); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Status</label>
        <div class="col-sm-3">
            <?php echo $this->Form->checkbox('status', array('label' => false, 'checked' => true)); ?>
        </div>
    </div>
</div>