<?php
$dakTypes = array();
foreach($dak_types as $dak_type):
    $dakTypes[$dak_type->id] = $dak_type['name'];
endforeach;
?>

<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-pencil"></i>Dak Register</div>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body form">
        <?php echo $this->Form->create(); ?>
        <div class="form-body">
            <h3 class="form-section">Applicant Information</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5">Name in English</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('name_eng', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5 pull-left">Name in Bangla</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('name_bng', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5">National ID</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('	national_idendity_no', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5 pull-left">Receive Date</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('receive_date', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5">Father's Name</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('father_name', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5 pull-left">Mother's Name</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('mother_name', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5">Email ID</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('email', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5">Mobile Number</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('mobile_no', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-3">Address</label>
                        <div class="col-md-7">
                            <?php echo $this->Form->textarea('address', array('label' => false, 'rows' => '5', 'cols' => '55', 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="form-section">Recipient Details </h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5">Recipient</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5 pull-left">Attention</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5">Box One</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5 pull-left">Box Two</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
            </div><br>

            <h3 class="form-section">Dak Information</h3>
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="col-md-2 control-label">Subject</label>
                    <div class="col-md-4">
                        <?php echo $this->Form->input('subject', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Category</label>
                    <div class="col-md-4">
                        <?php echo $this->Form->input('category_type_id', array('label' => false, 'type' => 'select', 'class' =>'form-control', 'options' => $dakTypes)); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Dak Receipt Media</label>
                    <div class="col-md-4">
                        <?php echo $this->Form->input('media', array('label' => false, 'class' =>'form-control')); ?>
                    </div>
                </div>
            </div><br>

            <h3 class="form-section">Attachment</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5">File Name</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('', array('label' => false, 'class' =>'form-control', 'disabled' => 'disabled')); ?>
                            <input type="file" name="file1">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5 pull-left">Description</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5">File Name</label>
                        <div class="col-md-6">
                            <input type='file' onchange="readURL(this);" name="photo_file" class="form-control"/>
                            <img id="image" src="#" alt="Upload Your Avatar"/>
<!--                            --><?php //echo $this->Form->input('', array('label' => false, 'class' =>'form-control', 'disabled' => 'disabled')); ?>
<!--                            <input type="file" name="file1">-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5 pull-left">Description</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5">File Name</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('', array('label' => false, 'multiple' => 'multiple', 'class' =>'form-control', 'disabled' => 'disabled')); ?>
                            <input type="file" name="file1">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5 pull-left">Description</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
            </div><br>

            <h3 class="form-section">Remarks</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5">Comments/Remarks</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('remarks', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-4 col-md-9">
                    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
                    <?= $this->Form->button(__('Cancel'),['class'=>'btn btn-danger']) ?>
                </div>
            </div>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>


<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>