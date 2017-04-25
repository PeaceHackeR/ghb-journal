<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Journals - GHB Journals</title>
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
                            <h4><span class="text-semibold">Journals</span></h4>
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
                                        <a id="px-addMore" href="02_journals_add.php" class="btn btn-primary">
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
                                                    <label class="control-label text-bold">Author</label>
                                                    <select data-cond="brand" class="select">
                                                        <option disabled>- Author -</option>
                                                        <option value="" selected>All</option>
                                                        <optgroup label="- หน่วยงาน -">
                                                            <option value="">ธนาคารอาคารสงเคราะห์</option>
                                                            <option value="">สำนักผังเมือง กรุงเทพมหานคร</option>
                                                            <option value="">กองบรรณาธิการ วาสาร ธอส.</option>
                                                        </optgroup>
                                                        <optgroup label="- บุคคล -">
                                                            <option value="">พัลลภ กฤตยานวัช</option>
                                                            <option value="">ดร. ดนัย ทายตะคุ</option>
                                                            <option value="">สืบสิริ ศรีธัญญารัตน์ ภ.สก.ม.</option>
                                                        </optgroup>
                                                        <option value="">** Metadata **</option>
                                                    </select>
                                                </div>
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
                                                <th>ID</th>
                                                <th class="text-center">Thumbnail</th>
                                                <th data-toggle="true">Title</th>
                                                <th class="text-center" data-hide="phone,tablet" data-toggle="true">Issue date</th>
                                                <th class="text-center" data-hide="phone,tablet" data-toggle="true">Category</th>
                                                <th class="text-center nowrap" data-hide="phone,tablet">Page View</th>
                                                <th class="text-center nowrap" data-hide="phone,tablet">D/PDF</th>
                                                <th class="text-center nowrap" data-hide="phone,tablet">D/Ebook</th>
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
                                                <td><a href="02_journals_detail.php" class="text-ci">JN16Z</a></td>
                                                <td class="text-center px-imgfill bigImg">
                                                    <div class="px-tb-image">
                                                        <a href="dat/img-js01.jpg" data-popup="lightbox"><img src="dat/img-js01.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="02_journals_detail.php" class="text-ci">ฉบับที่ 87 ปีที่ 22</a><br>
                                                    <span class="colr-minor tg-offset">ตุลาคม - ธันวาคม 2559</span>
                                                </td>
                                                <td class="text-center nowrap">
                                                    Q4/2559
                                                </td>
                                                <td class="text-center nowrap">วารสาร ธอส.</td>
                                                <td class="text-center nowrap">
                                                    118
                                                </td>
                                                <td class="text-center nowrap">
                                                    12
                                                </td>
                                                <td class="text-center nowrap">
                                                    <span class="colr-minor tg-offset">N/A</span>
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
                                                                <li><a href="dat/pdf-sample.pdf" download="JN16Z.pdf"><i class="icon-file-download"></i> Download PDF</a></li>
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
                                                <td><a href="02_journals_detail.php" class="text-ci">JN16U</a></td>
                                                <td class="text-center px-imgfill bigImg">
                                                    <div class="px-tb-image">
                                                        <a href="dat/img-js02.jpg" data-popup="lightbox"><img src="dat/img-js02.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="02_journals_detail.php" class="text-ci">ฉบับที่ 86 ปีที่ 22</a><br>
                                                    <span class="colr-minor tg-offset">กรกฎาคม - กันยายน 2559</span>
                                                </td>
                                                <td class="text-center nowrap">
                                                    Q3/2559
                                                </td>
                                                <td class="text-center nowrap">วารสาร ธอส.</td>
                                                <td class="text-center nowrap">
                                                    846
                                                </td>
                                                <td class="text-center nowrap">
                                                    63
                                                </td>
                                                <td class="text-center nowrap">
                                                    <span class="colr-minor tg-offset">N/A</span>
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
                                                                <li><a href="dat/pdf-sample.pdf" download="JN16U.pdf"><i class="icon-file-download"></i> Download PDF</a></li>
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
                                                <td><a href="02_journals_detail.php" class="text-ci">JN16M</a></td>
                                                <td class="text-center px-imgfill bigImg">
                                                    <div class="px-tb-image">
                                                        <a href="dat/img-js03.jpg" data-popup="lightbox"><img src="dat/img-js03.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="02_journals_detail.php" class="text-ci">ฉบับที่ 85 ปีที่ 22</a><br>
                                                    <span class="colr-minor tg-offset">เมษายน - มิถุนายน 2559</span>
                                                </td>
                                                <td class="text-center nowrap">
                                                    Q2/2559
                                                </td>
                                                <td class="text-center nowrap">วารสาร ธอส.</td>
                                                <td class="text-center nowrap">
                                                    1,293
                                                </td>
                                                <td class="text-center nowrap">
                                                    205
                                                </td>
                                                <td class="text-center nowrap">
                                                    <span class="colr-minor tg-offset">N/A</span>
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
                                                                <li><a href="dat/pdf-sample.pdf" download="JN16M.pdf"><i class="icon-file-download"></i> Download PDF</a></li>
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
                                                <td><a href="02_journals_detail.php" class="text-ci">JN16H</a></td>
                                                <td class="text-center px-imgfill bigImg">
                                                    <div class="px-tb-image">
                                                        <a href="dat/img-js04.jpg" data-popup="lightbox"><img src="dat/img-js04.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="02_journals_detail.php" class="text-ci">ฉบับที่ 84 ปีที่ 22</a><br>
                                                    <span class="colr-minor tg-offset">มกราคม - มีนาคม 2559</span>
                                                </td>
                                                <td class="text-center nowrap">
                                                    Q1/2559
                                                </td>
                                                <td class="text-center nowrap">วารสาร ธอส.</td>
                                                <td class="text-center nowrap">
                                                    975
                                                </td>
                                                <td class="text-center nowrap">
                                                    32
                                                </td>
                                                <td class="text-center nowrap">
                                                    87
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
                                                                <li><a href="dat/pdf-sample.pdf" download="JN16H.pdf"><i class="icon-file-download"></i> Download PDF</a></li>
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
                                                <td><a href="02_journals_detail.php" class="text-ci">JN15Z</a></td>
                                                <td class="text-center px-imgfill bigImg">
                                                    <div class="px-tb-image">
                                                        <a href="dat/img-js05.jpg" data-popup="lightbox"><img src="dat/img-js05.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="02_journals_detail.php" class="text-ci">ฉบับที่ 83 ปีที่ 21</a><br>
                                                    <span class="colr-minor tg-offset">ตุลาคม - ธันวาคม 2558</span>
                                                </td>
                                                <td class="text-center nowrap">
                                                    Q4/2558
                                                </td>
                                                <td class="text-center nowrap">วารสาร ธอส.</td>
                                                <td class="text-center nowrap">
                                                    1,579
                                                </td>
                                                <td class="text-center nowrap">
                                                    421
                                                </td>
                                                <td class="text-center nowrap">
                                                    180
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
                                                                <li><a href="dat/pdf-sample.pdf" download="JN15Z.pdf"><i class="icon-file-download"></i> Download PDF</a></li>
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
                                                <td><a href="02_journals_detail.php" class="text-ci">JN13ZAPHJ</a></td>
                                                <td class="text-center px-imgfill bigImg">
                                                    <div class="px-tb-image">
                                                        <a href="dat/img-js06.jpg" data-popup="lightbox"><img src="dat/img-js06.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="02_journals_detail.php" class="text-ci">No. 25 Volume 7</a><br>
                                                    <span class="colr-minor tg-offset">October - November 2013</span>
                                                </td>
                                                <td class="text-center nowrap">
                                                    Q4/2013
                                                </td>
                                                <td class="text-center nowrap">APHJ</td>
                                                <td class="text-center nowrap">
                                                    1,579
                                                </td>
                                                <td class="text-center nowrap">
                                                    421
                                                </td>
                                                <td class="text-center nowrap">
                                                    180
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
                                                                <li><a href="dat/pdf-sample.pdf" download="JN13ZAPHJ.pdf"><i class="icon-file-download"></i> Download PDF</a></li>
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
                                                <td><a href="02_journals_detail.php" class="text-ci">JN15U</a></td>
                                                <td class="text-center px-imgfill bigImg">
                                                    <div class="px-tb-image">
                                                        <a href="dat/img-720x1005.png" data-popup="lightbox"><img src="dat/img-720x1005.png"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="02_journals_detail.php" class="text-ci">ฉบับที่ 82 ปีที่ 21</a><br>
                                                    <span class="colr-minor tg-offset">กรกฏาคม - กันยายน 2558</span>
                                                </td>
                                                <td class="text-center nowrap">
                                                    Q3/2559
                                                </td>
                                                <td class="text-center nowrap">วารสาร ธอส.</td>
                                                <td class="text-center nowrap">
                                                    118
                                                </td>
                                                <td class="text-center nowrap">
                                                    12
                                                </td>
                                                <td class="text-center nowrap">
                                                    <span class="colr-minor tg-offset">N/A</span>
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
                                                                <li><a href="dat/pdf-sample.pdf" download="JN16Z.pdf"><i class="icon-file-download"></i> Download PDF</a></li>
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
                                    <div class="dataTables_info" role="status" >Showing 1 to 6 of 30 entries</div>
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
                    <h6 class="modal-title">Publish Recommend</h6>
                </div>

                <div class="modal-body">
                    <fieldset class="content-group">
                        <div class="row">
                            <div class="form-group col-md-6 clearfix">
                                <label class="control-label">Set to recommend</label>
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
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label">Start</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                    <input type="text" class="form-control pickadate" placeholder="Pick a date&hellip;">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Time</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-alarm"></i></span>
                                    <input type="text" class="form-control pickatime" placeholder="Time">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">End</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                    <input type="text" class="form-control pickadate" placeholder="Pick a date&hellip;">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Time</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-alarm"></i></span>
                                    <input type="text" class="form-control pickatime" placeholder="Time">
                                </div>
                            </div>
                        </div>
                    </fieldset>
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
