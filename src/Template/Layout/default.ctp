<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.6.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->

<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Projapoti</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->request->webroot; ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->request->webroot; ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->request->webroot; ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->request->webroot; ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->request->webroot; ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="<?php echo $this->request->webroot; ?>assets/global/plugins/jstree/dist/themes/default/style.min.css"/>
<link href="<?php echo $this->request->webroot; ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->request->webroot; ?>assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->request->webroot; ?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->request->webroot; ?>assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css">
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="<?php echo $this->request->webroot; ?>assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>assets/global/plugins/jstree/dist/themes/default/style.min.css"/>
<link href="<?php echo $this->request->webroot; ?>assets/admin/pages/css/error.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="<?php echo $this->request->webroot; ?>assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->request->webroot; ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->request->webroot; ?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $this->request->webroot; ?>assets/admin/layout/css/themes/light.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo $this->request->webroot; ?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->

<!-- BEGIN RESPONSIVE STYLES LOJAABOTI -->
<link href="<?php echo $this->request->webroot; ?>assets/admin/layout/css/lojjaboti/lojjaboti.css" rel="stylesheet" type="text/css"/>
<!-- End RESPONSIVE STYLES LOJAABOTI -->

	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="<?php echo $this->request->webroot; ?>/assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet"/>
	<link href="<?php echo $this->request->webroot; ?>/assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet"/>
	<link href="<?php echo $this->request->webroot; ?>/assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"/>
	<!-- END PAGE LEVEL STYLES -->
	<link href="<?php echo $this->request->webroot; ?>/assets/admin/pages/css/inbox.css" rel="stylesheet" type="text/css"/>



	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="<?php echo $this->request->webroot; ?>/webroot/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $this->request->webroot; ?>/webroot/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet"/>
	<!-- BEGIN:File Upload Plugin CSS files-->
	<link href="<?php echo $this->request->webroot; ?>/webroot/assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet"/>
	<link href="<?php echo $this->request->webroot; ?>/webroot/assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet"/>
	<link href="<?php echo $this->request->webroot; ?>/webroot/assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"/>
	<!-- END:File Upload Plugin CSS files-->
	<!-- END PAGE LEVEL STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
	<link href="<?php echo $this->request->webroot; ?>/webroot/assets/admin/pages/css/inbox.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
	<!-- BEGIN THEME STYLES -->
	<link href="<?php echo $this->request->webroot; ?>/webroot/assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $this->request->webroot; ?>/webroot/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $this->request->webroot; ?>/webroot/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
	<link id="style_color" href="<?php echo $this->request->webroot; ?>/webroot/assets/admin/layout/css/themes/light.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $this->request->webroot; ?>/webroot/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
	
<link rel="shortcut icon" href="favicon.ico"/>


</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">
<?= $this->element('top_bar') ?>
<div class="clearfix"></div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<?= $this->element('left_bar') ?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="row">
				<div class="col-md-12">
				<?= $this->Flash->render() ?>
				<div id="ajax-content">
					<?php echo $this->fetch('content');?>
				</div>
			</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2015 &copy; A2i
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->

<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo $this->request->webroot; ?>assets/global/plugins/jstree/dist/jstree.min.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="<?php echo $this->request->webroot; ?>assets/admin/pages/scripts/ui-tree.js"></script>
<script src="<?php echo $this->request->webroot; ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>assets/admin/layout/scripts/projapoti_ajax.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>assets/admin/pages/scripts/index3.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>assets/admin/pages/scripts/form-validation.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->




<script src="<?php echo $this->request->webroot; ?>/assets/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="<?php echo $this->request->webroot; ?>/assets/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="<?php echo $this->request->webroot; ?>/assets/global/plugins/jquery-file-upload/js/vendor/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="<?php echo $this->request->webroot; ?>/assets/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js"></script>
<!-- blueimp Gallery script -->
<script src="<?php echo $this->request->webroot; ?>/assets/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?php echo $this->request->webroot; ?>/assets/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo $this->request->webroot; ?>/assets/global/plugins/jquery-file-upload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?php echo $this->request->webroot; ?>/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="<?php echo $this->request->webroot; ?>/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="<?php echo $this->request->webroot; ?>/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="<?php echo $this->request->webroot; ?>/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="<?php echo $this->request->webroot; ?>/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="<?php echo $this->request->webroot; ?>/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="<?php echo $this->request->webroot; ?>/assets/global/plugins/jquery-file-upload/js/cors/jquery.xdr-transport.js"></script>
<![endif]-->
<!-- END:File Upload Plugin JS files-->
<script src="<?php echo $this->request->webroot; ?>/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot; ?>/assets/admin/pages/scripts/form-fileupload.js"></script>

<script src="<?php echo $this->request->webroot; ?>/assets/admin/pages/scripts/inbox.js" type="text/javascript"></script>

<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo features 
   Index.init(); // init index page
   Tasks.initDashboardWidget(); // init tash dashboard widget
   UITree.init();
	Inbox.init();
	FormFileUpload.init();
   
});
</script>
<!-- END JAVASCRIPTS -->



</body>
<!-- END BODY -->
</html>