
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-pencil"></i>Update District</div>
        <div class="tools">
            <a href="javascript:" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:" class="reload"></a>
            <a href="javascript:" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body form"><br><br>
        <?php echo $this->Form->create($geo_district); ?>
        <?php echo $this->element('GeoDistricts/add') ?>
        <?php echo $this->element('update'); ?>
        <?php echo $this->Form->end(); ?>
    </div>
</div>


