<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Group List - GHB Journals</title>
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
                            <h4><span class="text-semibold">Group</span></h4>
                        </div>
                        <div class="heading-elements"></div>
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
                                        <a id="px-addMore" href="11_group_form.php" class="btn btn-primary">
                                            <i class="icon-plus3 position-left"></i> Add
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
                                                    <select data-placeholder="Please select" class="select">
                                                        <option></option>
                                                        <option disabled>Please select</option>
                                                        <option value="">All</option>
                                                        <option value="">Active</option>
                                                        <option value="">Suspended</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12 fxcond-checked chk-inline">
                                                    <label class="display-block text-bold">Group</label>
                                                    <div class="form-group">
                                                        <div class="checkbox col-md-3">
                                                            <label><input type="checkbox" class="styled"> Administrator</label>
                                                        </div>
                                                        <div class="checkbox col-md-3">
                                                            <label><input type="checkbox" class="styled"> Manager</label>
                                                        </div>
                                                        <div class="checkbox col-md-3">
                                                            <label><input type="checkbox" class="styled"> Sales</label>
                                                        </div>
                                                        <div class="checkbox col-md-3">
                                                            <label><input type="checkbox" class="styled"> Content Writer</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <button type="butmit" class="btn btn-primary"> Submit </button>
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
                    
                    <!-- Bulk Action -->
                    <div id="px-bulk-Action" class="row">
                        <div class="form-group col-sm-3">
                            <select data-placeholder="- Bulk Action -" class="select px-input" disabled>
                                <option></option>
                                <option disabled>- Bulk Action -</option>
                                <option value="">Enable</option>
                                <option value="">Disable</option>
                                <option value="">Delete</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-2">
                            <button class="btn btn-default px-input" type="button" disabled>Apply</button>
                        </div>
                    </div>
                    <!-- /bulk Action -->
                    
                    
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
                                                <th data-toggle="true">Group</th>
                                                <th class="text-center">Members</th>
                                                <th data-hide="phone" class="text-center">Status</th>
                                                <th class="text-right" data-hide="phone" data-name="Action"><i class="icon-cog7"></i>&nbsp;&nbsp;</th>
                                            </tr>
                                        </thead>
										<tbody>
                                            <tr>
                                                <td class="text-left">
                                                    <label><input type="checkbox" class="styled fxcond-bulk-check" value="-1"></label>&nbsp;
                                                </td>
                                                <td><a href="11_group_detail.php"><span class="text-blue">Administrator</span></a></td>
                                                <td class="text-center">2</td>
                                                <td class="text-center"><span class="label label-fit label-success">Active</span></td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="11_group_form_edit.php"><i class="icon-pencil5"></i> Edit</a></li>
                                                                <li><a href="11_users_form.php"><i class="icon-user-plus"></i> Add User</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-checkmark3"></i> Enable</a></li>
                                                                <li><a href="#"><i class="icon-cross2"></i> Disable</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">
                                                    <label><input type="checkbox" class="styled fxcond-bulk-check" value="-1"></label>&nbsp;
                                                </td>
                                                <td><a href="11_group_detail.php"><span class="text-blue">Manager</span></a></td>
                                                <td class="text-center">3</td>
                                                <td class="text-center"><span class="label label-fit label-success">Active</span></td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="11_group_form_edit.php"><i class="icon-pencil5"></i> Edit</a></li>
                                                                <li><a href="11_users_form.php"><i class="icon-user-plus"></i> Add User</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-checkmark3"></i> Enable</a></li>
                                                                <li><a href="#"><i class="icon-cross2"></i> Disable</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">
                                                    <label><input type="checkbox" class="styled fxcond-bulk-check" value="-1"></label>&nbsp;
                                                </td>
                                                <td><a href="11_group_detail.php"><span class="text-blue">PM DW27</span></a></td>
                                                <td class="text-center">4</td>
                                                <td class="text-center"><span class="label label-fit label-success">Active</span></td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="11_group_form_edit.php"><i class="icon-pencil5"></i> Edit</a></li>
                                                                <li><a href="11_users_form.php"><i class="icon-user-plus"></i> Add User</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-checkmark3"></i> Enable</a></li>
                                                                <li><a href="#"><i class="icon-cross2"></i> Disable</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">
                                                    <label><input type="checkbox" class="styled fxcond-bulk-check" value="-1"></label>&nbsp;
                                                </td>
                                                <td><a href="11_group_detail.php"><span class="text-blue">Content Writer</span></a></td>
                                                <td class="text-center">1</td>
                                                <td class="text-center"><span class="label label-fit label-default">Disabled</span></td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="11_group_form_edit.php"><i class="icon-pencil5"></i> Edit</a></li>
                                                                <li><a href="11_users_form.php"><i class="icon-user-plus"></i> Add User</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-checkmark3"></i> Enable</a></li>
                                                                <li><a href="#"><i class="icon-cross2"></i> Disable</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="px-tb-footer clearfix">
                                    <div class="dataTables_info" role="status" >Showing 1 to 4 of 4 entries</div>
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
