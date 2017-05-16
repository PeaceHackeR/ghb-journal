<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard - GHB Journals</title>
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
	<?php include "ssi/js-dashboard.php"; ?>

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
                            <h4><span class="text-semibold">Dashboard</span></h4>
<!--
                            <ul class="breadcrumb">
                                <li class="active">Dashboard</li>
                            </ul>
-->
                        </div>

                        <div class="heading-elements">
                            <div class="heading-btn-group">

                            </div>
                        </div>
                    </div>
                    
                    <div class="breadcrumb-line">
                        <div class="breadcrumb">
                            <span class="text-bold">Report as of</span>
                        </div>

                        <div class="breadcrumb-elements">
                            <button type="button" class="btn btn-link daterange-ranges heading-btn text-semibold">
                                            <span></span> <b class="caret"></b>
                                        </button>
                        </div>
                    </div>
                    
                </div>
				<!-- /page header -->
				
				<!-- Content area -->
				<div class="content">
                   
                    
                    <!-- Data Overall -->
                    <div class="row">
                        <!-- Overall stats boxes -->
                        <div class="col-md-8 float-md-left">
                            <div class="px-box-overall row">

                                <div class="col-lg-4">
                                    
                                    <!-- Members online -->
                                    <div class="panel bg-ci" >
                                        <div class="panel-body">
                                            <h3 class="no-margin">Monthly Visitors</h3>
                                            <div class="txt-font-2em">5,312 <span class="txt-small">visitors</span></div>
                                            <div class="text-muted text-size-small">Avg. 142 visit/day </div>
                                        </div>
                                        <div class="container-fluid">
											<div id="members-online"></div>
										</div>
                                    </div>
                                    <!-- /members online -->

                                </div>
                                
                                <div class="col-lg-4">
                                    
                                    <!-- Members online -->
                                    <div class="panel bg-pink-400">
                                        <div class="panel-body">
                                            <h3 class="no-margin">Server Load</h3>
                                            <div class="txt-font-2em">24 <span class="txt-small">%</span></div>
                                            <div class="text-muted text-size-small">Of 5,312 visitors</div>
                                        </div>
                                        <div id="server-load"></div>
                                    </div>
                                    <!-- /members online -->

                                </div>

                                <div class="col-lg-4">

                                    <!-- Current server load -->
                                    <div class="panel bg-blue-400" >
                                        <div class="panel-body">
                                            <h3 class="no-margin">Journal Traffic</h3>
                                            <div class="txt-font-2em">116 <span class="txt-small">UIP</span></div>
                                            <div class="text-muted text-size-small">Avg. 3,314.65 / day</div>
                                        </div>
                                        <div id="today-revenue"></div>
                                    </div>
                                    <!-- /current server load -->

                                </div>

                            </div>
                            
                        </div>
				        <!-- /overall stats boxes -->
                        
                        <div class="col-md-4 float-md-right">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- My messages -->
                                    <div class="panel panel-flat">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">Total Page View</h4>
                                            <div class="heading-elements">
                                            </div>
                                        </div>

                                        <!-- Numbers -->
                                        <div class="container-fluid" style="padding-right:20px; padding-left:20px;">
                                            <div class="row text-center">
                                                <div class="col-md-12">
                                                    <div class="content-group text-right">
                                                        <div class=" txt-font-2em">384,500</div>
<!--                                                        <span class="text-muted text-size-small">Sales Total</span>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /numbers -->

                                        <!-- Tabs -->
                                        <ul class="nav nav-lg nav-tabs nav-justified no-margin no-border-radius bg-ci border-top border-top-indigo-300">
                                            <li class="active">
                                                <a href="#messages-tue" class="text-size-small text-uppercase" data-toggle="tab">
                                                    Top Articles
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#messages-mon" class="text-size-small text-uppercase" data-toggle="tab">
                                                    Top Journals
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#messages-fri" class="text-size-small text-uppercase" data-toggle="tab">
                                                    Top News
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- /tabs -->


                                        <!-- Tabs content -->
                                        <div class="tab-content">
                                            <div class="tab-pane active fade in has-padding" id="messages-tue" style="padding:0;">
                                                <div class="table-responsive">
                                                    <!-- text-nowrap -->
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Title</th>
                                                                <th class="text-right">Impression/Day</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="circ-num bg-ci">1</div>
                                                                    "Proxy or nominee" property - purchase policies clarified by government
                                                                    <br><span class="colr-minor tg-offset">232 users</span>
                                                                </td>
                                                                <td class="v-top text-right"><span class="text-bold">1,435</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="circ-num bg-ci">2</div>
                                                                    ธอส. ออกมาตรการใหม่ด้านสินเชื่อและการประนอมหนี้
                                                                    <br><span class="colr-minor tg-offset">180 users</span>
                                                                </td>
                                                                <td class="v-top text-right"><span class="text-bold">1,382</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="circ-num bg-ci">3</div>
                                                                    หลักเกณฑ์และเงื่อนไขการให้สินเชื่อรายย่อย (Post-Finance) โครงการบ้านเอื้ออาทร
                                                                    <br><span class="colr-minor tg-offset">122 users</span>
                                                                </td>
                                                                <td class="v-top text-right"><span class="text-bold">983</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="circ-num bg-grey">4</div>
                                                                    คุณเพียงใจ หาญพาณิชย์ หญิงเหล็ก...นักพัฒนาที่ดินรุ่นลายครามของไทย
                                                                    <br><span class="colr-minor tg-offset">96 users</span>
                                                                </td>
                                                                <td class="v-top text-right"><span class="text-bold">761</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="circ-num bg-grey">5</div>
                                                                    Evolution of accommodations and facilities in Thailand's National Parks
                                                                    <br><span class="colr-minor tg-offset">77 users</span>
                                                                </td>
                                                                <td class="v-top text-right"><span class="text-bold">530</span></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade has-padding" id="messages-mon" style="padding:0;">
                                                <div class="table-responsive">
                                            <!-- text-nowrap -->
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Title</th>
                                                        <th class="text-center">Impression/Day</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="circ-num bg-ci">1</div>
                                                            ฉบับที่ 85 ปีที่ 22
                                                            <br><span class="colr-minor tg-offset">เมษายน - มิถุนายน 2559</span>
                                                        </td>
                                                        <td class="v-top text-center"><span class="text-bold">36</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="circ-num bg-ci">2</div>
                                                            ฉบับที่ 86 ปีที่ 22
                                                            <br><span class="colr-minor tg-offset">กรกฎาคม - กันยายน 2559</span>
                                                        </td>
                                                        <td class="v-top text-center"><span class="text-bold">28</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="circ-num bg-ci">3</div>
                                                            ฉบับที่ 87 ปีที่ 22
                                                            <br><span class="colr-minor tg-offset">ตุลาคม - ธันวาคม 2559</span>
                                                        </td>
                                                        <td class="v-top text-center"><span class="text-bold">15</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="circ-num bg-grey">4</div>
                                                            No. 25 Volume 7
                                                            <br><span class="colr-minor tg-offset">October - November 2013</span>
                                                        </td>
                                                        <td class="v-top text-center"><span class="text-bold">9</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="circ-num bg-grey">5</div>
                                                            ฉบับที่ 83 ปีที่ 21
                                                            <br><span class="colr-minor tg-offset">ตุลาคม - ธันวาคม 2558</span>
                                                        </td>
                                                        <td class="v-top text-center"><span class="text-bold">8</span></td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                            </div>
                                            
                                            
                                            <div class="tab-pane fade in has-padding" id="messages-fri" style="padding:0;">
                                                <div class="table-responsive">
                                                    <!-- text-nowrap -->
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Title</th>
                                                                <th class="text-right">Impression/Day</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="circ-num bg-ci">1</div>
                                                                    "Proxy or nominee" property - purchase policies clarified by government
                                                                    <br><span class="colr-minor tg-offset">232 users</span>
                                                                </td>
                                                                <td class="v-top text-right"><span class="text-bold">1,435</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="circ-num bg-ci">2</div>
                                                                    ธอส. ออกมาตรการใหม่ด้านสินเชื่อและการประนอมหนี้
                                                                    <br><span class="colr-minor tg-offset">180 users</span>
                                                                </td>
                                                                <td class="v-top text-right"><span class="text-bold">1,382</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="circ-num bg-ci">3</div>
                                                                    หลักเกณฑ์และเงื่อนไขการให้สินเชื่อรายย่อย (Post-Finance) โครงการบ้านเอื้ออาทร
                                                                    <br><span class="colr-minor tg-offset">122 users</span>
                                                                </td>
                                                                <td class="v-top text-right"><span class="text-bold">983</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="circ-num bg-grey">4</div>
                                                                    คุณเพียงใจ หาญพาณิชย์ หญิงเหล็ก...นักพัฒนาที่ดินรุ่นลายครามของไทย
                                                                    <br><span class="colr-minor tg-offset">96 users</span>
                                                                </td>
                                                                <td class="v-top text-right"><span class="text-bold">761</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="circ-num bg-grey">5</div>
                                                                    Evolution of accommodations and facilities in Thailand's National Parks
                                                                    <br><span class="colr-minor tg-offset">77 users</span>
                                                                </td>
                                                                <td class="v-top text-right"><span class="text-bold">530</span></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /tabs content -->

                                    </div>
                                    <!-- /my messages -->
                                </div>
                            </div>
                        </div>
                        <!-- Recent activities -->
                        <div class="col-md-8 float-md-left car-recently">
                           <div class="row hide">
                                <div class="col-lg-6">
                                    <div class="panel panel-flat">
                                        <div class="panel-heading border-bottom">
                                            <h4 class="panel-title">Policy - Top 5</h4>
                                        </div>
                                        <div class="table-responsive">
                                            <!-- text-nowrap -->
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Plan</th>
                                                        <th class="text-right">Budget</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="circ-num bg-ci">1</div>
                                                            Auto Smile Gold
                                                            <br><span class="colr-minor tg-offset">232 users</span>
                                                        </td>
                                                        <td class="v-top text-right"><span class="text-bold">฿ 2,325,000.00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="circ-num bg-ci">2</div>
                                                            Smile 2+ Extra
                                                            <br><span class="colr-minor tg-offset">180 users</span>
                                                        </td>
                                                        <td class="v-top text-right"><span class="text-bold">฿ 1,073,000.00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="circ-num bg-ci">3</div>
                                                            Smile 3+
                                                            <br><span class="colr-minor tg-offset">122 users</span>
                                                        </td>
                                                        <td class="v-top text-right"><span class="text-bold">฿ 856,000.00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="circ-num bg-grey">4</div>
                                                            Smile 3+ Extra
                                                            <br><span class="colr-minor tg-offset">96 users</span>
                                                        </td>
                                                        <td class="v-top text-right"><span class="text-bold">฿ 643,000.00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="circ-num bg-grey">5</div>
                                                            Smile 2+ Flood
                                                            <br><span class="colr-minor tg-offset">77 users</span>
                                                        </td>
                                                        <td class="v-top text-right"><span class="text-bold">฿ 211,000.00</span></td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="panel panel-flat">
                                        <div class="panel-heading border-bottom">
                                            <h4 class="panel-title">Car Model - Top 5</h4>
                                        </div>
                                        <div class="table-responsive">
                                            <!-- text-nowrap -->
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Model</th>
                                                        <th class="text-center">Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="circ-num bg-ci">1</div>
                                                            Civic 1.8ES
                                                            <br><span class="colr-minor tg-offset">Honda</span>
                                                        </td>
                                                        <td class="v-top text-center"><span class="text-bold">36</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="circ-num bg-ci">2</div>
                                                            Vios 1.5 J M/T
                                                            <br><span class="colr-minor tg-offset">Toyota</span>
                                                        </td>
                                                        <td class="v-top text-center"><span class="text-bold">28</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="circ-num bg-ci">3</div>
                                                            Camry 2.0G
                                                            <br><span class="colr-minor tg-offset">Toyota</span>
                                                        </td>
                                                        <td class="v-top text-center"><span class="text-bold">15</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="circ-num bg-grey">4</div>
                                                            D-Max Cab 4
                                                            <br><span class="colr-minor tg-offset">Isuzu</span>
                                                        </td>
                                                        <td class="v-top text-center"><span class="text-bold">9</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="circ-num bg-grey">5</div>
                                                            Avanza 1.5S AT
                                                            <br><span class="colr-minor tg-offset">Toyota</span>
                                                        </td>
                                                        <td class="v-top text-center"><span class="text-bold">8</span></td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-flat">
                                <div class="panel-heading border-bottom">
                                    <h4 class="panel-title">Call Back</h4>
                                    <div class="heading-elements">
                                        <span class="heading-text"><a class="text-ci" href="03_callback_list.php">View all</a></span>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <!-- text-nowrap -->
                                    <table class="table table-togglable">
                                        <thead>
                                            <tr>
                                               <th data-toggle="true" class="text-center" style="width:120px;">Date</th>
                                               <th data-hide="phone">Name</th>
                                               <th>Title</th>
                                               <th class="text-right" data-hide="phone" data-name="Action"><i class="icon-cog7"></i>&nbsp;&nbsp;</th>
                                            </tr>
                                        </thead>
										<tbody>
											<tr class="active border-double"><td class="text-center">Today</td><td colspan="3">&nbsp;</td></tr>
                                            <tr>
                                                <td class="text-center">1<br><span class="colr-minor tg-offset">hour</span></td>
                                                <td>ปัญญา สามไทยสงค์<br><span class="colr-minor">08-1234-5678</span></td>
                                                <td class="v-top">
                                                    <span>[RQ-57341289]</span> Car modification more than 50,000 baht.
                                                </td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="03_callback_detail.php"><i class="icon-eye"></i> View</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-checkmark4"></i> Accept</a></li>
                                                                <li><a href="#"><i class="icon-phone-hang-up"></i> Close</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">1<br><span class="colr-minor tg-offset">hour</span></td>
                                                <td>ปัญญา สามไทยสงค์<br><span class="colr-minor">08-1234-5678</span></td>
                                                <td class="v-top">
                                                    <span>[RQ-57341289]</span> Car modification more than 50,000 baht.
                                                </td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="03_callback_detail.php"><i class="icon-eye"></i> View</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-checkmark4"></i> Accept</a></li>
                                                                <li><a href="#"><i class="icon-phone-hang-up"></i> Close</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr class="active"><td class="text-center">Yesterday</td><td colspan="4">&nbsp;</td></tr>
                                            <tr>
                                                <td class="text-center">1<br><span class="colr-minor tg-offset">hour</span></td>
                                                <td>ปัญญา สามไทยสงค์<br><span class="colr-minor">08-1234-5678</span></td>
                                                <td class="v-top">
                                                    <span>[RQ-57341289]</span> Car modification more than 50,000 baht.
                                                </td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="03_callback_detail.php"><i class="icon-eye"></i> View</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-checkmark4"></i> Accept</a></li>
                                                                <li><a href="#"><i class="icon-phone-hang-up"></i> Close</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">1<br><span class="colr-minor tg-offset">hour</span></td>
                                                <td>ปัญญา สามไทยสงค์<br><span class="colr-minor">08-1234-5678</span></td>
                                                <td class="v-top">
                                                    <span>[RQ-57341289]</span> Car modification more than 50,000 baht.
                                                </td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="03_callback_detail.php"><i class="icon-eye"></i> View</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-checkmark4"></i> Accept</a></li>
                                                                <li><a href="#"><i class="icon-phone-hang-up"></i> Close</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">1<br><span class="colr-minor tg-offset">hour</span></td>
                                                <td>ปัญญา สามไทยสงค์<br><span class="colr-minor">08-1234-5678</span></td>
                                                <td class="v-top">
                                                    <span>[RQ-57341289]</span> Car modification more than 50,000 baht.
                                                </td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="03_callback_detail.php"><i class="icon-eye"></i> View</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-checkmark4"></i> Accept</a></li>
                                                                <li><a href="#"><i class="icon-phone-hang-up"></i> Close</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">1<br><span class="colr-minor tg-offset">hour</span></td>
                                                <td>ปัญญา สามไทยสงค์<br><span class="colr-minor">08-1234-5678</span></td>
                                                <td class="v-top">
                                                    <span>[RQ-57341289]</span> Car modification more than 50,000 baht.
                                                </td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="03_callback_detail.php"><i class="icon-eye"></i> View</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-checkmark4"></i> Accept</a></li>
                                                                <li><a href="#"><i class="icon-phone-hang-up"></i> Close</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                        <!-- /recent activities -->
                        
                    </div>
                    <!-- /data Overall -->
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
