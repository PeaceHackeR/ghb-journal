<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>News - GHB Journals</title>
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
                            <h4><span class="text-semibold">News</span></h4>
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
                                        <a href="04_news_reorder.php" class="btn btn-primary">
                                            <i class="icon-sort-numeric-asc position-left"></i> Manage Recommended
                                        </a>
                                        <a id="px-addMore" href="04_news_add.php" class="btn btn-primary">
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
                                                        <option value="">ข่าวสาร ธอส.</option>
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
                                                <th>ID</th>
                                                <th class="text-center">Thumbnail</th>
                                                <th data-toggle="true">Title</th>
                                                <th class="text-center">Category</th>
                                                <th class="text-center nowrap" data-hide="phone,tablet">Event Date</th>
                                                <th class="text-center">Gallery</th>
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
                                                <td><a href="04_news_detail.php" class="text-ci">NEWS17J4</a></td>
                                                <td class="text-center px-imgfill">
                                                    <div class="px-tb-image">
                                                        <a href="04_news_detail.php"><img src="dat/hlx-01.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="04_news_detail.php" class="text-ci">ธอส. ออกมาตรการใหม่ด้านสินเชื่อและการประนอมหนี้</a><br>
                                                    <span class="label label-fit bg-ci">Recommended</span>&nbsp;&nbsp;&nbsp;
                                                    <span class="colr-minor tg-offset"><i class="icon-calendar2"></i>&nbsp;1 Jun 2017 - 30 Nov 2017</span>
                                                </td>
                                                <td class="text-center nowrap">
                                                    ข่าวสาร ธอส.
                                                </td>
                                                <td class="text-center nowrap">
                                                    28 Apr 2017
                                                </td>
                                                <td class="text-center">
                                                    <a href="04_news_gallery.php" class="text-ci"><u>8</u></a>
                                                </td>
                                                <td class="text-center">
                                                    Anna Thompson<br>
                                                    <span class="colr-minor tg-offset">28 Apr 2017</span>
                                                </td>
                                                <td class="text-center"><span class="label label-fit label-success">Enabled</span></td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="#"><i class="icon-images2"></i> Manage gallery</a></li>
                                                                <li><a href="#"><i class="icon-pushpin"></i> Set to recommend</a></li>
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
                                                <td><a href="04_news_detail.php" class="text-ci">NEWS17J3</a></td>
                                                <td class="text-center px-imgfill">
                                                    <div class="px-tb-image">
                                                        <a href="04_news_detail.php"><img src="dat/hlx-06.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="04_news_detail.php" class="text-ci">ธอส. ส่งมอบโครงการ CSR ปรับปรุงภูมิทัศน์และพัฒนาแหล่งเรียนรู้ ให้แก่โรงเรียนเทศบาลปลายบางวัดโบสถ์ จ.นนทบุรี</a><br>
                                                    <span class="label label-fit bg-ci">Recommended</span>&nbsp;&nbsp;&nbsp;
                                                    <span class="colr-minor tg-offset"><i class="icon-calendar2"></i>&nbsp;3 Apr 2017 - 31 Dec 2017</span>
                                                </td>
                                                <td class="text-center nowrap">
                                                    กิจกรรมเพื่อสังคม
                                                </td>
                                                <td class="text-center nowrap">
                                                    26 Mar 2017
                                                </td>
                                                <td class="text-center">
                                                    <a href="04_news_gallery.php" class="text-ci"><u>15</u></a>
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
                                                                <li><a href="#"><i class="icon-images2"></i> Manage gallery</a></li>
                                                                <li><a href="#"><i class="icon-pushpin"></i> Set to recommend</a></li>
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
                                                <td><a href="04_news_detail.php" class="text-ci">NEWS17H2</a></td>
                                                <td class="text-center px-imgfill">
                                                    <div class="px-tb-image">
                                                        <a href="04_news_detail.php"><img src="dat/hlx-02.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="04_news_detail.php" class="text-ci">เงินฝากออมทรัพย์ Flexi</a><br>
                                                </td>
                                                <td class="text-center nowrap">
                                                    ธนาคารอาคารสงเคราะห์
                                                </td>
                                                <td class="text-center nowrap">
                                                    15 Mar 2017
                                                </td>
                                                <td class="text-center">
                                                    -
                                                </td>
                                                <td class="text-center">
                                                    Carl Matthews<br>
                                                    <span class="colr-minor tg-offset">16 Mar 2017</span>
                                                </td>
                                                <td class="text-center"><span class="label label-fit bg-orange">Drafted</span></td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="#"><i class="icon-images2"></i> Manage gallery</a></li>
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
                                                <td><a href="04_news_detail.php" class="text-ci">NEWS17G2</a></td>
                                                <td class="text-center px-imgfill">
                                                    <div class="px-tb-image">
                                                        <a href="04_news_detail.php"><img src="dat/hlx-03.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="04_news_detail.php" class="text-ci">โครงการเงินฝากออมทรัพย์ New Gen (ทดสอบ)</a><br>
                                                </td>
                                                <td class="text-center nowrap">
                                                    <span class="text-danger">N/A</span>
                                                </td>
                                                <td class="text-center nowrap">
                                                    10 Feb 2017
                                                </td>
                                                <td class="text-center">
                                                    <a href="04_news_gallery.php" class="text-ci"><u>2</u></a>
                                                </td>
                                                <td class="text-center">
                                                    Carl Matthews<br>
                                                    <span class="colr-minor tg-offset">15 Feb 2017</span>
                                                </td>
                                                <td class="text-center"><span class="label label-fit label-danger">Unsigned*</span></td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="#"><i class="icon-images2"></i> Manage gallery</a></li>
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
                                                <td><a href="04_news_detail.php" class="text-ci">NEWS17G1</a></td>
                                                <td class="text-center px-imgfill">
                                                    <div class="px-tb-image">
                                                        <a href="04_news_detail.php"><img src="dat/hlx-03.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="04_news_detail.php" class="text-ci">โครงการเงินฝากออมทรัพย์ New Gen</a><br>
                                                </td>
                                                <td class="text-center nowrap">
                                                    ข่าวสาร ธอส.
                                                </td>
                                                <td class="text-center nowrap">
                                                    10 Feb 2017
                                                </td>
                                                <td class="text-center">
                                                    <a href="04_news_gallery.php" class="text-ci"><u>2</u></a>
                                                </td>
                                                <td class="text-center">
                                                    Carl Matthews<br>
                                                    <span class="colr-minor tg-offset">14 Feb 2017</span>
                                                </td>
                                                <td class="text-center"><span class="label label-fit label-default">Disabled</span></td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="#"><i class="icon-images2"></i> Manage gallery</a></li>
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
                                        </tbody>
                                    </table>
                                </div>
                                <div class="px-tb-footer clearfix">
                                    <div class="dataTables_info" role="status" >Showing 1 to 4 of 30 entries</div>
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
