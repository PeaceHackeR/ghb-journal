<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Articels - GHB Journals</title>
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
                            <h4><span class="text-semibold">Articels</span></h4>
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
                                        <a href="03_articles_reorder.php" class="btn btn-primary">
                                            <i class="icon-sort-numeric-asc position-left"></i> Manage Recommended
                                        </a>
                                        <a id="px-addMore" href="03_articles_add.php" class="btn btn-primary">
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
                                                <th class="text-center" data-hide="phone" >Author</th>
                                                <th class="text-center" data-hide="phone,tablet" >Category</th>
                                                <th class="text-center nowrap" data-hide="phone,tablet" data-toggle="true">Issue date</th>
                                                <th class="text-center nowrap" data-hide="phone,tablet">PDF</th>
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
                                                <td><a href="03_articles_detail.php" class="text-ci">ATJ17M02</a></td>
                                                <td class="text-center px-imgfill">
                                                    <div class="px-tb-image">
                                                        <a href="dat/hlx-01.jpg" data-popup="lightbox"><img src="dat/hlx-01.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="03_articles_detail.php" class="text-ci">"Proxy or nominee" property - purchase policies clarified by government</a><br>
                                                    <span class="label label-fit bg-ci">Recommended</span>&nbsp;&nbsp;&nbsp;
                                                    <span class="colr-minor tg-offset"><i class="icon-calendar2"></i>&nbsp;1 Jun 2017 - 30 Nov 2017</span>
                                                </td>
                                                <td class="text-center">
                                                    ธนาคารอาคารสงเคราะห์
                                                </td>
                                                <td class="text-center nowrap">
                                                    บ้าน
                                                </td>
                                                <td class="text-center nowrap">
                                                    Q2/2560
                                                </td>
                                                <td class="text-center">
                                                    <a href="dat/pdf-sample.pdf" class="text-ci" target="_blank" download="AT17M02.pdf"><i class="icon-file-pdf txt-upsize"></i></a>
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
                                                                <li><a href="#" data-toggle="modal" data-target="#action-Recommend"
                                                                        data-id="1235" data-highlight="1"
                                                                        data-highlight_startdate="18 April 2017" data-highlight_starttime="18:12:22"
                                                                        data-highlight_enddate="1 September 2017" data-highlight_endtime="10:00:00"
                                                                    ><i class="icon-pushpin"></i> Publish Recommend</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="dat/pdf-sample.pdf" download="AT17M02.pdf"><i class="icon-file-download"></i> Download PDF</a></li>
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
                                                <td><a href="03_articles_detail.php" class="text-ci">ATJ17M01</a></td>
                                                <td class="text-center px-imgfill">
                                                    <div class="px-tb-image">
                                                       <a href="dat/hlx-06.jpg" data-popup="lightbox"><img src="dat/hlx-06.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="03_articles_detail.php" class="text-ci">ธอส. ออกมาตรการใหม่ด้านสินเชื่อและการประนอมหนี้</a><br>
                                                    <span class="label label-fit bg-ci">Recommended</span>&nbsp;&nbsp;&nbsp;
                                                    <span class="colr-minor tg-offset"><i class="icon-calendar2"></i>&nbsp;3 Apr 2017 - 31 Dec 2017</span>
                                                </td>
                                                <td class="text-center">
                                                    ธนาคารอาคารสงเคราะห์
                                                </td>
                                                <td class="text-center nowrap">
                                                    กฏหมาย
                                                </td>
                                                <td class="text-center nowrap">
                                                    Q2/2560
                                                </td>
                                                <td class="text-center">
                                                    <a href="dat/pdf-sample.pdf" class="text-ci" target="_blank" download="AT17M01.pdf"><i class="icon-file-pdf txt-upsize"></i></a>
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
                                                                <li><a href="#" data-toggle="modal" data-target="#action-Recommend"
                                                                    data-id="800" data-highlight="0"
                                                                    data-highlight_startdate="" data-highlight_starttime=""
                                                                    data-highlight_enddate="" data-highlight_endtime=""
                                                                ><i class="icon-pushpin"></i> Publish Recommend</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="dat/pdf-sample.pdf" download="AT17M01.pdf"><i class="icon-file-download"></i> Download PDF</a></li>
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
                                                <td><a href="03_articles_detail.php" class="text-ci">ATC17H02</a></td>
                                                <td class="text-center px-imgfill">
                                                    <div class="px-tb-image">
                                                        <a href="dat/hlx-02.jpg" data-popup="lightbox"><img src="dat/hlx-02.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="03_articles_detail.php" class="text-ci">หลักเกณฑ์และเงื่อนไขการให้สินเชื่อรายย่อย (Post-Finance) โครงการบ้านเอื้ออาทร</a><br>
                                                </td>
                                                <td class="text-center">
                                                    พัลลภ กฤตยานวัช
                                                </td>
                                                <td class="text-center nowrap">
                                                    สินเชื่อ
                                                </td>
                                                <td class="text-center nowrap">
                                                    &nbsp;
                                                </td>
                                                <td class="text-center">
                                                    &nbsp;
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
                                                                <li><a href="#"><i class="icon-eye"></i> View</a></li>
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
                                                <td><a href="03_articles_detail.php" class="text-ci">ATJ17H01</a></td>
                                                <td class="text-center px-imgfill">
                                                    <div class="px-tb-image">
                                                        <a href="dat/hlx-03.jpg" data-popup="lightbox"><img src="dat/hlx-03.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="03_articles_detail.php" class="text-ci">คุณเพียงใจ หาญพาณิชย์ หญิงเหล็ก...นักพัฒนาที่ดินรุ่นลายครามของไทย</a><br>
                                                </td>
                                                <td class="text-center">
                                                    พัลลภ กฤตยานวัช,<br>
                                                    สืบสิริ ศรีธัญญารัตน์ ภ.สก.ม.
                                                </td>
                                                <td class="text-center nowrap">
                                                    <span class="text-danger">N/A</span>
                                                </td>
                                                <td class="text-center nowrap">
                                                    Q1/2560
                                                </td>
                                                <td class="text-center">
                                                    <a href="dat/pdf-sample.pdf" class="text-ci" target="_blank" download="AT17H01.pdf"><i class="icon-file-pdf txt-upsize"></i></a>
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
                                                                <li><a href="dat/pdf-sample.pdf" download="AT17H01.pdf"><i class="icon-file-download"></i> Download PDF</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-eye"></i> View</a></li>
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
                                                <td><a href="03_articles_detail.php" class="text-ci">ATC16Z06</a></td>
                                                <td class="text-center px-imgfill">
                                                    <div class="px-tb-image">
                                                        <a href="dat/hlx-04.jpg" data-popup="lightbox"><img src="dat/hlx-04.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="03_articles_detail.php" class="text-ci">Evolution of accommodations and facilities in Thailand's National Parks</a><br>
                                                </td>
                                                <td class="text-center">
                                                    พัลลภ กฤตยานวัช
                                                </td>
                                                <td class="text-center nowrap">
                                                    ธนาคารอาคารสงเคราะห์
                                                </td>
                                                <td class="text-center nowrap">
                                                    &nbsp;
                                                </td>
                                                <td class="text-center nowrap">
                                                    &nbsp;
                                                </td>
                                                <td class="text-center">
                                                    Carl Matthews<br>
                                                    <span class="colr-minor tg-offset">9 Nov 2016</span>
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
        <form id="action-Recommend-form">
        <input name="id" type="hidden" />
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
                                        <input value="1" type="radio" name="highlight" class="styled"> Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input value="0" type="radio" name="highlight" class="styled" checked> No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label">Start</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                    <input type="text" class="form-control pickadate" placeholder="Pick a date&hellip;" name="fromdate">
                                </div>
                            </div>
                            <div class="form-group col-xs-4 col-md-2">
                                <label class="control-label">Hour</label>
                                <input type="text" class="form-control fnum" data-max="24" placeholder="- HH -" maxlength="2" name="fromtime_hh" autocomplete="off">
                            </div>
                            <div class="form-group col-xs-4 col-md-2">
                                <label class="control-label">Minutes</label>
                                <input type="text" class="form-control fnum" data-max="60" placeholder="- MM -" maxlength="2" name="fromtime_mm" autocomplete="off">
                            </div>
                            <div class="form-group col-xs-4 col-md-2">
                                <label class="control-label">Seconds</label>
                                <input type="text" class="form-control fnum" data-max="60" placeholder="- SS -" maxlength="2" name="fromtime_ss" autocomplete="off">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label">End <span class="colr-minor">(optional)</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                    <input type="text" class="form-control pickadate" placeholder="Pick a date&hellip;" name="todate">
                                </div>
                                <span  class="px-input-warning help-block text-danger hide">Invalid date.</span>
                            </div>
                            <div class="form-group col-xs-4 col-md-2">
                                <label class="control-label">Hour</label>
                                <input type="text" class="form-control fnum" data-max="24" placeholder="- HH -" maxlength="2" name="totime_hh" autocomplete="off">
                            </div>
                            <div class="form-group col-xs-4 col-md-2">
                                <label class="control-label">Minutes</label>
                                <input type="text" class="form-control fnum" data-max="60" placeholder="- MM -" maxlength="2" name="totime_mm" autocomplete="off">
                            </div>
                            <div class="form-group col-xs-4 col-md-2">
                                <label class="control-label">Seconds</label>
                                <input type="text" class="form-control fnum" data-max="60" placeholder="- SS -" maxlength="2" name="totime_ss" autocomplete="off">
                            </div>
                        </div>
                    </fieldset>
                </div>

               <div class="modal-footer text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-link" data-dismiss="modal">Cancle</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</body>
</html>
