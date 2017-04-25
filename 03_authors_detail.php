
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Article Detail - GHB Journals</title>
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
                            <h4><a href="#" onclick="window.history.back();"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">Article Details</span></h4>
                        </div>
                    </div>
                </div>
				<!-- /page header -->


				<div class="content">
                    
                    <div class="row">
                        <div class="col-md-12 float-md-left">
                            <div class="panel panel-flat">
                                <div class="panel-heading border-bottom">
                                    <h4><span class="text-semibold">{{ Authors ID }}</span></h4>
                                    <div class="heading-elements">
                                        <a href="#" class="btn btn-default btn-xs heading-btn"><i class="icon-file-eye position-left"></i> Preview</a>
                                        <span>&nbsp;&nbsp;&nbsp;</span>
                                        <a href="03_authors_add.php" class="btn btn-default btn-xs heading-btn"><i class="icon-pencil position-left"></i> Edit</a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <br><br>
                                    <div class="row">
                                        <div class="col-md-3 text-center">
                                            <style>
                                                .img-resp img {
                                                    max-width: 100%;
                                                }
                                            </style>
                                            <div class="img-resp"><p><img src="dat/img-male.jpg" alt=""></p></div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="h-title">Personal Information</div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="h-field">Name</div>
                                                    <p>ศาสตราจารย์กิตติคุณ เดชา บุญค้ำ</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="h-field">Name(EN)</div>
                                                    <p>Prof. Decha Boonkum</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="h-field">Position</div>
                                                    <p>ประธานชมรมธุรกิจอสังหาริมทรัพย์จังหวัดขอนแก่น</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="h-field">Type</div>
                                                    <p>บุคคล</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="h-field">E-mail</div>
                                                    <p>decha.boon@gmail.com</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="h-field">Telephone</div>
                                                    <p>08-1234-5678</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="h-title">Publish Status</div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="h-field">Status</div>
                                            <p><span class="label label-success label-fit">Enabled</span></p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Last modified</div>
                                            <p>9 Feb 2017 at 18:28 by Carl Matthews.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Create date</div>
                                            <p>18 Apr 2016 at 18:24</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">Create by</div>
                                            <p>Tyler Lawrencen.</p>
                                        </div>
                                    </div>
                                    
                                    <br><br><br>
                                    <div class="h-title">Publish Spolight</div>
                                    <fieldset class="content-group">
                                        <div class="row">
                                            <div class="form-group col-md-6 clearfix">
                                                <label class="control-label">Set to spolight</label>
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
                                    </fieldset>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <button type="butmit" class="btn btn-primary">Submit</button>
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

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
</body>
</html>
