<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log User Details - GHB Journals</title>
	<link rel="shortcut icon" href="favicon.png">

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
	<?php include 'ssi/js-detail.php'; ?>
	
	<script type="text/javascript" src="assets/js/pages/11_users_detail.js"></script>
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
                            <h4><a href="#" onclick="window.history.back();"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">Log Details</span></h4>
                        </div>
                    </div>
                </div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
                    
                    <div class="row">
                        <div class="col-md-12 float-md-left">
                            <div class="panel panel-flat">
                                <div class="panel-heading border-bottom">
                                    <h4><span class="text-semibold">{{ Log ID. }}</span></h4>
                                </div>
                                <div class="panel-body">
                                    <br><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="h-field">Log ID</div>
                                            <p>1</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Name</div>
                                            <p>Carl Matthews</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">E-mail</div>
                                            <p>carl.matthews1234@rhb.co.th</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Group</div>
                                            <p>Administrator</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">IP</div>
                                            <p>192.168.1.15</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Date</div>
                                            <p>18 Apr 2016 at 18:24:01</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Agent</div>
                                            <p>Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36</p>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="h-title">Status</div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="h-field">Action</div>
                                            <p>Login</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Status</div>
                                            <p><span class="label label-success label-fit">Success</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       

                    </div>
                    
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
