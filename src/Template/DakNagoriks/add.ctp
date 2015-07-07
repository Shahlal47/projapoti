<?php
$dakTypes = array();
foreach($dak_types as $dak_type):
    $dakTypes[$dak_type->id] = $dak_type['name'];
endforeach;
?>

<!--START SCRIPT FOR THE TINYEDITOR-->
<script src="<?php echo $this->request->webroot; ?>/js/tinymce/tinymce.min.js"></script>
<!--END SCRIPT FOR THE TINYEDITOR-->

<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-pencil"></i>New Nagorik Dak</div>
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
            <h3 class="form-section">আবেদনকারীর তথ্য</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5">নাম (ইংরেজীতে)</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('name_eng', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5 pull-left">নাম (বাংলায়)</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('name_bng', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5">জাতীয় পরিচয়পত্র</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('	national_idendity_no', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5 pull-left">ডাক গ্রহণের তারিখ</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('receive_date', array('label' => false, 'class' =>'form-control', 'placeholder' => 'YYYY-MM-DD')); ?>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5">পিতার নাম</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('father_name', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5 pull-left">মাতার নাম</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('mother_name', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5">ই-মেইল</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('email', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5">মোবাইল নাম্বার</label>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('mobile_no', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-3">ঠিকানা</label>
                        <div class="col-md-7">
                            <?php echo $this->Form->input('address', array('label' => false, 'type' => 'text', 'rows' => '5', 'cols' => '55', 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="form-section">প্রাপকের তথ্য</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-2">প্রাপক</label>
                        <div class="col-md-8">
                            <?php echo $this->Form->input('', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>

            </div><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-2">দৃষ্টি আকর্ষণ</label>
                        <div class="col-md-8">
                            <?php echo $this->Form->input('', array('label' => false, 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
            </div><br>

            <h3 class="form-section">ডাক বিবরণী</h3>
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="col-md-2 control-label">বিষয়</label>
                    <div class="col-md-8">
                        <?php echo $this->Form->input('subject', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">ধরণ</label>
                    <div class="col-md-4">
                        <?php echo $this->Form->input('category_type_id', array('label' => false, 'type' => 'select', 'class' =>'form-control', 'options' => $dakTypes)); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">ডাক প্রাপ্তির মাধ্যম</label>
                    <div class="col-md-4">
                        <?php echo $this->Form->input('media', array('label' => false, 'class' =>'form-control')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">বিস্তারিত বিবরণ</label>
                    <div class="col-md-8">
                        <?php echo $this->Form->input('dak_description', array('label' => false, 'type' => 'textarea', 'class' =>'form-control')); ?>
                    </div>
                </div>
            </div><br>

            <h3 class="form-section">মন্তব্য</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group form-horizontal">
                        <div class="col-md-8 col-md-offset-2">
                            <?php echo $this->Form->input('remarks', array('label' => false, 'type' => 'text', 'class' =>'form-control')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <h3 class="form-section">ফাইল সংযুক্তি</h3>
        <!-- BEGIN PAGE CONTENT-->
<!--        <div class="portlet light">-->
<!--            <div class="portlet-body">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-12">-->
<!--                        <form id="fileupload" action="/Applications/MAMP/htdocs/nothi3/webroot/assets/global/plugins/jquery-file-upload/server/php/" method="POST" enctype="multipart/form-data">-->
<!--                            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->-->
<!--                            <div class="row fileupload-buttonbar">-->
<!--                                <div class="col-lg-7">-->
<!--                                    <!-- The fileinput-button span is used to style the file input field as button -->-->
<!--										<span class="btn green fileinput-button">-->
<!--										<i class="fa fa-plus"></i>-->
<!--										<span>-->
<!--										Add files... </span>-->
<!--										<input type="file" name="files[]" multiple="">-->
<!--										</span>-->
<!--                                    <button type="submit" class="btn blue start">-->
<!--                                        <i class="fa fa-upload"></i>-->
<!--										<span>-->
<!--										Start upload </span>-->
<!--                                    </button>-->
<!--                                    <button type="reset" class="btn warning cancel">-->
<!--                                        <i class="fa fa-ban-circle"></i>-->
<!--										<span>-->
<!--										Cancel upload </span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="btn red delete">-->
<!--                                        <i class="fa fa-trash"></i>-->
<!--										<span>-->
<!--										Delete </span>-->
<!--                                    </button>-->
<!--                                    <input type="checkbox" class="toggle">-->
<!--                                    <!-- The global file processing state -->-->
<!--										<span class="fileupload-process">-->
<!--										</span>-->
<!--                                </div>-->
<!--                                <!-- The global progress information -->-->
<!--                                <div class="col-lg-5 fileupload-progress fade">-->
<!--                                    <!-- The global progress bar -->-->
<!--                                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">-->
<!--                                        <div class="progress-bar progress-bar-success" style="width:0%;">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <!-- The extended global progress information -->-->
<!--                                    <div class="progress-extended">-->
<!--                                        &nbsp;-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <!-- The table listing the files available for upload/download -->-->
<!--                            <table role="presentation" class="table table-striped clearfix">-->
<!--                                <tbody class="files">-->
<!--                                </tbody>-->
<!--                            </table>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <!-- END PAGE CONTENT-->


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



<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!--<script id="template-upload" type="text/x-tmpl">-->
<!--{% for (var i=0, file; file=o.files[i]; i++) { %}-->
<!--    <tr class="template-upload fade">-->
<!--        <td>-->
<!--            <span class="preview"></span>-->
<!--        </td>-->
<!--        <td>-->
<!--            <p class="name">{%=file.name%}</p>-->
<!--            <strong class="error text-danger label label-danger"></strong>-->
<!--        </td>-->
<!--        <td>-->
<!--            <p class="size">Processing...</p>-->
<!--            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">-->
<!--            <div class="progress-bar progress-bar-success" style="width:0%;"></div>-->
<!--            </div>-->
<!--        </td>-->
<!--        <td>-->
<!--            {% if (!i && !o.options.autoUpload) { %}-->
<!--                <button class="btn blue start" disabled>-->
<!--                    <i class="fa fa-upload"></i>-->
<!--                    <span>Start</span>-->
<!--                </button>-->
<!--            {% } %}-->
<!--            {% if (!i) { %}-->
<!--                <button class="btn red cancel">-->
<!--                    <i class="fa fa-ban"></i>-->
<!--                    <span>Cancel</span>-->
<!--                </button>-->
<!--            {% } %}-->
<!--        </td>-->
<!--    </tr>-->
<!--{% } %}-->
<!--</script>-->
<!-- The template to display files available for download -->
<!--<script id="template-download" type="text/x-tmpl">-->
<!--        {% for (var i=0, file; file=o.files[i]; i++) { %}-->
<!--            <tr class="template-download fade">-->
<!--                <td>-->
<!--                    <span class="preview">-->
<!--                        {% if (file.thumbnailUrl) { %}-->
<!--                            <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>-->
<!--                        {% } %}-->
<!--                    </span>-->
<!--                </td>-->
<!--                <td>-->
<!--                    <p class="name">-->
<!--                        {% if (file.url) { %}-->
<!--                            <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>-->
<!--                        {% } else { %}-->
<!--                            <span>{%=file.name%}</span>-->
<!--                        {% } %}-->
<!--                    </p>-->
<!--                    {% if (file.error) { %}-->
<!--                        <div><span class="label label-danger">Error</span> {%=file.error%}</div>-->
<!--                    {% } %}-->
<!--                </td>-->
<!--                <td>-->
<!--                    <span class="size">{%=o.formatFileSize(file.size)%}</span>-->
<!--                </td>-->
<!--                <td>-->
<!--                    {% if (file.deleteUrl) { %}-->
<!--                        <button class="btn red delete btn-sm" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>-->
<!--                            <i class="fa fa-trash-o"></i>-->
<!--                            <span>Delete</span>-->
<!--                        </button>-->
<!--                        <input type="checkbox" name="delete" value="1" class="toggle">-->
<!--                    {% } else { %}-->
<!--                        <button class="btn yellow cancel btn-sm">-->
<!--                            <i class="fa fa-ban"></i>-->
<!--                            <span>Cancel</span>-->
<!--                        </button>-->
<!--                    {% } %}-->
<!--                </td>-->
<!--            </tr>-->
<!--        {% } %}-->
<!--    </script>-->





<script>
    jQuery(document).ready(function() {
        FormFileUpload.init();
    });
</script>



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