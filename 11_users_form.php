<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Users Form - GHB Journals</title>
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
	<?php include 'ssi/js-form.php'; ?>
	
	<script type="text/javascript" src="assets/js/pages/11_user_form.js"></script>
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
                            <h4><a href="#" onclick="window.history.back();"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">Add New Account</span></h4>
                        </div>
                    </div>
                </div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
                    
                    <!-- Form -->
                    <div class="panel panel-flat">
                        <div class="panel-heading border-bottom">
                            <h4 class="panel-title">Account Details</h4>
                        </div>
                        <div class="panel-body">
                            <br>
                            <fieldset class="content-group">
                                <legend class="text-bold">Personal Info</legend>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Name</label>
                                        <input type="text" class="form-control" placeholder="- Name -">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Surname</label>
                                        <input type="text" class="form-control" placeholder="- Surname -">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Telephone</label>
                                        <input type="text" class="form-control" placeholder="- Telephone -">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="content-group">
                                <legend class="text-bold">Account Setting</legend>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label">E-mail</label>
                                        <input type="text" class="form-control" placeholder="- Email -">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label text-bold">Permission Group</label>
                                        <select data-placeholder="Please select" class="select">
                                            <option></option>
                                            <option disabled>Please select</option>
                                            <option value="">Administrator</option>
                                            <option value="">Manager</option>
                                            <option value="">Sales</option>
                                            <option value="">Content Writer</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Password</label>
                                        <div class="input-group">
                                            <input id="fx-passuser" type="text" class="form-control" placeholder="- password -">
                                            <span class="input-group-btn">
                                                <button id="px-passGen" class="btn bg-grey-300" type="button">Generate</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Confirm Password</label>
                                        <input type="text" class="form-control" placeholder="- Confirm password -">
                                    </div>
                                    <div class="form-group col-md-12 col-lg-6 col-xlg-12">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" class="styled"> Send password to user’s email.
                                        </label>
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
