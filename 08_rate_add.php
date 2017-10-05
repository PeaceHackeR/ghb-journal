<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add News Interest Rate - GHB</title>
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
    	<script type="text/javascript" src="assets/js/plugins/tables/handsontable/handsontable.min.js"></script>

<!--    <script type="text/javascript" src="assets/js/plugins/tables/handsontable/handsontable.full.min.js"></script>-->

<!--      <script src="https://docs.handsontable.com/pro/1.13.0/bower_components/handsontable-pro/dist/handsontable.full.min.js"></script>-->

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
                            <h4><a href="javascript:window.history.back();"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">Add New Related Link</span></h4>
                        </div>

                        <div class="heading-elements">
                        </div>
                    </div>
                </div>

                <!-- /page header -->

                <!-- Content area -->
                <form id="dataForm" class="px-formEdit" action="outputdata.php" method="post" target="_blank">
                <div class="content">

                    <!-- Form -->
                    <div class="panel panel-flat">
                        <div class="panel-heading border-bottom">
                            <h4 class="panel-title">Related Link Details</h4>
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
                                    <div class="form-group col-md-12">
                                        <div class="hot-container">
                                            <input type="hidden" name="header[]" value='[1]'>
                                            <input id="sendForm" type="hidden" name="sheetdata" value="">
                                            <div id="hot_headers"></div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <button type="button" class="btn btn-default"><i class="icon-pagebreak position-left"></i> Insert row</button>
                                    </div>
                                </div>
                                <script>
                                    $(function() {
                                        var rate_data = [
                                            ['h1', 'กระแสรายวัน', 0.375, 0.375, 0.375, 0, 0.375, 0, "-", "-", 0.375],
                                            ['h1', 'ออมทรัพย์', null, null, null, null, null, null, null, null, null],
                                            ['sub', '- ต่ำกว่า 1 แสนบาท', 0.750, 0.750, 0.750, 0, 0.750, 0.750, 0.25, 0.50, 0.375],
                                            ['sub', '- ตั้งแต่ 1 แสนบาทขึ้นไป', 0.900, 0.9, 0.900, 0.750, 0, 1.00, 1.00, 0.375, 0.375, 1.00],
                                            ['h2', 'ธอส.รักการออม', 1, "---", "---", "---", "---", "---", "---", "---", "---", "---"],
                                            ['h1', 'ออมทรัพย์พิเศษ', 1, 1, 1, 0, 1, 1, 0.375, 0.375, 1],
                                            ['h2', 'ซุปเปอร์ออมทรัพย์พิเศษ (10,000 บาทขึ้นไป)', 1.500, "---", "---", "---", "---", "---", "---", "---", "---", "---"],
                                            ['h2', 'อัตราดอกเบี้ยเงินฝากสำหรับการเปิดสาขาใหม่และ/หรือยกระดับสาขาในปี 2560', null, "---", "---", "---", "---", "---", "---", "---", "---", "---"],
                                            ['sub', 'บวกอัตราดอกเบี้ยพิเศษเป็นระยะเวลา 6 เดือน หลังจากนั้นใช้อัตราดอกเบี้ยซุปเปอร์ออมทรัพย์พิเศษ ตามประกาศปกติของธนาคาร ณ. ขณะนั้น', "อัตราดอกเบี้ยเท่ากับอัตราดอกเบี้ยเงินฝากซุปเปอร์ออมทรัพย์พิเศษที่ประกาศธนาคาร ณ.ขณะนั้น บวกเพิ่มร้อยละ 0.25", "---", "---", "---", "---", "---", "---", "---", "---", "---"],
                                            ['row','(กรณีอัตราดอกเบี้ยเงินฝากออมทรัพย์ที่ได้รับรวมทั้งปีไม่เกิน 20,000 บาท ได้รับการยกเว้นภาษีดอกเบี้ยเงินฝาก)<<หมายเหตุ อัตราดอกเบี้ยอาจมีการเปลี่ยนแปลงได้ตามประกาศอัตราดอกเบี้ยเงินฝากของธนาคาร ยกเว้นการรับเงินฝากสำหรับคณะบุคคลและห้างหุ้นส่วนสามัญ>>',"---", "---", "---", "---", "---", "---", "---", "---", "---"]
                                        ];

                                        // Define element
                                        var hot_headers = document.getElementById('hot_headers');

                                        // Initialize with options
                                        var hot_headers_init = new Handsontable(hot_headers, {
                                            data: rate_data,
                                            contextMenu: {
                                                callback:function(key,opt){

                                                },
                                                items: {
                                                    "row_above":{},
                                                    "row_below":{},
                                                    "remove_row":{
                                                        callback: function(key,opt){
                                                            console.log(opt)
                                                            var _st = opt.start.row,
                                                                _count = opt.end.row-_st+1,
                                                                cc = confirm("Are you sure to delete this "+_count+" row(s)?");
                                                            if(cc){
                                                                hot_headers_init.alter('remove_row', _st, _count);
                                                            }
                                                        }
                                                    },
                                                    "make_read_only":{},
                                                    "getData":{
                                                        name:"getData",
                                                        callback: function(key,opt){
                                                            var _dat = JSON.stringify(hot_headers_init.getData());
                                                            $("#sendForm")[0].value = _dat;
                                                        }
                                                    }
                                                }
                                            },
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
                                                'สไตล์ข้อมูล',
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
                                            stretchH: 'all',
                                            afterChange: function(chg,src){
                                                console.log('action --> '+src);
                                                console.log('change : ')
                                                console.log(chg);
                                            }
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
                                            <input value="1" type="radio" name="status" class="styled" value="1" checked> Enable
                                        </label>
                                        <label class="radio-inline">
                                            <input value="0" type="radio" name="status" value="0" class="styled"> Disable
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
                </form>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>

</html>
