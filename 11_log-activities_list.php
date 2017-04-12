<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Activities Log - GHB Journals</title>
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
    <?php include 'ssi/js-list.php'; ?>
    
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
                            <h4><span class="text-semibold">Activities Log</span></h4>
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

                    
                    
                    <!-- Control Table -->
                    <div class="px-control-filters row">
                        <div class="col-md-12">
                            <div class="panel panel-flat">
                                <div class="panel-heading border-bottom px-tb-heading">
                                    <div class="tb-headfield clearfix">
                                        <div class="px-tb-action">
                                            <div class="px-tb-filters">
                                                <button id="px-openFilters" class="btn btn-primary" type="button"><i class="icon-filter4"></i> </button>
                                            </div>
                                            <div class="input-group has-feedback">
                                                <input type="text" class="form-control" placeholder="Enter Keyword">
                                                <span class="input-group-btn form-control-feedback"><i class="icon-search4 text-size-base"></i></span>
                                            </div>
                                            <div class="">
                                                <label>Show: </label>&nbsp;
                                                <select class="px-tb-show">
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="75">75</option>
                                                    <option value="100">100</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="heading-elements">
                                        <a id="px-addMore" href="00_actions_table.php" class="btn btn-warning">
                                            **Action Table**
                                        </a>
                                    </div>
                                </div>
                                <div class="px-datatable-filters">
                                    <!-- ** Filters ** -->
                                    <div id="px-filters">
                                        <div class="px-filters-wrap">
                                            <div class="row">
                                                <div class="form-group col-md-3 col-sm-6">
                                                    <label class="control-label text-bold">Start Date</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                                        <input type="text" class="form-control datepicker-filter" placeholder="Pick a date&hellip;">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3 col-sm-6">
                                                    <label class="control-label text-bold">End Date</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                                        <input type="text" class="form-control datepicker-filter" placeholder="Pick a date&hellip;">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <button type="butmit" class="btn btn-primary"> Filter </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / ** filters ** -->
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    <!-- /Control Table -->
                    
                    
                    <div class="row">
                        <!-- Users Table -->
                        <div class="col-md-12">
                           
                            <div class="panel panel-flat">
                                
                                <div class="">
                                    <!-- text-nowrap -->
                                    <table class="table table-togglable px-tb-flat">
                                        <thead class="px-tb-headpad">
                                            <tr>
                                                <th data-hide="phone" class="text-center">ID.</th>
                                                <th data-toggle="true">Username</th>
                                                <th>Module</th>
                                                <th>Action</th>
                                                <th data-hide="phone,tablet">IP Address</th>
                                                <th class="text-center" data-hide="phone">Date</th>
                                                <th class="text-right" data-hide="phone" data-name="Action"><i class="icon-cog7"></i>&nbsp;&nbsp;</th>
                                            </tr>
                                        </thead>
										<tbody>
                                           
                                            <tr>
                                                <td class="text-center">
                                                    <a href="11_log-activities_detail.php" class="text-ci">4</a>
                                                </td>
                                                <td>
                                                    <a href="11_log-activities_detail.php" class="text-ci">Carl Matthews</a><br>
                                                    <span class="colr-minor tg-offset">Administrator</span>
                                                </td>
                                                <td>
                                                    <strong>Highlight</strong><br>
                                                    <span class="colr-minor tg-offset small">Website Content</span>
                                                </td>
                                                <td>
                                                    Created
                                                </td>
                                                <td>
                                                    192.168.1.15
                                                </td>

                                                <td class="text-center">
                                                    31 Jan 2017<br>
                                                    <span class="colr-minor tg-offset">21:22</span>
                                                </td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="11_log-activities_detail.php"><i class="icon-eye"></i> View</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <a href="11_log-activities_detail.php" class="text-ci">3</a>
                                                </td>
                                                <td>
                                                    <a href="11_log-activities_detail.php" class="text-ci">Anna Thompson</a><br>
                                                    <span class="colr-minor tg-offset">PM DW27</span>
                                                </td>
                                                <td>
                                                    <strong>SET SMART</strong><br>
                                                    <span class="colr-minor tg-offset small">DW27</span>
                                                </td>
                                                <td>
                                                    Import Data Sheet
                                                </td>
                                                <td>
                                                    192.168.1.17
                                                </td>

                                                <td class="text-center">
                                                    31 Jan 2017<br>
                                                    <span class="colr-minor tg-offset">21:22</span>
                                                </td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="11_log-activities_detail.php"><i class="icon-eye"></i> View</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <a href="11_log-activities_detail.php" class="text-ci">2</a>
                                                </td>
                                                <td>
                                                    <a href="11_log-activities_detail.php" class="text-ci">Carl Matthews</a><br>
                                                    <span class="colr-minor tg-offset">Administrator</span>
                                                </td>
                                                <td>
                                                    <strong>Promotion</strong><br>
                                                    <span class="colr-minor tg-offset small">Website Content</span>
                                                </td>
                                                <td>
                                                    Re-odered
                                                </td>
                                                <td>
                                                    192.168.1.15
                                                </td>

                                                <td class="text-center">
                                                    31 Jan 2017<br>
                                                    <span class="colr-minor tg-offset">21:22</span>
                                                </td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="11_log-activities_detail.php"><i class="icon-eye"></i> View</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <a href="11_log-activities_detail.php" class="text-ci">1</a>
                                                </td>
                                                <td>
                                                    <a href="11_log-activities_detail.php" class="text-ci">Byron Reyes</a><br>
                                                    <span class="colr-minor tg-offset">Manager</span>
                                                </td>
                                                <td>
                                                    <strong>Register List</strong><br>
                                                    <span class="colr-minor tg-offset small">Seminar</span>
                                                </td>
                                                <td>
                                                    Edited status
                                                </td>
                                                <td>
                                                    220.58.1.221
                                                </td>

                                                <td class="text-center">
                                                    31 Jan 2017<br>
                                                    <span class="colr-minor tg-offset">21:22</span>
                                                </td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="11_log-activities_detail.php"><i class="icon-eye"></i> View</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="px-tb-footer clearfix">
                                    <div class="dataTables_info" role="status" >Showing 1 to 3 of 3 entries</div>
                                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                        <a href="#" class="paginate_button previous disabled" tabindex="0" >←</a>
                                        <span>
                                            <a href="#" class="paginate_button current" tabindex="0">1</a>
                                            <a href="#" class="paginate_button " tabindex="0">2</a>
                                        </span>
                                        <a href="#" class="paginate_button next disabled" tabindex="0" >→</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- /Users Table -->
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
