
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Highlight Detail - GHB Journals</title>
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
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<?php include "ssi/js-detail.php"; ?>
	
	<script type="text/javascript" src="assets/js/pages/01_highlight_detail.js"></script>
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
                            <h4><a href="#" onclick="window.history.back();"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">Highlight Details</span></h4>
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
                                    <h4><span class="text-semibold">{{Highlight ID}}</span></h4>
                                    <div class="heading-elements">
                                        <a href="#" class="btn btn-default btn-xs heading-btn"><i class="icon-file-eye position-left"></i> Preview</a>
                                        <a href="01_highlight_add.php" class="btn btn-default btn-xs heading-btn"><i class="icon-pencil position-left"></i> Edit</a>
                                    </div>
                                </div>
                                <div class="panel-body">
<!--                                    <div class="h-title">Status</div>-->
                                    <br><br>
                                    <div class="h-title">Details</div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="h-field">Desktop image</div>
                                            <p></p>
                                            <div class="px-imgDesc">
                                                <img src="dat/img-1500x800.png" alt="">
                                            </div>
                                            resource: <a href="dat/img-1500x800.png" target="_blank">img-1500x800.png</a>

                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="h-field">Title</div>
                                            <p>โครงการส่งเสริมธุรกิจตลาดบ้านมือสองสำหรับผู้ประกอบการ</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Tag</div>
                                            <p>โครงการส่งเสริมธุรกิจ</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="h-field">Type</div>
                                            <p>Page</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Template</div>
                                            <p>Content</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <br>
                                        <div class="col-md-12"><strong>Link</strong></div>
                                        <br>
                                        <div class="col-md-6">
                                            <div class="h-field">URL / Youtube Video ID</div>
                                            <p>
                                                <a href="http://www.ghbank.co.th/th/services_loan_detail.php?cms_id=241&cms_cate_id=5&parent=services_loan.php?cms_cate_id=5" target="_blank">http://www.ghbank.co.th/th/services_loan_detail.php?cms_id=241&amp;cms_cate_id=5&amp;parent=services_loan.php?cms_cate_id=5</a>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Target</div>
                                            <p>Self</p>
                                        </div>
                                    </div>
                                    
                                    <br><br>
                                    <div class="h-title">Publish setting</div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="h-field">Status</div>
                                            <p><span class="label label-success label-fit">Enabled</span></p>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="h-field">Start date</div>
                                            <p>18 Apr 2016 at 18:24</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">End date</div>
                                            <p>30 Sep 2016 at 0:00</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="h-field">Create date</div>
                                            <p>18 Apr 2017 at 18:24 by Anna Thompson</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Last modified</div>
                                            <p>22 Apr 2017 at 17:07 by Carl Matthews</p>
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
