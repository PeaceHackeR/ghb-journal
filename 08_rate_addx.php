<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add New Related Link - GHB Journals</title>
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
    
    <!-- OPTION JS -->
    <!--	<script type="text/javascript" src="assets/js/plugins/tables/handsontable/handsontable.min.js"></script>-->

    <script type="text/javascript" src="assets/js/plugins/tables/handsontable/handsontable.full.min.js"></script>

    <!--  <script src="https://docs.handsontable.com/pro/1.13.0/bower_components/handsontable-pro/dist/handsontable.full.min.js"></script>-->
    
    <!-- Core JS files -->
	<?php include "ssi/js-form.php"; ?>
    
    <style>
        textarea#HandsontableCopyPaste {
            position: fixed !important;
            bottom: 100% !important;
            right: 100% !important;
            outline: 0 none !important;
        }
        
        .ht_master tr td {
            text-align: center;
        }
        
        .ht_master tr td:nth-child(3) {
            text-align: left;
        }

    </style>
</head>


<body>

    <!-- Main navbar -->
    <div class="navbar navbar-default header-highlight">

        <div class="navbar-header">
            <a class="navbar-brand" href="00_actions_table.php"><img src="assets/images/logo_light.svg" alt=""></a>
            <ul class="nav navbar-nav visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav">
                <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <span>Administrator</span>
                            <i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="00_users_detail.php"><i class="icon-user-plus"></i> My profile</a></li>
                            <li class="divider"></li>
                            <li><a href="00_login.php"><i class="icon-switch2"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <div class="sidebar sidebar-main">
                <div class="sidebar-content">

                    <!-- Main navigation -->
                    <div class="sidebar-category sidebar-category-visible">
                        <div class="category-content no-padding">
                            <ul class="navigation navigation-main navigation-accordion">
                                <!-- Contact Us -->
                                <li>
                                    <a href="00_dashboard.php">
                                        <i class="icon-grid5"></i> <span> Dashboard</span>
                                    </a>
                                </li>
                                <!-- 01 Website Content -->
                                <li>
                                    <a href="#">
                                        <i class="icon-screen3"></i> <span> Website Content</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="01_highlight_list.php">Highlight</a>
                                        </li>
                                        <li>
                                            <a href="#">About Us</a>
                                            <ul>
                                                <li>
                                                    <a href="01_history_list.php">History</a>
                                                </li>
                                                <li>
                                                    <a href="01_providers_list.php">Providers</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- 03 Authors -->
                                <li>
                                    <a href="03_authors_list.php">
                                        <i class="icon-user"></i> <span> Authors</span>
                                    </a>
                                </li>
                                <!-- 02 Journals -->
                                <li>
                                    <a href="#">
                                        <i class="icon-reading"></i> <span> Journals</span>
                                    </a>
                                    <ul>
                                        <!--
                    <li>
                        <a href="#">Overview</a>
                    </li>
-->
                                        <li>
                                            <a href="02_journals_list.php">Post</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- 03 Articles -->
                                <li>
                                    <a href="#">
                                        <i class="icon-quill4"></i> <span> Articles</span>
                                    </a>
                                    <ul>
                                        <!--
                    <li>
                        <a href="#">Overview</a>
                    </li>
-->
                                        <li>
                                            <a href="03_articles_list.php">Post</a>
                                        </li>
                                        <li>
                                            <a href="03_category_list.php">Category Management</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- 04 News -->
                                <li>
                                    <a href="#">
                                        <i class="icon-newspaper"></i> <span> News</span>
                                    </a>
                                    <ul>
                                        <!--
                    <li>
                        <a href="#">Overview</a>
                    </li>
-->
                                        <li>
                                            <a href="04_news_list.php">Post</a>
                                        </li>
                                        <li>
                                            <a href="04_category_list.php">Category Management</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- 05 Tag Management -->
                                <li>
                                    <a href="#">
                                        <i class="icon-price-tags"></i> <span> Tags</span>
                                    </a>
                                    <ul>
                                        <!--
                    <li>
                        <a href="#">Overview</a>
                    </li>
-->
                                        <li>
                                            <a href="05_tag_list.php">All</a>
                                        </li>
                                        <li>
                                            <a href="#">Re-order Highlight Tags</a>
                                            <ul>
                                                <li>
                                                    <a href="05_tag-articles_reorder.php">Articles</a>
                                                </li>
                                                <li>
                                                    <a href="#">News</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Contact Us -->
                                <li>
                                    <a href="06_contact_list.php">
                                        <i class="icon-bubble-dots4"></i> <span> Contact Us<span class="label bg-success">12 NEW</span></span>
                                    </a>
                                </li>
                                <!-- Related Link -->
                                <li>
                                    <a href="07_link_list.php">
                                        <i class="icon-link2"></i> <span> Related Link</span>
                                    </a>
                                </li>
                                <!-- Related Link -->
                                <li>
                                    <a href="08_rate_list.php">
                                        <i class="icon-file-spreadsheet"></i> <span> Interest Page</span>
                                    </a>
                                </li>
                                <!-- System -->
                                <li>
                                    <a href="#"><i class="icon-gear"></i> <span> System</span></a>
                                    <ul>
                                        <li class="disabled">
                                            <a href="#">File Management</a>
                                        </li>
                                        <li>
                                            <a href="11_users_list.php">Users</a>
                                        </li>
                                        <li>
                                            <a href="11_group_list.php">Groups</a>
                                        </li>
                                        <li>
                                            <a href="#">Log</a>
                                            <ul>
                                                <li>
                                                    <a href="11_log-users_list.php">Users</a>
                                                </li>
                                                <li>
                                                    <a href="11_log-activities_list.php">Activities</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <script>
                        function getKeyX(str) {
                            var _str = String(str).split("_");
                            return _str[0] + "_" + _str[1];
                        }
                        var _urlName = /[^\/]+\.php/ig.exec(location.href),
                            _key = getKeyX(_urlName);
                        document.querySelectorAll(".navigation-main a").forEach(function(el, i) {
                            if (getKeyX(el.getAttribute("href")) == _key) {
                                el.parentElement.className += "active";
                                return false;
                            }
                        });

                    </script>
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
                            <h4><a href="javascript:window.history.back();"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">Add New Interest Rate</span></h4>
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
                            <h4 class="panel-title">Interest Rate Detail</h4>
                        </div>
                        <div class="panel-body">
                            <br>
                            <fieldset class="content-group">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="control-label text-semibold">Title</label>
                                        <input type="text" class="form-control" placeholder="- Title -">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="hot-container">
                                            <div id="hot_headers"></div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    $(function() {
                                        var rate_data = [
                                            ['h1', 'กระแสรายวัน', 0.375, 0.375, 0.375, 0, 0.375, 0, "-", "-", 0.375],
                                            ['h2', 'ออมทรัพย์', null, null, null, null, null, null, null, null, null],
                                            ['sub', '- ต่ำกว่า 1 แสนบาท', 0.750, 0.750, 0.750, 0, 0.750, 0.750, 0.25, 0.50, 0.375],
                                            ['sub', '- ตั้งแต่ 1 แสนบาทขึ้นไป', 0.900, 0.9, 0.900, 0.750, 0, 1.00, 1.00, 0.375, 0.375, 1.00],
                                            ['h2', 'ธอส.รักการออม', 1, "---", "---", "---", "---", "---", "---", "---", "---", "---"],
                                            ['h1', 'ออมทรัพย์พิเศษ', 1, 1, 1, 0, 1, 1, 0.375, 0.375, 1],
                                            ['h2', 'ซุปเปอร์ออมทรัพย์พิเศษ (10,000 บาทขึ้นไป)', 1.500, "---", "---", "---", "---", "---", "---", "---", "---", "---"],
                                            ['h2', 'อัตราดอกเบี้ยเงินฝากสำหรับการเปิดสาขาใหม่และ/หรือยกระดับสาขาในปี 2560', null, "---", "---", "---", "---", "---", "---", "---", "---", "---"],
                                            ['sub', 'บวกอัตราดอกเบี้ยพิเศษเป็นระยะเวลา 6 เดือน หลังจากนั้นใช้อัตราดอกเบี้ยซุปเปอร์ออมทรัพย์พิเศษ ตามประกาศปกติของธนาคาร ณ. ขณะนั้น', "อัตราดอกเบี้ยเท่ากับอัตราดอกเบี้ยเงินฝากซุปเปอร์ออมทรัพย์พิเศษที่ประกาศธนาคาร ณ.ขณะนั้น บวกเพิ่มร้อยละ 0.25", "---", "---", "---", "---", "---", "---", "---", "---", "---"]
                                        ];

                                        // Define element
                                        var hot_headers = document.getElementById('hot_headers');

                                        // Initialize with options
                                        var hot_headers_init = new Handsontable(hot_headers, {
                                            data: rate_data,
                                            rowHeaders: true,
                                            columns: [{
                                                    type: 'dropdown',
                                                    source: ['h1', 'h2', 'sub', 'row', 'text']
                                                }, {},
                                                {
                                                    type: 'numeric',
                                                    format: '0,0.000',
                                                }, {
                                                    type: 'numeric',
                                                    format: '0,0.000',
                                                }, {
                                                    type: 'numeric',
                                                    format: '0,0.000',
                                                }, {
                                                    type: 'numeric',
                                                    format: '0,0.000',
                                                }, {
                                                    type: 'numeric',
                                                    format: '0,0.000',
                                                }, {
                                                    type: 'numeric',
                                                    format: '0,0.000',
                                                }, {
                                                    type: 'numeric',
                                                    format: '0,0.000',
                                                }, {
                                                    type: 'numeric',
                                                    format: '0,0.000',
                                                }, {
                                                    type: 'numeric',
                                                    format: '0,0.000',
                                                }
                                            ],
                                            colHeaders: [
                                                'ชนิดข้อมูล',
                                                'ประเภทเงินฝาก',
                                                'กลุ่มที่ 1<br>บุคคล คณะบุคคล<br>ห้างหุ้นส่วนสามัญ<br>กลุ่ม 9<br>บุคคลที่ถิ่นฐาน<br>อยู่นอกประเทศ',
                                                'กลุ่มที่ 2<br>สถาบันที่ไม่<br>แสวงหาผลกำไร',
                                                'กลุ่มที่ 3<br>นิติบุคคล',
                                                'กลุ่มที่ 4<br>สถาบันการเงิน<br>กลุ่มที่ 10<br>ธนาคารและ<br>สถาบันการเงินอื่นๆ<br>(นอกประเทศ)',
                                                'กลุ่มที่ 5<br>บริษัทประกันภัย<br>บริษัทประกันชีวิต',
                                                'กลุ่มที่ 6<br>กองทุน',
                                                'กลุ่มที่ 7<br>ส่วนราขการ',
                                                'กลุ่มที่ 8<br>รัฐวิสาหกิจ<br>กลต.',
                                                'กลุ่มที่ 11<br>นิติบุคคลที่มี<br>ถิ่นฐาน<br>นอกประเทศ'
                                            ],
                                            colWidths: [2, 8, 2, 2, 2, 2, 2, 2, 2, 2, 2],
                                            manualColumnMove: false,
                                            manualRowMove: true,
                                            stretchH: 'all'
                                        });
                                    });

                                </script>
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
                    <div class="footer text-muted">
                        &copy; Copyright 2017. <a href="http://www.ghbank.co.th/th/index.php" target="_blank">GHB</a> by <a href="www.icweb.co.th/" target="_blank">IC Web Co., Ltd.</a>
                    </div>

                    <!-- ACTION MODAL -->
                    <div id="action-Success" class="modal fade" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h6 class="modal-title">Message</h6>
                                </div>

                                <div class="modal-body text-center">
                                    <h4 class="text-semibold"><span class="text-success">Success.</span></h4>
                                    <p>The data was submitted successfully.</p>
                                </div>

                                <div class="modal-footer text-center">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="action-Fail" class="modal fade" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                    <h6 class="modal-title">Message</h6>
                                </div>

                                <div class="modal-body text-center">
                                    <h4 class="text-semibold text-danger">Submit Error !!</h4>
                                    <p>Please try again.</p>
                                </div>

                                <div class="modal-footer text-center">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="action-Delete" class="modal fade" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                    <h6 class="modal-title">Message</h6>
                                </div>

                                <div class="modal-body text-center">
                                    <h4 class="text-semibold text-danger">Delete ?</h4>
                                    <p>Are you sure you want to permanently delete these files?</p>
                                </div>

                                <div class="modal-footer text-center">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                                    <button type="button" class="btn btn-link" data-dismiss="modal">Cancle</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
