<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage News Category - GHB Journals</title>
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
                            <h4><span class="text-semibold">Manage News Category</span></h4>
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
                                        <a href="04_category_reorder.php" class="btn btn-primary">
                                            <i class="icon-sort-numeric-asc position-left"></i> Publish re-order
                                        </a>
                                        <a id="px-addMore" href="04_category_add.php" class="btn btn-primary">
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
                                                    <label class="control-label text-bold">Status</label>
                                                    <select data-cond="brand" class="select">
                                                        <option disabled>- Status -</option>
                                                        <option value="" selected>All</option>
                                                        <option value="">Enabled</option>
                                                        <option value="">Disabled</option>
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
                                                <th data-toggle="true">Name</th>
                                                <th data-toggle="true">URL Name</th>
                                                <th class="text-center">Total news</th>
                                                <th class="text-center">On top</th>
                                                <th class="text-center" data-hide="tablet,phone">Last modified</th>
                                                <th class="text-center" data-hide="phone">Status</th>
                                                <th class="text-right" data-hide="phone" data-name="Action"><i class="icon-cog7"></i>&nbsp;&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody class="tb-valign-mid">
                                            <tr>
                                                <td class="text-left">
                                                    <label><input type="checkbox" class="styled fxcond-bulk-check" value="-1"></label>
                                                </td>
                                                <td><a href="04_category_detail.php" class="text-ci">NEWS-CT-5</a></td>
                                                <td>
                                                    ข่าวสาร ธอส.
                                                </td>
                                                <td>
                                                    /ghbank
                                                </td>
                                                <td class="text-center">
                                                    <a href="04_news_list.php?cate=1" class="text-ci"><u>118</u></a>
                                                </td>
                                                <td class="text-center">
                                                    <div class="circ-num bg-ci"><i class="text-white icon-checkmark"></i></div>
                                                </td>
                                                <td class="text-center">
                                                    29 Apr 2017<br>
                                                    <span class="colr-minor tg-offset">17:07</span>
                                                </td>
                                                <td class="text-center"><span class="label label-fit label-success">Enabled</span></td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="#"><i class="icon-pushpin"></i> Set to On Top</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-eye"></i> View</a></li>
                                                                <li><a href="#"><i class="icon-checkmark4"></i> Enable</a></li>
                                                                <li><a href="#"><i class="icon-cross2"></i> Disable</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">
                                                    <label><input type="checkbox" class="styled fxcond-bulk-check" value="-1"></label>
                                                </td>
                                                <td><a href="04_category_detail.php" class="text-ci">CNEWS-CT-4</a></td>
                                                <td>
                                                    กิจกรรมเพื่อสังคม
                                                </td>
                                                <td>
                                                    /csr
                                                </td>
                                                <td class="text-center">
                                                    <a href="04_news_list.php?cate=1" class="text-ci"><u>57</u></a>
                                                </td>
                                                <td class="text-center">
                                                    <div class="circ-num bg-ci"><i class="text-white icon-checkmark"></i></div>
                                                </td>
                                                <td class="text-center">
                                                    29 Apr 2017<br>
                                                    <span class="colr-minor tg-offset">17:07</span>
                                                </td>
                                                <td class="text-center"><span class="label label-fit label-success">Enabled</span></td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="#"><i class="icon-pushpin"></i> Set to On Top</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-eye"></i> View</a></li>
                                                                <li><a href="#"><i class="icon-checkmark4"></i> Enable</a></li>
                                                                <li><a href="#"><i class="icon-cross2"></i> Disable</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">
                                                    <label><input type="checkbox" class="styled fxcond-bulk-check" value="-1"></label>
                                                </td>
                                                <td><a href="04_category_detail.php" class="text-ci">CNEWS-CT-3</a></td>
                                                <td>
                                                    ข่าวจัดซื้อจัดจ้าง
                                                </td>
                                                <td>
                                                    /procurement
                                                </td>
                                                <td class="text-center">
                                                    <a href="04_news_list.php?cate=1" class="text-ci"><u>19</u></a>
                                                </td>
                                                <td class="text-center">
                                                    <div class="circ-num bg-ci"><i class="text-white icon-checkmark"></i></div>
                                                </td>


                                                <td class="text-center">
                                                    29 Apr 2017<br>
                                                    <span class="colr-minor tg-offset">17:07</span>
                                                </td>
                                                <td class="text-center"><span class="label label-fit label-success">Enabled</span></td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="#"><i class="icon-pushpin"></i> Set to On Top</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-eye"></i> View</a></li>
                                                                <li><a href="#"><i class="icon-checkmark4"></i> Enable</a></li>
                                                                <li><a href="#"><i class="icon-cross2"></i> Disable</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">
                                                    <label><input type="checkbox" class="styled fxcond-bulk-check" value="-1"></label>
                                                </td>
                                                <td><a href="04_category_detail.php" class="text-ci">CNEWS-CT-2</a></td>
                                                <td>
                                                    ประเมินค่าทรัพย์สิน
                                                </td>
                                                <td>
                                                    /finacial
                                                </td>
                                                <td class="text-center">
                                                    <a href="04_news_list.php?cate=1" class="text-ci"><u>6</u></a>
                                                </td>
                                                <td class="text-center">
                                                    &nbsp;
                                                </td>
                                                <td class="text-center">
                                                    29 Apr 2017<br>
                                                    <span class="colr-minor tg-offset">17:07</span>
                                                </td>
                                                <td class="text-center"><span class="label label-fit label-success">Enabled</span></td>
                                                <td class="text-right">
                                                    <ul class="icons-list">
                                                        <li class="dropdown dropup">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="#"><i class="icon-pushpin"></i> Set to On Top</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><i class="icon-eye"></i> View</a></li>
                                                                <li><a href="#"><i class="icon-checkmark4"></i> Enable</a></li>
                                                                <li><a href="#"><i class="icon-cross2"></i> Disable</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">
                                                    <label><input type="checkbox" class="styled fxcond-bulk-check" value="-1"></label>
                                                </td>
                                                <td><a href="04_category_detail.php" class="text-ci">CNEWS-CT-1</a></td>
                                                <td>
                                                    รับสร้างบ้าน
                                                </td>
                                                <td>
                                                    /build
                                                </td>
                                                <td class="text-center">
                                                    <a href="04_news_list.php?cate=1" class="text-ci"><u>12</u></a>
                                                </td>
                                                <td class="text-center">
                                                    &nbsp;
                                                </td>
                                                <td class="text-center">
                                                    29 Apr 2017<br>
                                                    <span class="colr-minor tg-offset">17:07</span>
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
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="px-tb-footer clearfix">
                                    <div class="dataTables_info" role="status">Showing 1 to 4 of 10 entries</div>
                                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                        <a href="#" class="paginate_button previous disabled" tabindex="0">←</a>
                                        <span>
                                            <a href="#" class="paginate_button current" tabindex="0">1</a>
                                            <a href="#" class="paginate_button " tabindex="0">2</a>
                                        </span>
                                        <a href="#" class="paginate_button next disabled" tabindex="0">→</a>
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
