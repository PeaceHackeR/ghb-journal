<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit News Category - GHB Journals</title>
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
	<?php include "ssi/js-form.php"; ?>

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
                            <h4><a href="javascript:window.history.back();"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">Edit Category</span></h4>
                        </div>

                        <div class="heading-elements">
                        </div>
                    </div>
                </div>

                <!-- /page header -->

                <!-- Content area -->
                <div class="content">

                    <!-- Form -->
                    <div class="panel panel-flat">
                        <div class="panel-heading border-bottom">
                            <h4 class="panel-title">Category Detail</h4>
                        </div>
                        <div class="panel-body">
                            <br>
                            <fieldset class="content-group">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="control-label text-semibold">Name</label>
                                        <input type="text" class="form-control" placeholder="- Title -" value="ข่าวสาร ธอส.">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="control-label">URL Name</label>
                                        <div class="input-group">
                                            <input id="fx-urlinput" type="text" class="form-control" placeholder="- URL -" pattern="[\w\d]{2,}">
                                            <span class="input-group-btn">
                                                <button class="btn bg-grey-300" type="button">Check</button>
                                            </span>
                                        </div>
                                        <span class="help-block">Sample&nbsp;&nbsp;http://www.domain.com/news/<span id="fx-urlsample">URL</span></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 clearfix">
                                        <label class="display-block">On top menu</label>
                                        <label class="radio-inline">
                                            <input value="1" type="radio" name="fx-r-02" class="styled" checked> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input value="0" type="radio" name="fx-r-02" class="styled"> No
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="content-group">
                                <legend class="text-bold">Publish setting</legend>
                                <div class="row">
                                    <div class="form-group col-md-6 clearfix">
                                        <label class="display-block">Status</label>
                                        <label class="radio-inline">
                                            <input value="1" type="radio" name="fx-r-01" class="styled" checked> Enable
                                        </label>
                                        <label class="radio-inline">
                                            <input value="0" type="radio" name="fx-r-01" class="styled"> Disable
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <button type="butmit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /form -->

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
