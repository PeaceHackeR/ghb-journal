<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Group Details - GHB Journals</title>
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
                            <h4><a href="#" onclick="window.history.back();"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">Group Info</span></h4>
                        </div>
                    </div>
                </div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
                    <style>
                        .px-iconicbox,
                        .px-iconicbox-sub {
                            display: inline-block;
                            width: 20px;
                            margin-right: 8px;
                        }

                        .px-iconicbox-sub {
                            margin-right: 10px;
                        }

                        tr.row-head {
                            background-color: #f3f3f3;
                            font-weight: bold;
                        }

                        .table>tbody>tr>td {
                            border: none;
                            border-top: 1px solid #e6e6e6;
                        }

                        .table-bordered tr:first-child>td {
                            border-top-color: #e6e6e6;
                        }

                    </style>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-flat">
                                <div class="panel-heading border-bottom">
                                    <h4><span class="text-semibold">Administrator Info</span></h4>
                                    <div class="heading-elements">
                                        <a href="11_group_member_list.php" class="btn btn-default btn-xs heading-btn"><i class="icon-users4 position-left"></i> Members</a>
                                        <a href="11_group_form_edit.php" class="btn btn-default btn-xs heading-btn"><i class="icon-pencil position-left"></i> Edit</a>
                                    </div>
                                </div>
                                <div class="panel-body">
<!--                                    <div class="h-title">Status</div>-->
                                    <br><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="h-field">Create date</div>
                                            <p>18 Apr 2016 at 18:24</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Create by</div>
                                            <p><a href="mailto:marc.johnson15@ananda.co.th">marc.johnson15@gmail.com</a></p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Status</div>
                                            <p><span class="label label-success label-fit">Active</span></p>
                                        </div>
                                    </div>
                                    <br><br>
                                    <!-- Permission -->
                                    <div class="h-title no-border">Permission</div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr class="row-head">
                                                    <td><span class="px-iconicbox"><i class="icon-grid5"></i></span>Dashboard</td>
                                                    <td class="text-center">Allow Access</td>
                                                    <td class="text-center">Add/Import</td>
                                                    <td class="text-center">Edit</td>
                                                    <td class="text-center">Delete</td>
                                                    <td class="text-center">Export</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Dashboard</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                </tr>
                                                <tr class="row-head">
                                                    <td><span class="px-iconicbox"><i class="icon-screen3"></i></span>Website Content</td>
                                                    <td class="text-center">Allow Access</td>
                                                    <td class="text-center">Add/Import</td>
                                                    <td class="text-center">Edit</td>
                                                    <td class="text-center">Delete</td>
                                                    <td class="text-center">Export</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Highlight</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>About Us - History</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>About Us - Providers</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Related Link</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr class="row-head">
                                                    <td><span class="px-iconicbox"><i class="icon-reading"></i></span>Journals</td>
                                                    <td class="text-center">Allow Access</td>
                                                    <td class="text-center">Add/Import</td>
                                                    <td class="text-center">Edit</td>
                                                    <td class="text-center">Delete</td>
                                                    <td class="text-center">Export</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Overview</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Related Link</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr class="row-head">
                                                    <td><span class="px-iconicbox"><i class="icon-quill4"></i></span>Articles</td>
                                                    <td class="text-center">Allow Access</td>
                                                    <td class="text-center">Add/Import</td>
                                                    <td class="text-center">Edit</td>
                                                    <td class="text-center">Delete</td>
                                                    <td class="text-center">Export</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Overview</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Post</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Authors</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Category Management</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr class="row-head">
                                                    <td><span class="px-iconicbox"><i class="icon-newspaper"></i></span>News</td>
                                                    <td class="text-center">Allow Access</td>
                                                    <td class="text-center">Add/Import</td>
                                                    <td class="text-center">Edit</td>
                                                    <td class="text-center">Delete</td>
                                                    <td class="text-center">Export</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Overview</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Post</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Category Management</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr class="row-head">
                                                    <td><span class="px-iconicbox"><i class="icon-price-tags"></i></span>Tags</td>
                                                    <td class="text-center">Allow Access</td>
                                                    <td class="text-center">Add/Import</td>
                                                    <td class="text-center">Edit</td>
                                                    <td class="text-center">Delete</td>
                                                    <td class="text-center">Export</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Overview</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>All</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>By Section - Articles</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>By Section - News</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr class="row-head">
                                                    <td><span class="px-iconicbox"><i class="icon-bubble-dots4"></i></span>Contact Us</td>
                                                    <td class="text-center">Allow Access</td>
                                                    <td class="text-center">Add/Import</td>
                                                    <td class="text-center">Edit</td>
                                                    <td class="text-center">Delete</td>
                                                    <td class="text-center">Export</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Contact Us</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                </tr>
                                                <tr class="row-head">
                                                    <td><span class="px-iconicbox"><i class="icon-gear"></i></span>System</td>
                                                    <td class="text-center">Allow Access</td>
                                                    <td class="text-center">Add/Import</td>
                                                    <td class="text-center">Edit</td>
                                                    <td class="text-center">Delete</td>
                                                    <td class="text-center">Export</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Users</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Groups</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Log - Users</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Log - Activities</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <i class="icon-checkmark4"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /permission -->
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
