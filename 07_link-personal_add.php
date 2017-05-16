
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Related Link Member - GHB Journals</title>
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
                            <h4><a href="javascript:window.history.back();"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">Add Related Link Member</span></h4>
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
                            <h4 class="panel-title">Member Information</h4>
                        </div>
                        <div class="panel-body">
                            <br><br>
                            <fieldset class="content-group">
                                <legend class="text-bold">Association Information</legend>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Title</label>
                                        <input type="text" class="form-control" placeholder="- Title -">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Telephone</label>
                                        <input type="text" class="form-control" placeholder="- Telephone -">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Fax</label>
                                        <input type="text" class="form-control" placeholder="- Fax -">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="control-label">Address</label>
                                        <textarea rows="2"  class="form-control" placeholder="" style="resize: none;"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="control-label">URL Link</label>
                                        <input type="text" class="form-control" placeholder="- URL Link -">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="content-group">
                                <legend class="text-bold">Personal Information</legend>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Name</label>
                                        <input type="text" class="form-control" placeholder="- Name -">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Position</label>
                                        <input type="text" class="form-control" placeholder="- Position -">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Upload</label>
                                        <input type="file" class="file-input-custom" accept="image/*" data-show-upload="false">
                                        <span class="help-block">JPEG, PNG at 240x240 px.</span>
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
