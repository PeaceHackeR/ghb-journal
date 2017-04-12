<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Details - GHB Journals</title>
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
	<?php include 'ssi/js-detail.php'; ?>


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
                            <h4><span class="text-semibold">Account Details</span></h4>
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
                                    <h4><span class="text-semibold">ปัญญา สามไทยสงค์</span></h4>
                                    <div class="heading-elements">
                                        <a href="00_users_form_password.php" class="btn btn-default btn-xs heading-btn"><i class="icon-key position-left"></i> Change password</a>
                                        <a href="00_users_form_edit.php" class="btn btn-default btn-xs heading-btn"><i class="icon-pencil position-left"></i> Edit</a>
                                    </div>
                                </div>
                                <div class="panel-body">
<!--                                    <div class="h-title">Status</div>-->
                                    <br><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="h-field">E-mail</div>
                                            <p>marc.johnson15@ananda.co.th</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Telephone</div>
                                            <p>085-165-5163</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Last Login</div>
                                            <p>18 Apr 2016 at 18:24</p>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="h-field">Create Date</div>
                                            <p>24 Feb 2015</p>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="h-title">Account Status</div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="h-field">Group</div>
                                            <p>Administrator</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Status</div>
                                            <p><span class="label label-success label-fit">Active</span></p>
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
