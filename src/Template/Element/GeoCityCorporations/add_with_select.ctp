<?php
$geoDistricts = array();
foreach($geo_districts as $districts):
    $geoDistricts[$districts->id] = $districts['district_name_eng'];
endforeach;

$geoDivisions = array();
foreach($geo_divisions as $divisions):
    $geoDivisions[$divisions->id] = $divisions['division_name_eng'];
endforeach;
?>

        <div class="row">
            <div class="col-md-5">
                <div class="form-group form-horizontal">
                    <label class="control-label col-md-4">Geo Division</label>
                    <div class="col-md-5">
                        <?php echo $this->Form->input('geo_division_id', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoDivisions)); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group form-horizontal">
                    <label class="control-label col-md-4 pull-left">Geo District</label>
                    <div class="col-md-5">
                        <?php echo $this->Form->input('geo_district_id', array('label' => false, 'type'=>'select', 'class' =>'form-control', 'options'=>$geoDistricts)); ?>
                    </div>
                </div>
            </div>
        </div>
        <hr><br>

        <div class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-4 control-label">City Corporation Name in Bangla</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('city_corporation_name_eng', array('label' => false, 'class' =>'form-control')); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">City Corporation Name in English</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('city_corporation_name_bng', array('label' => false, 'class' =>'form-control')); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">BBS Code</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('bbs_code', array('label' => false, 'class' =>'form-control')); ?>
                </div>
            </div>
<!--            <div class="form-group">-->
<!--                <label class="col-sm-4 control-label">District BBS Code</label>-->
<!--                <div class="col-sm-3">-->
<!--                    --><?php //echo $this->Form->input('district_bbs_code', array('label' => false, 'class' =>'form-control')); ?>
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label class="col-sm-4 control-label">Division BBS Code</label>-->
<!--                <div class="col-sm-3">-->
<!--                    --><?php //echo $this->Form->input('division_bbs_code', array('label' => false, 'class' =>'form-control')); ?>
<!--                </div>-->
<!--            </div>-->
            <div class="form-group">
                <label class="col-sm-4 control-label">Status</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->checkbox('status',  array('label' => false, 'checked' => true)); ?>
                </div>
            </div>
        </div>
