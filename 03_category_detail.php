<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News Cagegory Detail - GHB Journals</title>
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
                            <h4><a href="#" onclick="window.history.back();"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">Category Details</span></h4>
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
                                    <h4><span class="text-semibold">{{ Category ID }}</span></h4>
                                    <div class="heading-elements">
                                        <a href="03_category_edit.php" class="btn btn-default btn-xs heading-btn"><i class="icon-pencil position-left"></i> Edit</a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <br><br>
                                    <div class="h-title">Details</div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="h-field">Name</div>
                                            <p>ธนาคารอาคารสงเคราะห์</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">URL Name</div>
                                            <p>ghbank</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">On top</div>
                                            <p>Yes</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="h-field">No. of News</div>
                                            <p><a href="04_news_list.php?cate=1" class="text-ci">118</a></p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="h-title">Publish setting</div>
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
