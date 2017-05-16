<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Authors Spotlight - GHB Journals</title>
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
    <?php include "ssi/js-list.php"; ?>

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
                            <h4><a href="javascript:window.history.back();"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">Manage Recommended Article</span></h4>
                        </div>

                        <div class="heading-elements">
                        </div>
                    </div>
                </div>
                <!-- /page header -->

                <!-- Content area -->
                <div class="content">


                    <div class="row">
                        <!-- Users Table -->
                        <div class="col-md-12">

                            <div class="panel panel-flat">

                                <div class="">
                                    <!-- text-nowrap -->
                                    <table class="table table-togglable px-tb-flat px-tb-sortable">
                                        <thead class="px-tb-headpad">
                                            <tr>
                                                <th class="text-center">Order</th>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Image</th>
                                                <th data-toggle="true">Name</th>
                                                <th class="text-center">Drag to re-order</th>
                                            </tr>
                                        </thead>
                                        <tbody class="tb-valign-mid">
                                            <tr>
                                                <td class="text-center px-tb-order" data-id="a1">1</td>
                                                <td class="text-center"><a href="03_authors_detail.php" class="text-ci">AUTH-5</a></td>
                                                <td class="px-imgfill text-center">
                                                    <div class="px-tb-image">
                                                        <a href="dat/img-ghbank.jpg" data-popup="lightbox" class="box-imgCirc"><img src="dat/img-ghbank.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="03_authors_detail.php" class="text-ci">ธนาคารอาคารสงเคราะห์</a><br>
                                                    <span class="colr-minor tg-offset">G H BANK</span>
                                                </td>
                                                <td class="text-center"><i class="icon-menu8"></i></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center px-tb-order" data-id="a2">2</td>
                                                <td class="text-center"><a href="03_authors_detail.php" class="text-ci">AUTH-4</a></td>
                                                <td class="px-imgfill text-center">
                                                    <div class="px-tb-image">
                                                        <a href="dat/img-male.jpg" data-popup="lightbox" class="box-imgCirc"><img src="dat/img-male.jpg"></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="03_authors_detail.php" class="text-ci">พัลลภ กฤตยานวัช</a><br>
                                                    <span class="colr-minor tg-offset">Mr.Panlop Krittayawatcha</span>
                                                </td>
                                                <td class="text-center"><i class="icon-menu8"></i></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="px-tb-footer clearfix">
                                    <input id="fx-ordering" type="hidden" value="" name="order">
                                    <div class="dataTables_info" role="status">Showing 2 entries</div>
                                    <div class="dataTables_paginate">
                                        <button type="butmit" class="btn btn-primary">Submit</button>
                                        <button type="butmit" class="btn btn-primary" onclick="window.history.back();">Cancle</button>
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
