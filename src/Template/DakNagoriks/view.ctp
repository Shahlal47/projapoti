<script src="<?php echo $this->request->webroot; ?>/js/tinymce/tinymce.min.js"></script>


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
    <div class="portlet-body">
            <h3 class="form-section">আবেদনকারীর তথ্য</h3><hr>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5"><b>নাম (ইংরেজীতে)</b></label>
                        <label class="control-label col-md-4 pull-left"><b><?= h($dak_nagoriks->name_eng) ?></b></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5 "><b>নাম (বাংলায়)</b></label>
                        <label class="control-label col-md-4"><b><?= h($dak_nagoriks->name_bng) ?></b></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5"><b>জাতীয় পরিচয়পত্র</b></label>
                        <label class="control-label col-md-4"><b><?= h($dak_nagoriks->national_idendity_no) ?></b></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5"><b>ডাক গ্রহণের তারিখ</b></label>
                        <label class="control-label col-md-4"><b><?= h($dak_nagoriks->receive_date) ?></b></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5"><b>পিতার নাম</b></label>
                        <label class="control-label col-md-4"><b><?= h($dak_nagoriks->father_name) ?></b></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5"><b>মাতার নাম</b></label>
                        <label class="control-label col-md-4"><b><?= h($dak_nagoriks->mother_name) ?></b></label>
                    </div>
                </div>
            </div>

            <h3 class="form-section">প্রাপকের তথ্য</h3><hr>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5"><b>প্রাপক</b></label>
                        <label class="control-label col-md-4"><b><?= h($dak_nagoriks->receiver) ?></b></label>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5"><b>দৃষ্টি আকর্ষণ</b></label>
                        <label class="control-label col-md-4"><b><?= h($dak_nagoriks->attention) ?></b></label>
                    </div>
                </div>
            </div><br>

            <h3 class="form-section">ডাক বিবরণী</h3><hr>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5"><b>বিষয়</b></label>
                        <label class="control-label col-md-4"><b><?= h($dak_nagoriks->subject) ?></b></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5"><b>ধরণ</b></label>
                        <label class="control-label col-md-4"><b><?= h($dak_nagoriks->category_type_id) ?></b></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5"><b>ডাক প্রাপ্তির মাধ্যম</b></label>
                        <label class="control-label col-md-4"><b><?= h($dak_nagoriks->media) ?></b></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-5"><b>বিস্তারিত বিবরণ</b></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <label class="control-label col-md-offset-4">
                        <textarea><?= h($dak_nagoriks->dak_description) ?></textarea>
                    </label>
                </div>
            </div>

            <h3 class="form-section">মন্তব্য</h3><hr>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group form-horizontal">
                        <label class="control-label col-md-7"><?= h($dak_nagoriks->remarks) ?></label>
                    </div>
                </div>
            </div>
        </div>
</div>



<script>
    tinymce.init({  //script for the tiny editor
        selector: "textarea"
//        plugins: [
//            "advlist autolink lists link image charmap print preview anchor",
//            "searchreplace visualblocks code fullscreen",
//            "insertdatetime media table contextmenu paste"
//        ]
//        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    });
</script>