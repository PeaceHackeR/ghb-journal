<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Group Form - GHB Journals</title>
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
                            <h4><a href="#" onclick="window.history.back();"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">Add Group</span></h4>
                        </div>
                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">

                    <div class="panel panel-flat">
                        <div class="panel-heading border-bottom">
                            <h4 class="panel-title">Group Setting</h4>
                        </div>
                        <div class="panel-body">
                            <br>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">Group Name</label>
                                    <input type="text" class="form-control" placeholder="- Name -">
                                </div>
                            </div>
                            <br>
                            <style>
                                .px-iconicbox,
                                .px-iconicbox-sub {
                                    display: inline-block;
                                    width: 20px;
                                    margin-right: 8px;
                                }

                                .px-iconicbox-sub {
                                    margin-right: 10px;
                                }

                                tr.row-head {
                                    background-color: #f3f3f3;
                                    font-weight: bold;
                                }

                                .table>tbody>tr>td {
                                    border: none;
                                    border-top: 1px solid #e6e6e6;
                                }

                                .table-bordered tr:first-child>td {
                                    border-top-color: #e6e6e6;
                                }

                            </style>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="h-title no-border">Permission</div>
                                    <div class="table-responsive">
                                        <form id="ttx">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr class="row-head">
                                                    <td><span class="px-iconicbox"><i class="icon-grid5"></i></span>Dashboard</td>
                                                    <td class="text-center">All</td>
                                                    <td class="text-center">Allow Access</td>
                                                    <td class="text-center">Add/Import</td>
                                                    <td class="text-center">Edit</td>
                                                    <td class="text-center">Delete</td>
                                                    <td class="text-center">Export</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Dashboard</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll" value="17" name="dash">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled" value="16" name="dash">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled" value="1" name="dash">
                                                    </td>
                                                </tr>
                                                <tr class="row-head">
                                                    <td><span class="px-iconicbox"><i class="icon-screen3"></i></span>Website Content</td>
                                                    <td class="text-center">All</td>
                                                    <td class="text-center">Allow Access</td>
                                                    <td class="text-center">Add/Import</td>
                                                    <td class="text-center">Edit</td>
                                                    <td class="text-center">Delete</td>
                                                    <td class="text-center">Export</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Highlight</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll" name="da" value="1">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>About Us - History</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>About Us - Providers</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Related Link</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr class="row-head">
                                                    <td><span class="px-iconicbox"><i class="icon-reading"></i></span>Journals</td>
                                                    <td class="text-center">All</td>
                                                    <td class="text-center">Allow Access</td>
                                                    <td class="text-center">Add/Import</td>
                                                    <td class="text-center">Edit</td>
                                                    <td class="text-center">Delete</td>
                                                    <td class="text-center">Export</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Overview</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Related Link</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr class="row-head">
                                                    <td><span class="px-iconicbox"><i class="icon-quill4"></i></span>Articles</td>
                                                    <td class="text-center">All</td>
                                                    <td class="text-center">Allow Access</td>
                                                    <td class="text-center">Add/Import</td>
                                                    <td class="text-center">Edit</td>
                                                    <td class="text-center">Delete</td>
                                                    <td class="text-center">Export</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Overview</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Post</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Authors</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Category Management</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr class="row-head">
                                                    <td><span class="px-iconicbox"><i class="icon-newspaper"></i></span>News</td>
                                                    <td class="text-center">All</td>
                                                    <td class="text-center">Allow Access</td>
                                                    <td class="text-center">Add/Import</td>
                                                    <td class="text-center">Edit</td>
                                                    <td class="text-center">Delete</td>
                                                    <td class="text-center">Export</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Overview</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Post</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Category Management</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr class="row-head">
                                                    <td><span class="px-iconicbox"><i class="icon-price-tags"></i></span>Tags</td>
                                                    <td class="text-center">All</td>
                                                    <td class="text-center">Allow Access</td>
                                                    <td class="text-center">Add/Import</td>
                                                    <td class="text-center">Edit</td>
                                                    <td class="text-center">Delete</td>
                                                    <td class="text-center">Export</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Overview</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>All</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>By Section - Articles</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>By Section - News</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr class="row-head">
                                                    <td><span class="px-iconicbox"><i class="icon-bubble-dots4"></i></span>Contact Us</td>
                                                    <td class="text-center">All</td>
                                                    <td class="text-center">Allow Access</td>
                                                    <td class="text-center">Add/Import</td>
                                                    <td class="text-center">Edit</td>
                                                    <td class="text-center">Delete</td>
                                                    <td class="text-center">Export</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Contact Us</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                </tr>
                                                <tr class="row-head">
                                                    <td><span class="px-iconicbox"><i class="icon-gear"></i></span>System</td>
                                                    <td class="text-center">All</td>
                                                    <td class="text-center">Allow Access</td>
                                                    <td class="text-center">Add/Import</td>
                                                    <td class="text-center">Edit</td>
                                                    <td class="text-center">Delete</td>
                                                    <td class="text-center">Export</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Users</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Groups</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Log - Users</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="px-iconicbox-sub">&nbsp;</span>Log - Activities</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled px-checkAll">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">&nbsp;</td>
                                                    <td class="text-center">
                                                        <input type="checkbox" class="styled">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <br><br>
                                <div class="form-group col-md-12">
                                    <button type="butmit" class="btn btn-primary">Submit</button>
                                    <button type="butmit" class="btn btn-primary" onclick="window.history.back();">Cancle</button>
                                </div>
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
