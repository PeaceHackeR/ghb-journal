
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add History - GHB Journals</title>
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<link href="assets/css/icweb.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<?php include "ssi/js-form.php"; ?>
	
	<script type="text/javascript" src="assets/js/pages/00_insertmedia.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<?php include 'ssi/main-navbar.php'; ?>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- Main navigation -->
					<?php include 'ssi/main-navigation.php' ?>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">
                
                <!-- Page header -->
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4><a href="javascript:window.history.back();"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">Add History</span></h4>
                        </div>

                        <div class="heading-elements">
                        </div>
                    </div>
                </div>
                
				<!-- /page header -->
				
				<!-- Content area -->
				<div class="content">
                   
                    <!-- Form -->
                    <div class="panel panel-flat">
                        <div class="panel-heading border-bottom">
                            <h4 class="panel-title">History Content</h4>
                        </div>
                        <div class="panel-body">
                            <br><br>
                            <fieldset class="content-group">
                               
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="control-label">Template Name</label>
                                        <input type="text" class="form-control" placeholder="- Title -">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <div class="px-editor">
                                            <div class="px-editor-tools clearfix">
                                                <label class="">Detail</label>
                                                <div class="pull-right">
                                                    <button type="button" class="btn btn-default btn-md px-editor-viewsource"><i class="icon-embed position-left"></i> View source</button>
                                                    <button type="button" class="btn btn-default btn-md px-editor-norm"><i class="icon-gallery position-left"></i> Visual</button>
                                                </div>
                                            </div>
                                            <div class="px-editor-box">
                                                <div class="px-editor-visual">
                                                    <form method="post">
                                                        <textarea class="tinycme"></textarea>
                                                    </form>
                                                </div>
                                                <div class="px-editor-source">
                                                    <div class="mce-panel box-top"></div>
                                                    <textarea class="px-editor-textsource"></textarea>
                                                    <div class="mce-panel box-bottom"></div>
                                                </div>
                                                <span class="help-block">* Image width migth be larger than 750 px for best view.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="content-group">
                                <legend class="text-bold">SEO Tag</legend>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Keyword</label>
                                        <textarea rows="2"  class="form-control" placeholder="" style="resize: none;"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Description</label>
                                        <textarea rows="2"  class="form-control" placeholder="" style="resize: none;"></textarea>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="content-group">
                                <legend class="text-bold">Publish Settings</legend>
                                <div class="row">
                                    <div class="form-group col-md-6 clearfix">
                                        <label class="display-block">Status</label>
                                        <label class="radio-inline">
                                            <input value="1" type="radio" name="fx-r-01" class="styled" checked> Enable
                                        </label>
                                        <label class="radio-inline">
                                            <input value="0" type="radio" name="fx-r-01" class="styled"> Disable
                                        </label>
                                        <label class="radio-inline">
                                            <input value="0" type="radio" name="fx-r-01" class="styled"> Draft
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <button type="butmit" class="btn btn-primary">Cancle</button>&nbsp;&nbsp;
                                    <button type="butmit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /form -->
					
					<!-- Basic modal -->
					<div id="insert_Media" class="modal fade px-vh-full">
						<div class="modal-dialog modal-full">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">Insert Image</h5>
								</div>

								<div class="modal-body">
									<!-- -->
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-highlight nav-tabs-lg">
											<li class="active"><a class="fx-insertUpload" href="#insert-upload-tab1" data-toggle="tab" data-use-upload="1">&nbsp;&nbsp;Upload Files&nbsp;&nbsp;</a></li>
											<li><a class="fx-insertGallery" href="#insert-box-tab2" data-toggle="tab">&nbsp;&nbsp;&nbsp;Image Library&nbsp;&nbsp;&nbsp;</a></li>
										</ul>

										<div class="tab-content">
										    <!-- UPLOAD -->
											<div class="tab-pane active" id="insert-upload-tab1">
                                                <div class="insert-upload-wrap">
                                                    <div class="insert-upload-box">
                                                        <div class="insert-upload-btn">
                                                            <i class="icon-file-plus"></i>
                                                            <br>
                                                            Drop files anywhere to upload
                                                        </div>
                                                        <span class="btn btn-default fileinput-button">
                                                            <span>Add image</span>
                                                            <input id="fileupload" type="file" accept="image/png, image/jpg, image/gif, image/jpeg" name="files[]" data-url="server/php/" multiple>
                                                        </span>
                                                    </div>
                                                </div>
											</div>
                                            <!-- GALLERY -->
											<div class="tab-pane" id="insert-box-tab2">
                                                    <!-- Thumbnail template -->
                                                    <div class="insert-container">
                                                        
                                                        <div class="thumbnail" data-imx="{{mux}}">
                                                            <div class="thumb"><img {{img}} alt=""></div>
                                                            <label class="checkbox">
                                                                <input type="checkbox" class="px-check-styled" value="{{val}}" {{ck}}>
                                                            </label>
                                                        </div>
                                                        
                                                    </div>
                                                    <!-- /thumbnail template -->
                                                    <div class="insert-info">
                                                        <div class="panel panel-flat">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title"><i class="icon-image2 text-left"></i>&nbsp;&nbsp;ATTACHMENT DETAILS</h6>
                                                            </div>
                                                            <!-- Info template -->
                                                            <div class="panel-body insert-info-box">
                                                                
                                                                <div class="insert-info-attachment clearfix">
                                                                    <div class="insert-info-preview">
                                                                        <img {{img}} alt="" >
                                                                    </div>
                                                                    <div class="insert-info-details" data-image-id="{{id}}">
                                                                        <div class="insert-filename">{{filename}}</div>
                                                                        <div class="insert-uploaded">{{date}}</div>
                                                                        <div class="insert-filesize">{{filesize}}</div>
                                                                        <div class="insert-dimensions">{{fw}} × {{fh}}</div>
                                                                        <button type="button" class="btn btn-link text-danger">
                                                                            Delete Permanently
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <form class="form-horizontal" action="#">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-lg-3">URL</label>
                                                                            <div class="col-lg-9">
                                                                                <input type="text" class="form-control" readonly="readonly" value="{{urllink}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label col-lg-3">Title</label>
                                                                            <div class="col-lg-9">
                                                                                <input type="text" class="form-control" value="{{title}}" placeholder="title" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label col-lg-3">Alt text</label>
                                                                            <div class="col-lg-9">
                                                                                <input type="text" class="form-control" placeholder="Alt text">
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                
                                                            </div>
                                                            <!-- /info template -->
                                                        </div>
                                                    </div>
                                                
											</div>
										</div>
									</div>
									<!-- / -->
								</div>

								<div class="modal-footer">
<!--									<button type="button" class="btn btn-default" data-dismiss="modal">เลือกภาพจากเครื่อง</button>-->
									<button id="px-insert-submit" type="button" class="insert-submit btn btn-primary">&nbsp;&nbsp;Use Image&nbsp;&nbsp;</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /basic modal -->
					
					<!-- Footer -->
					<?php include 'ssi/footer.php'; ?>
					<!-- /footer -->
					
				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
