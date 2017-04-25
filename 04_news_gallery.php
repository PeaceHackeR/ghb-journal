<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage News Gallery - GHB Journals</title>
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
                            <h4><a href="javascript:window.history.back();"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">Manage Gallery</span></h4>
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
                            <h4 class="panel-title">{{ News ID }}</h4>
                        </div>
                        <div class="panel-body">
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="h-field">Title</div>
                                    <p>ธอส. ออกมาตรการใหม่ด้านสินเชื่อและการประนอมหนี้</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="h-field">Event Date</div>
                                    <p>28 Apr 2017</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="h-field">Number of photos</div>
                                    <p>8</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="h-field">Last modified</div>
                                    <p>29 Apr 2017 at 17:07 by Carl Matthews</p>
                                </div>
                            </div>

                            <fieldset class="content-group">
                                <legend class="text-bold">Upload photo</legend>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <form action="#" class="dropzone" id="dropzone_multiple"></form>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="content-group">
                                <legend class="text-bold">Gallery</legend>
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="thumbnail">
                                            <div class="thumb">
                                                <img src="dat/img-720x480.png" alt="">
                                                <div class="caption-overflow">
                                                    <span>
                                                        <a href="assets/images/placeholder.jpg" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="caption">
                                                <h6 class="no-margin"><a href="#" class="text-default">photo_01.jpg</a> <a href="#" class="text-muted"><i class="icon-bin pull-right"></i></a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="thumbnail">
                                            <div class="thumb">
                                                <img src="dat/img-720x480.png" alt="">
                                                <div class="caption-overflow">
                                                    <span>
                                                    <a href="assets/images/placeholder.jpg" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
                                                </span>
                                                </div>
                                            </div>

                                            <div class="caption">
                                                <h6 class="no-margin"><a href="#" class="text-default">photo_02.jpg</a> <a href="#" class="text-muted"><i class="icon-bin pull-right"></i></a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="thumbnail">
                                            <div class="thumb">
                                                <img src="dat/img-720x480.png" alt="">
                                                <div class="caption-overflow">
                                                    <span>
                                                    <a href="assets/images/placeholder.jpg" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
                                                </span>
                                                </div>
                                            </div>

                                            <div class="caption">
                                                <h6 class="no-margin"><a href="#" class="text-default">photo_03.jpg</a> <a href="#" class="text-muted"><i class="icon-bin pull-right"></i></a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="thumbnail">
                                            <div class="thumb">
                                                <img src="dat/img-720x480.png" alt="">
                                                <div class="caption-overflow">
                                                    <span>
                                                    <a href="assets/images/placeholder.jpg" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
                                                </span>
                                                </div>
                                            </div>

                                            <div class="caption">
                                                <h6 class="no-margin"><a href="#" class="text-default">photo_04.jpg</a> <a href="#" class="text-muted"><i class="icon-bin pull-right"></i></a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="thumbnail">
                                            <div class="thumb">
                                                <img src="dat/img-720x480.png" alt="">
                                                <div class="caption-overflow">
                                                    <span>
                                                    <a href="assets/images/placeholder.jpg" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
                                                </span>
                                                </div>
                                            </div>

                                            <div class="caption">
                                                <h6 class="no-margin"><a href="#" class="text-default">photo_05.jpg</a> <a href="#" class="text-muted"><i class="icon-bin pull-right"></i></a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="thumbnail">
                                            <div class="thumb">
                                                <img src="dat/img-720x480.png" alt="">
                                                <div class="caption-overflow">
                                                    <span>
                                                    <a href="assets/images/placeholder.jpg" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
                                                </span>
                                                </div>
                                            </div>

                                            <div class="caption">
                                                <h6 class="no-margin"><a href="#" class="text-default">photo_06.jpg</a> <a href="#" class="text-muted"><i class="icon-bin pull-right"></i></a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="thumbnail">
                                            <div class="thumb">
                                                <img src="dat/img-720x480.png" alt="">
                                                <div class="caption-overflow">
                                                    <span>
                                                    <a href="assets/images/placeholder.jpg" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
                                                </span>
                                                </div>
                                            </div>

                                            <div class="caption">
                                                <h6 class="no-margin"><a href="#" class="text-default">photo_07.jpg</a> <a href="#" class="text-muted"><i class="icon-bin pull-right"></i></a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="thumbnail">
                                            <div class="thumb">
                                                <img src="dat/img-720x480.png" alt="">
                                                <div class="caption-overflow">
                                                    <span>
                                                    <a href="assets/images/placeholder.jpg" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
                                                </span>
                                                </div>
                                            </div>

                                            <div class="caption">
                                                <h6 class="no-margin"><a href="#" class="text-default">photo_08.jpg</a> <a href="#" class="text-muted"><i class="icon-bin pull-right"></i></a></h6>
                                            </div>
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
