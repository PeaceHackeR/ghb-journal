<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actions Table - GHB CMS</title>
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
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
    <script type="text/javascript" src="assets/js/core/libraries/jquery_ui/widget.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery_ui/datepicker.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/uploaders/fileinput.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/uploaders/jquery.fileupload.js"></script>
	<script type="text/javascript" src="assets/js/plugins/tables/footable/footable.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/11_log-users_list.js"></script>
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
                            <h4><span class="text-semibold">Module Actions Table</span></h4>
<!--
                            <ul class="breadcrumb">
                                <li class="active">Questionnaire</li>
                            </ul>
-->
                        </div>
                    </div>
                </div>
				<!-- /page header -->
				
				<!-- Content area -->
				<div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#action-Success">Success</button>&nbsp;
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#action-Fail">Fail</button>&nbsp;
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#action-Delete">Delete</button>
                        </div>
                    </div>
                    <br><br>
                    
                    <!-- For Show -->
<div class="table-responsive">
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
    .table>tbody>tr {
        background-color: #fcfcfc;
    }
</style>
    <table class="table table-bordered">
       <thead>
            <tr>
                <th><span class="px-iconicbox"><i class="icon-grid5"></i></span>Dashboard</th>
                <th class="text-center">Create</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
                <th class="text-center">Set Status</th>
                <th class="text-center">Re-order</th>
                <th class="text-center">Export</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Dashboard</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
            </tr>
            <tr><td colspan="8"></td></tr>
        </tbody>
        <thead>
            <tr>
                <th><span class="px-iconicbox"><i class="icon-screen3"></i></span>Website Content</th>
                <th class="text-center">Create</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
                <th class="text-center">Set Status</th>
                <th class="text-center">Re-order</th>
                <th class="text-center">Export</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.1 Highlight</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center">&nbsp;</td>
            </tr>
            <tr>
                <td>1.2.1 About Us - History</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">WYSIWYG</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
            </tr>
            <tr>
                <td>1.2.2 About Us - Providers</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center">&nbsp;</td>
            </tr>
            <tr>
                <td>1.3 Related Link</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center">&nbsp;</td>
            </tr>
            <tr><td colspan="8"></td></tr>
        </tbody>
        <thead>
            <tr>
                <th><span class="px-iconicbox"><i class="icon-reading"></i></span>Journals</th>
                <th class="text-center">Create</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
                <th class="text-center">Set Status</th>
                <th class="text-center">Re-order</th>
                <th class="text-center">Export</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2.1 Overview</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
            </tr>
            <tr>
                <td>2.2 Post</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center">&nbsp;</td>
            </tr>
            <tr><td colspan="8"></td></tr>
        </tbody>
        <thead>
            <tr>
                <th><span class="px-iconicbox"><i class="icon-quill4"></i></span>Articles</th>
                <th class="text-center">Create</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
                <th class="text-center">Set Status</th>
                <th class="text-center">Re-order</th>
                <th class="text-center">Export</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>3.1 Overview</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
            </tr>
            <tr>
                <td>3.2 Post</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center">&nbsp;</td>
            </tr>
            <tr>
                <td>3.3 Authors</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
            </tr>
            <tr>
                <td>3.4 Category Management</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center">&nbsp;</td>
            </tr>
            <tr><td colspan="8"></td></tr>
        </tbody>
        <thead>
            <tr>
                <th><span class="px-iconicbox"><i class="icon-newspaper"></i></span>News</th>
                <th class="text-center">Create</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
                <th class="text-center">Set Status</th>
                <th class="text-center">Re-order</th>
                <th class="text-center">Export</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>4.1 Overview</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
            </tr>
            <tr>
                <td>4.2 Post</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center">&nbsp;</td>
            </tr>
            <tr>
                <td>4.3 Category Management</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center">&nbsp;</td>
            </tr>
            <tr><td colspan="8"></td></tr>
        </tbody>
        <thead>
            <tr>
                <th><span class="px-iconicbox"><i class="icon-price-tags"></i></span>Tags</th>
                <th class="text-center">Create</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
                <th class="text-center">Set Status</th>
                <th class="text-center">Re-order</th>
                <th class="text-center">Export</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>5.1 Overview</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
            </tr>
            <tr>
                <td>5.2 All</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
            </tr>
            <tr>
                <td>5.3.1 By Section - Articles</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center">&nbsp;</td>
            </tr>
            <tr>
                <td>5.3.2 By Section - News</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center">&nbsp;</td>
            </tr>
            <tr><td colspan="8"></td></tr>
        </tbody>
        <thead>
            <tr>
                <th><span class="px-iconicbox"><i class="icon-bubble-dots4"></i></span>Contact Us</th>
                <th class="text-center">Create</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
                <th class="text-center">Set Status</th>
                <th class="text-center">Re-order</th>
                <th class="text-center">Export</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>6.1 Contact Enquiry List</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
            </tr>
            <tr><td colspan="8"></td></tr>
        </tbody>
        <thead>
            <tr>
                <th><span class="px-iconicbox"><i class="icon-gear"></i></span>System</th>
                <th class="text-center">Create</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
                <th class="text-center">Set Status</th>
                <th class="text-center">Re-order</th>
                <th class="text-center">Export</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>0.1 My Profile</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
            </tr>
            <tr>
                <td>0.2 Users</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
            </tr>
            <tr>
                <td>0.3 Groups</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
            </tr>
            <tr>
                <td>0.3.1 Administrator Group - Member</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
            </tr>
            <tr>
                <td>0.4 Log</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center"><i class="icon-checkmark4"></i></td>
            </tr>
            <tr><td colspan="8"></td></tr>
        </tbody>
    </table>
    <br>
    <br>
    <br>
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

<!-- Modal -->
<div id="modal_upload" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Upload PDF</h5>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="control-label">Please select file</label>
                        <input type="file" class="file-input-custom" accept="application/pdf" data-show-upload="false">
                        <span class="help-block">PDF file type maximum 6Mb.</span>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Upload</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>
