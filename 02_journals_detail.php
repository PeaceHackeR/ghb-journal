
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Journal Detail - GHB Journals</title>
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
                            <h4><a href="#" onclick="window.history.back();"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">Journal Details</span></h4>
                        </div>
                    </div>
                </div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
                    
                    <div class="row">
                        <div class="col-md-12 float-md-left">
                            <div class="panel panel-flat">
                                <div class="panel-heading border-bottom">
                                    <h4><span class="text-semibold">{{Journal ID}}</span></h4>
                                    <div class="heading-elements">
                                        <a href="02_journals_pagelist.php" class="btn btn-default btn-xs heading-btn"><i class="icon-list position-left"></i> Edit Page List</a>
                                        <span>&nbsp;&nbsp;&nbsp;</span>
                                        <a href="02_journals_add.php" class="btn btn-default btn-xs heading-btn"><i class="icon-pencil position-left"></i> Edit</a>
                                    </div>
                                </div>
                                <div class="panel-body">
<!--                                    <div class="h-title">Status</div>-->
                                    <br><br>
                                    <div class="h-title">Details</div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="h-field">Image</div>
                                            <p></p>
                                            <div class="px-imgDesc">
                                                <img src="dat/img-720x1005.png" alt="">
                                            </div>
                                            resource: <a href="dat/img-720x480.png" target="_blank">img-720x1005.png</a>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="h-field">Issue</div>
                                            <p>ฉบับที่ 87</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Volume</div>
                                            <p>ปีที่ 22</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Issue Date</div>
                                            <p>ตุลาคม - ธันวาคม 2559</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Category</div>
                                            <p>วารสาร ธอส.</p>
                                        </div>
                                    </div>
                                    
                                    <br><br>
                                    <div class="h-title">Page List</div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <style>
                                                .table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
                                                    border: 1px solid #efefef;
                                                }
                                            </style>
                                            <table class="table table-bordered">
                                               <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 80px;">No.</th>
                                                        <th >Title</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>Topic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td><a class="text-ci">Page title</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td><a class="text-ci">Page title</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3</td>
                                                        <td><a class="text-ci">Page title</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>Topic</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">4</td>
                                                        <td><a class="text-ci">Page title</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">5</td>
                                                        <td><a class="text-ci">Page title</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    
                                    <br><br>
                                    <div class="h-title">Traffic</div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="h-field">Page View</div>
                                            <p>118</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Download PDF</div>
                                            <p>12</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Download Ebook</div>
                                            <p>N/A</p>
                                        </div>
                                    </div>
                                    
                                    <br><br>
                                    <div class="h-title">Publish Status</div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="h-field">Status</div>
                                            <p><span class="label label-success label-fit">Enabled</span></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="h-field">Create date</div>
                                            <p>28 Apr 2017 at 18:24 by Anna Thompson</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Last modified</div>
                                            <p>29 Apr 2017 at 17:07 by Carl Matthews</p>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div style="padding-top:40px;">&nbsp;</div>
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
