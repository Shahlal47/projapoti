<!--START SCRIPT FOR THE TINYEDITOR-->
<script src="<?php echo $this->request->webroot; ?>/js/tinymce/tinymce.min.js"></script>
<!--END SCRIPT FOR THE TINYEDITOR-->


<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-pencil"></i>New Daptorik Dak</div>
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

            <h3 class="form-section">প্রেরক অফিস</h3>
            <div class="form-horizontal">
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group form-horizontal">
                            <label class="control-label col-md-5">অফিসের নাম</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('sender_organization', array('label' => false, 'class' =>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group form-horizontal">
                            <label class="control-label col-md-4 pull-left">তারিখ</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('dak_date', array('label' => false, 'type' => 'date', 'class' =>'form-control', 'placeholder' => 'YYYY-MM-DD')); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group form-horizontal">
                            <label class="control-label col-md-5">কর্মকর্তার নাম</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('sender_name', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group form-horizontal">
                            <label class="control-label col-md-4 pull-left">স্মারক নং</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('sarok_no', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">কর্মকর্তার পদবী</label>
                    <div class="col-md-4">
                        <?php echo $this->Form->input('designation', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
                    </div>
                </div>
            </div><br>

            <h3 class="form-section">ডাক বিবরনী</h3>
            <div class="form-horizontal">
                <div class="row">
                    <div class="form-group form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-md-4">বিষয়</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('subject', array('label' => false, 'class' =>'form-control')); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">স্মারক নং</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('sarok_no', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">নিরাপত্তা নির্দেশক্রম</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('secrecy', array('label' => false, 'class' =>'form-control')); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">অগ্রাধিকার</label>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('priority', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">বিস্তারিত বিবরণ</label>
                        <div class="col-md-9">
                            <?php echo $this->Form->input('description', array('label' => false, 'type' => 'textarea', 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
            </div><br>

            <h3 class="form-section">প্রাপকের তথ্য</h3>
            <div class="form-group form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-4">অফিসের নাম</label>
                    <div class="col-md-5">
                        <?php echo $this->Form->input('receive_office', array('label' => false, 'class' =>'form-control')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">কর্মকর্তার নাম</label>
                    <div class="col-md-5">
                        <?php echo $this->Form->input('receive_officer', array('label' => false, 'class' =>'form-control')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">কর্মকর্তার পদবী</label>
                    <div class="col-md-5">
                        <?php echo $this->Form->input('receive_officer_designation', array('label' => false, 'class' =>'form-control')); ?>
                    </div>
                </div>
            </div>

            <h3 class="form-section">দৃষ্টি আকর্ষণ</h3>
            <div class="form-group form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-4">অফিসের নাম</label>
                    <div class="col-md-5">
                        <?php echo $this->Form->input('attention_office', array('label' => false, 'class' =>'form-control')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">কর্মকর্তার নাম</label>
                    <div class="col-md-5">
                        <?php echo $this->Form->input('attention_officer', array('label' => false, 'class' =>'form-control')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">কর্মকর্তার পদবী</label>
                    <div class="col-md-5">
                        <?php echo $this->Form->input('attention_officer_designation', array('label' => false, 'class' =>'form-control')); ?>
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
    tinymce.init({  //script for the tiny editor
        selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    });
</script>


<h3 class="form-section">Attachment</h3>
<!-- BEGIN PAGE CONTENT-->
<!--<div class="portlet light">-->
<!--    <div class="portlet-body">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <form id="fileupload" action="/Applications/MAMP/htdocs/nothi3/webroot/assets/global/plugins/jquery-file-upload/server/php/" method="POST" enctype="multipart/form-data">-->
<!--                    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->-->
<!--                    <div class="row fileupload-buttonbar">-->
<!--                        <div class="col-lg-7">-->
<!--                            <!-- The fileinput-button span is used to style the file input field as button -->-->
<!--										<span class="btn green fileinput-button">-->
<!--										<i class="fa fa-plus"></i>-->
<!--										<span>-->
<!--										Add files... </span>-->
<!--										<input type="file" name="files[]" multiple="">-->
<!--										</span>-->
<!--                            <button type="submit" class="btn blue start">-->
<!--                                <i class="fa fa-upload"></i>-->
<!--										<span>-->
<!--										Start upload </span>-->
<!--                            </button>-->
<!--                            <button type="reset" class="btn warning cancel">-->
<!--                                <i class="fa fa-ban-circle"></i>-->
<!--										<span>-->
<!--										Cancel upload </span>-->
<!--                            </button>-->
<!--                            <button type="button" class="btn red delete">-->
<!--                                <i class="fa fa-trash"></i>-->
<!--										<span>-->
<!--										Delete </span>-->
<!--                            </button>-->
<!--                            <input type="checkbox" class="toggle">-->
<!--                            <!-- The global file processing state -->-->
<!--										<span class="fileupload-process">-->
<!--										</span>-->
<!--                        </div>-->
<!--                        <!-- The global progress information -->-->
<!--                        <div class="col-lg-5 fileupload-progress fade">-->
<!--                            <!-- The global progress bar -->-->
<!--                            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">-->
<!--                                <div class="progress-bar progress-bar-success" style="width:0%;">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <!-- The extended global progress information -->-->
<!--                            <div class="progress-extended">-->
<!--                                &nbsp;-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <!-- The table listing the files available for upload/download -->-->
<!--                    <table role="presentation" class="table table-striped clearfix">-->
<!--                        <tbody class="files">-->
<!--                        </tbody>-->
<!--                    </table>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- END PAGE CONTENT-->