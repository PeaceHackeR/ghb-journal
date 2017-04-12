<?php $default_menu = "1"; ?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>00 Edit Users Form - Ananda CMS</title>
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
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/media/fancybox.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jasny_bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/validation/validate.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/password/password-generator.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/07_user_form_edit.js"></script>
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
                            <h4><a href="#" onclick="window.history.back();"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">Edit My Profile</span></h4>
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
                                        <input type="text" class="form-control" placeholder="- Name -" value="ปัญญา">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Surname</label>
                                        <input type="text" class="form-control" placeholder="- Surname -" value="สามไทยสงค์">
                                    </div>
                                     <div class="form-group col-md-6">
                                        <label class="control-label">E-mail</label>
                                        <input type="text" class="form-control" placeholder="- E-mail -" value="marc.johnson15@ananda.co.th" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Telephone</label>
                                        <input type="text" class="form-control" placeholder="- Telephone -" value="0812345678">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <button type="butmit" class="btn btn-primary">Submit</button>
                                    <button type="butmit" class="btn btn-primary" onclick="window.history.back();">Cancle</button>
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
