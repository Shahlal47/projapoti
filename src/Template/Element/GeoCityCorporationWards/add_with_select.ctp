<?php
$geoDivisions = array();
foreach($geo_divisions as $divisions):
    $geoDivisions[$divisions->id] = $divisions['division_name_eng'];
endforeach;

$geoDistricts = array();
foreach($geo_districts as $districts):
    $geoDistricts[$districts->id] = $districts['district_name_eng'];
endforeach;

$geoCityCorporation = array();
foreach($geo_city_corporations as $geo_city_corporation):
    $geoCityCorporation[$geo_city_corporation->id] = $geo_city_corporation['city_corporation_name_eng'];
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
        <label class="control-label col-md-5 pull-left">Geo City Corporation</label>
        <?php echo $this->Form->input('geo_city_corporation_id', array('label' => false, 'type'=>'select', 'class' =>'form-control input-small', 'options'=>$geoCityCorporation)); ?>
    </div>
</div>
<hr><br>

<div class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-4 control-label">Ward Name in Bangla</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('ward_name_eng', array('label' => false, 'class' =>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Ward Name in English</label>
        <div class="col-sm-3">
            <?php echo $this->Form->input('ward_name_bng', array('label' => false, 'class' =>'form-control')); ?>
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
            <?php echo $this->Form->checkbox('status',  array('label' => false, 'checked' => true)); ?>
        </div>
    </div>
</div>