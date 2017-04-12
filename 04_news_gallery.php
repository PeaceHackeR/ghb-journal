
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage News Gallery - GHB Journals</title>
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

	<script type="text/javascript" src="assets/js/pages/04_news_gallery.js"></script>
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
                            <h4><a href="javascript:window.history.back();"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">Manage Gallery</span></h4>
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
                            <h4 class="panel-title">News photos</h4>
                        </div>
                        <div class="panel-body">
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="h-field">Title</div>
                                    <p>ธอส. ออกมาตรการใหม่ด้านสินเชื่อและการประนอมหนี้</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="h-field">Event Date</div>
                                    <p>28 Apr 2017</p>
                                </div>
                            </div>
                                       
                                        <fieldset class="content-group">
                                            <legend class="text-bold">Image</legend>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <form action="#" class="dropzone" id="dropzone_multiple"></form>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="content-group">
                                            <legend class="text-bold">Link</legend>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label class="control-label">URL / Youtube Video ID</label>
                                                    <input type="text" class="form-control" placeholder="- URL -">
                                                </div>
                                                <div class="form-group col-md-12 clearfix">
                                                    <label class="display-block">Target (URL)</label>
                                                    <label class="radio-inline">
                                                        <input value="1" type="radio" name="target" class="styled" checked> Self
                                                    </label>

                                                    <label class="radio-inline">
                                                        <input value="0" type="radio" name="target" class="styled"> Blank
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="content-group">
                                            <legend class="text-bold">Publish setting</legend>
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
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">Start</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                                        <input type="text" class="form-control pickadate" placeholder="Pick a date&hellip;">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">Time</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="icon-alarm"></i></span>
                                                        <input type="text" class="form-control pickatime" placeholder="Time">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">End</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                                        <input type="text" class="form-control pickadate" placeholder="Pick a date&hellip;">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">Time</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="icon-alarm"></i></span>
                                                        <input type="text" class="form-control pickatime" placeholder="Time">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                            <div class="row">
                                <div class="form-group col-md-12">
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
