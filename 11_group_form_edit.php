<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Group - GHB Journals</title>
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
	<?php include 'ssi/js-form.php'; ?>
	
	<script type="text/javascript" src="assets/js/pages/11_group_form_edit.js"></script>
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
                            <h4><a href="#" onclick="window.history.back();"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">Edit Group</span></h4>
                        </div>
                    </div>
                </div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
                    
                    <div class="panel panel-flat">
                        <div class="panel-heading border-bottom">
                            <h4 class="panel-title">Administrator Setting</h4>
                        </div>
                        <div class="panel-body">
                            <br>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="control-label">Group Name</label>
                                    <input type="text" class="form-control" placeholder="- Name -">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label text-bold">Status</label>
                                    <select class="select">
                                        <option disabled>Please select</option>
                                        <option value="" selected>Acitve</option>
                                        <option value="">Disabled</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="h-title no-border">Permission</div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Module</th>
                                                    <th class="text-center">View</th>
                                                    <th class="text-center">Edit</th>
                                                    <th class="text-center">Create</th>
                                                    <th class="text-center">Delete</th>
                                                    <th class="text-center">Import</th>
                                                    <th class="text-center">Export</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Dashboard</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Sales</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Call Back</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Promocode</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Website Content</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Statistics</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Settings</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>System(User)</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>System(Group)</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>System(Logs)</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <br><br>
                                <div class="form-group col-md-12">
                                    <button type="butmit" class="btn btn-primary">Submit</button>
                                    <button type="butmit" class="btn btn-primary">Cancle</button>
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
