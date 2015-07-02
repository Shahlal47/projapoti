<?php
$geoDivisions = array();
foreach($geo_divisions as $divisions):
    $geoDivisions[$divisions->id] = $divisions['division_name_eng'];
endforeach;

$geoDistricts = array();
foreach($geo_districts as $districts):
    $geoDistricts[$districts->id] = $districts['district_name_eng'];
endforeach;

$geoUpazilas = array();
foreach($geo_upazilas as $geo_upazila):
    $geoUpazilas[$geo_upazila->id] = $geo_upazila['upazila_name_eng'];
endforeach;
?>

<div class="row">
    <div class="col-md-4">
        <label class="control-label col-md-4">Geo Division</label>
        <?php echo $this->Form->input('geo_division_id', array('label' => false, 'type'=>'select', 'class' =>'form-control input-small', 'options'=>$geoDivisions)); ?>
    </div>
    <div class="col-md-4">
        <label class="control-label col-md-4 pull-left">Geo District</label>
        <?php echo $this->Form->input('geo_district_id', array('label' => false, 'type'=>'select', 'class' =>'form-control input-small', 'options'=>$geoDistricts)); ?>
    </div>
    <div class="col-md-4">
        <label class="control-label col-md-5 pull-left">Geo Upazila</label>
        <?php echo $this->Form->input('geo_upazila_id', array('label' => false, 'type'=>'select', 'class' =>'form-control input-small', 'options'=>$geoUpazilas)); ?>
    </div>
</div>
<hr><br>


<div class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-4 control-label">Municipality Name in Bangla</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="municipality_name_bd" placeholder="Municipality Name in Bangla">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Municipality Name in English</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="municipality_name_en" placeholder="Municipality Name in English">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Municipality BBS Code</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="municipality_bbs_code">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Status</label>
        <div class="col-sm-3">
            <?php echo $this->Form->checkbox('status', array('label' => false, 'checked' => true)); ?>
        </div>
    </div>
</div>