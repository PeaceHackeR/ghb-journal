<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Authors - GHB Journals</title>
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
                            <h4><span class="text-semibold">Authors</span></h4>
                        </div>

                        <div class="heading-elements">
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
                                                <button id="px-openFilters" class="btn btn-primary" type="button"><i class="icon-filter4"></i>&nbsp;&nbsp;Filters&nbsp;</button>
                                            </div>
                                            
                                            <div class="">
                                                <label>show: </label>&nbsp;
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
                                        <a href="03_authors_reorder.php" class="btn btn-primary">
                                            <i class="icon-sort-numeric-asc position-left"></i> Manage Spotlight
                                        </a>
                                        <a id="px-addMore" href="03_authors_add.php" class="btn btn-primary">
                                            <i class="icon-plus3 position-left"></i> Add
                                        </a>
                                    </div>
                                </div>
                                <div class="px-datatable-filters">
                                    <!-- ** Filters ** -->
                                    <div id="px-filters">
                                        <div class="px-filters-wrap">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label class="control-label text-bold">Search</label>
                                                    <input type="text" class="form-control" placeholder="Enter Keyword">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-3 col-sm-6">
                                                    <label class="control-label text-bold">Category</label>
                                                    <select data-cond="brand" class="select">
                                                        <option disabled>- Category -</option>
                                                        <option value="" selected>All</option>
                                                        <option value="">ธนาคารอาคารสงเคราะห์</option>
                                                        <option value="">บ้าน</option>
                                                        <option value="">กฏหมาย</option>
                                                        <option value="">** Metadata **</option>
                                                        <option value="">N/A</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3 col-sm-6">
                                                    <label class="control-label text-bold">Status</label>
                                                    <select data-cond="brand" class="select">
                                                        <option disabled>- Status -</option>
                                                        <option value="" selected>All</option>
                                                        <option value="">Drafted</option>
                                                        <option value="">Enabled</option>
                                                        <option value="">Disabled</option>
                                                        <option value="">Unsigned*</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
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
                                                <th data-hide="phone" class="text-center">ID</th>
                                                <th class="text-center" style="width:80px;">Image</th>
                                                <th data-toggle="true">Name</th>
                                                <th data-hide="phone,tablet">Type</th>
                                                <th class="text-center" data-hide="phone,tablet">Post</th>
                                                <th class="text-center" data-hide="phone,tablet">Spotlight</th>
                                                <th class="text-center" data-hide="phone,tablet">Created</th>
                                                <th class="text-center" data-hide="phone">Status</th>
                                                <th class="text-right" data-hide="phone" data-name="Action"><i class="icon-cog7"></i>&nbsp;&nbsp;</th>
                                            </tr>
                                        </thead>
										<tbody class="tb-valign-mid">
                                            <tr>
                                                <td class="text-left">
                                                    <label><input type="checkbox" class="styled fxcond-bulk-check" value="-1"></label>
                                                </td>
                                                <td class="text-center">
                                                    <a href="03_authors_detail.php" class="text-ci">AUTH-5</a>
                                                </td>
                                                <td class="px-imgfill text-center">
                                                    <div class="px-tb-image">
                                                        <a href="dat/img-ghbank.jpg" data-popup="lightbox" class="box-imgCirc"><img src="dat/img-ghbank.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="03_authors_detail.php" class="text-ci">ธนาคารอาคารสงเคราะห์</a><br>
                                                    <span class="colr-minor tg-offset">G H BANK</span>
                                                </td>
                                                <td>
                                                    หน่วยงาน
                                                </td>
                                                <td class="text-center">
                                                    <a href="03_articles_list.php" class="text-ci"><u>89</u></a>
                                                </td>
                                                <td class="text-center">
                                                    <div class="circ-num bg-ci"><i class="text-white icon-checkmark"></i></div>
                                                </td>
                                                <td class="text-center">
                                                    Anna Thompson<br>
                                                    <span class="colr-minor tg-offset">2 Apr 2017</span>
                                                </td>
                                                <td class="text-center"><span class="label label-fit label-success">Enabled</span></td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="#" data-toggle="modal" data-target="#action-Recommend"><i class="icon-pushpin"></i> Publish Spotlight</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-eye"></i> View</a></li>
                                                                <li><a href="#"><i class="icon-checkmark4"></i> Enable</a></li>
                                                                <li><a href="#"><i class="icon-cross2"></i> Disable</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-bin"></i> Delete</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                               <td class="text-left">
                                                    <label><input type="checkbox" class="styled fxcond-bulk-check" value="-1"></label>
                                                </td>
                                                <td class="text-center">
                                                    <a href="03_authors_detail.php" class="text-ci">AUTH-4</a>
                                                </td>
                                                <td class="px-imgfill text-center">
                                                    <div class="px-tb-image">
                                                        <a href="dat/img-male.jpg" data-popup="lightbox" class="box-imgCirc"><img src="dat/img-male.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="03_authors_detail.php" class="text-ci">พัลลภ กฤตยานวัช</a><br>
                                                    <span class="colr-minor tg-offset">Mr.Panlop Krittayawatcha</span>
                                                </td>
                                                <td>
                                                    บุคคล
                                                </td>
                                                <td class="text-center">
                                                    <a href="03_articles_list.php" class="text-ci"><u>117</u></a>
                                                </td>
                                                <td class="text-center">
                                                    <div class="circ-num bg-ci"><i class="text-white icon-checkmark"></i></div>
                                                </td>
                                                <td class="text-center">
                                                    Anna Thompson<br>
                                                    <span class="colr-minor tg-offset">2 Apr 2017</span>
                                                </td>
                                                <td class="text-center"><span class="label label-fit label-success">Enabled</span></td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="#" data-toggle="modal" data-target="#action-Recommend"><i class="icon-pushpin"></i> Publish Spotlight</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-eye"></i> View</a></li>
                                                                <li><a href="#"><i class="icon-checkmark4"></i> Enable</a></li>
                                                                <li><a href="#"><i class="icon-cross2"></i> Disable</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-bin"></i> Delete</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">
                                                    <label><input type="checkbox" class="styled fxcond-bulk-check" value="-1"></label>
                                                </td>
                                                <td class="text-center">
                                                    <a href="03_authors_detail.php" class="text-ci">AUTH-3</a>
                                                </td>
                                                <td class="px-imgfill text-center">
                                                    <div class="px-tb-image">
                                                        <a href="dat/img-female.jpg" data-popup="lightbox" class="box-imgCirc"><img src="dat/img-female.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="03_authors_detail.php" class="text-ci">สืบสิริ ศรีธัญญารัตน์ ภ.สถ.ม.</a><br>
                                                    <span class="colr-minor tg-offset">Ms. Soobhsiri Srithanyarath M.L.A.</span>
                                                </td>
                                                <td>
                                                    บุคคล
                                                </td>
                                                <td class="text-center">
                                                    <a href="03_articles_list.php" class="text-ci"><u>21</u></a>
                                                </td>
                                                <td class="text-center">
                                                    &nbsp;
                                                </td>
                                                <td class="text-center">
                                                    Anna Thompson<br>
                                                    <span class="colr-minor tg-offset">2 Apr 2017</span>
                                                </td>
                                                <td class="text-center"><span class="label label-fit label-success">Enabled</span></td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="#" data-toggle="modal" data-target="#action-Recommend"><i class="icon-pushpin"></i> Publish Spotlight</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-eye"></i> View</a></li>
                                                                <li><a href="#"><i class="icon-checkmark4"></i> Enable</a></li>
                                                                <li><a href="#"><i class="icon-cross2"></i> Disable</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-bin"></i> Delete</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">
                                                    <label><input type="checkbox" class="styled fxcond-bulk-check" value="-1"></label>
                                                </td>
                                                <td class="text-center">
                                                    <a href="03_authors_detail.php" class="text-ci">AUTH-2</a>
                                                </td>
                                                <td class="px-imgfill text-center">
                                                    <div class="px-tb-image">
                                                        <a href="dat/img-ss01.jpg" data-popup="lightbox" class="box-imgCirc"><img src="dat/img-ss01.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="03_authors_detail.php" class="text-ci">สำนักผังเมือง กรุงเทพมหานคร</a><br>
                                                    <span class="colr-minor tg-offset">Department of City Planning</span>
                                                </td>
                                                <td>
                                                    หน่วยงาน
                                                </td>
                                                <td class="text-center">
                                                    <a href="03_articles_list.php" class="text-ci"><u>6</u></a>
                                                </td>
                                                <td class="text-center">
                                                    &nbsp;
                                                </td>
                                                <td class="text-center">
                                                    Anna Thompson<br>
                                                    <span class="colr-minor tg-offset">2 Apr 2017</span>
                                                </td>
                                                <td class="text-center"><span class="label label-fit label-default">Disabled</span></td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="#"><i class="icon-eye"></i> View</a></li>
                                                                <li><a href="#"><i class="icon-checkmark4"></i> Enable</a></li>
                                                                <li><a href="#"><i class="icon-cross2"></i> Disable</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-bin"></i> Delete</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">
                                                    <label><input type="checkbox" class="styled fxcond-bulk-check" value="-1"></label>
                                                </td>
                                                <td class="text-center">
                                                    <a href="03_authors_detail.php" class="text-ci">AUTH-1</a>
                                                </td>
                                                <td class="px-imgfill text-center">
                                                    <div class="px-tb-image">
                                                        <a href="dat/img-male.jpg" data-popup="lightbox" class="box-imgCirc"><img src="dat/img-male.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="03_authors_detail.php" class="text-ci">ศาสตราจารย์กิตติคุณ เดชา บุญค้ำ</a><br>
                                                    <span class="colr-minor tg-offset">Prof. Decha Boonkum</span>
                                                </td>
                                                <td>
                                                    บุคคล
                                                </td>
                                                <td class="text-center">
                                                    <a href="03_articles_list.php" class="text-ci"><u>4</u></a>
                                                </td>
                                                <td class="text-center">
                                                    &nbsp;
                                                </td>
                                                <td class="text-center">
                                                    Anna Thompson<br>
                                                    <span class="colr-minor tg-offset">2 Apr 2017</span>
                                                </td>
                                                <td class="text-center"><span class="label label-fit bg-orange">Drafted</span></td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="#"><i class="icon-eye"></i> View</a></li>
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
                                    <div class="dataTables_info" role="status" >Showing 1 to 5 of 30 entries</div>
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

    <!-- ACTION MODAL -->
    <div id="action-Recommend" class="modal fade" data-backdrop="static" data-keyboard="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h6 class="modal-title">Publish Spotlight</h6>
                </div>

                <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-12 clearfix">
                                <label class="control-label">Set to spotlight</label>
                                <div class="input-group">
                                    <label class="radio-inline">
                                        <input value="1" type="radio" name="fx-template" class="styled"> Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input value="0" type="radio" name="fx-template" class="styled" checked> No
                                    </label>
                                </div>
                            </div>
                        </div>
                </div>

               <div class="modal-footer text-center">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                    <button type="button" class="btn btn-link" data-dismiss="modal">Cancle</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
