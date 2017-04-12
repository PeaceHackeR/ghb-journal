<!DOCTYPE html>
<html lang="th">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Group Add Member - GHB Journals</title>
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
	<?php include 'ssi/js-list.php'; ?>
	
	<script type="text/javascript" src="assets/js/pages/11_group_member_add.js"></script>
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
					<?php include 'ssi/main-navigation.php'; ?>
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
                            <h4><a href="#" onclick="window.history.back();"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">Edit Administrator Member</span></h4>
                        </div>

                        <div class="heading-elements">
                            <div class="heading-btn-group">
                                <a href="#" class="btn btn-link btn-float has-text text-grey-400">
                                    <i class="icon-drawer-out"></i> <span>Export</span>
                                </a>
                            </div>
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
                                                <input type="text" class="form-control" placeholder="Search">
                                                <span class="input-group-btn form-control-feedback"><i class="icon-search4 text-size-base"></i></span>
                                            </div>
                                            <div class="">
                                                <label>Display: </label>&nbsp;
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
                                       <a href="#" class="btn btn-default" onclick="window.history.back();">
                                            Cancel
                                        </a>
                                        <input type="hidden" name="cx_group_member" value="2">
                                        <a id="px-addMember" href="11_group_member_list.php" class="btn btn-default">
                                            <i class="icon-users position-left"></i> Save <span class="counter text-bold">2</span> member
                                        </a>
                                    </div>
                                </div>
                                <div class="px-datatable-filters">
                                    <!-- ** Filters ** -->
                                    <div id="px-filters">
                                        <div class="px-filters-wrap">
                                            <div class="row">
                                                <div class="form-group col-md-3 col-sm-6">
                                                    <label class="control-label text-bold">Status</label>
                                                    <select data-placeholder="Please Select" class="select">
                                                        <option></option>
                                                        <option disabled>Please Select</option>
                                                        <option value="">All</option>
                                                        <option value="">Active</option>
                                                        <option value="">Suspended</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12 fxcond-checked chk-inline">
                                                    <label class="display-block text-bold">User Group</label>
                                                    <div class="form-group">
                                                        <div class="checkbox col-md-3">
                                                            <label><input type="checkbox" class="styled"> Administrator</label>
                                                        </div>
                                                        <div class="checkbox col-md-3">
                                                            <label><input type="checkbox" class="styled"> Head Office</label>
                                                        </div>
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
                                                <th class="px-tb-bulkcheck text-left">
                                                    <label><input type="checkbox" class="styled fxcond-bulk-all" value="-1"></label>&nbsp;
                                                </th>
                                                <th data-toggle="true">Name</th>
                                                <th data-hide="phone,tablet">E-Mail</th>
                                                <th>Group</th>
                                                <th class="text-right" data-hide="phone" data-name="Action"><i class="icon-cog7"></i>&nbsp;&nbsp;</th>
                                            </tr>
                                        </thead>
										<tbody>
                                            <tr>
                                                <td class="text-left">
                                                    <label><input type="checkbox" class="styled fxcond-bulk-check" value="132" checked></label>&nbsp;
                                                </td>
                                                <td><a href="11_users_detail.php"><span class="text-blue">Carl Matthews</span></a></td>
                                                <td>
                                                    carl.matthews1234@gmail.com
                                                </td>
                                                <td>
                                                    Administrator
                                                </td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="11_users_form_edit.php"><i class="icon-pencil5"></i> Edit</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-user-check"></i>Active</a></li>
                                                                <li><a href="#"><i class="icon-user-block"></i> Disable</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-bin"></i> Delete</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">
                                                    <label><input type="checkbox" class="styled fxcond-bulk-check" value="4343"></label>&nbsp;
                                                </td>
                                                <td><a href="11_users_detail.php"><span class="text-blue">Anna Thompson</span></a></td>
                                                <td>
                                                    Anna.Thompson25@rhb.co.th
                                                </td>
                                                <td>
                                                   Sales
                                                </td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="11_users_form_edit.php"><i class="icon-pencil5"></i> Edit</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-user-check"></i> Active</a></li>
                                                                <li><a href="#"><i class="icon-user-block"></i> Disable</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-bin"></i> Delete</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">
                                                    <label><input type="checkbox" class="styled fxcond-bulk-check" value="33" checked></label>&nbsp;
                                                </td>
                                                <td><a href="07_users_detail.php"><span class="text-blue">Byron Reyes</span></a></td>
                                                <td>
                                                    Byron.Reyes@rhb.co.th
                                                </td>
                                                <td>
                                                    Manager
                                                </td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="11_users_form_edit.php"><i class="icon-pencil5"></i> Edit</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-user-check"></i> Active</a></li>
                                                                <li><a href="#"><i class="icon-user-block"></i> Disable</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-bin"></i> Delete</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="px-tb-footer clearfix">
                                    <div class="dataTables_info" role="status" >Showing 1 to 8 of 8 entries</div>
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

</body>
</html>
