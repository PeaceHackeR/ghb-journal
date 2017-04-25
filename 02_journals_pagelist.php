<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Page List - GHB Journals</title>
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
	<!-- /theme JS files -->

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
                            <h4><a href="javascript:window.history.back();"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">Edit Page List</span></h4>
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
                            <h4 class="panel-title">{{ Journals ID }}</h4>
                        </div>
                        <div class="panel-body">
                            <br>
                            <fieldset class="content-group">
                                <legend class="text-bold">Page List</legend>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Upload List Zip</label>
                                        <input type="file" class="file-input-custom" accept=".zip" data-show-upload="false">
                                        <span class="help-block">Compress all pdf (eg. 1.pdf, 2.pdf, ... ) page to single zipped file.</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="control-label">Page List</label>
<textarea id="input-list" rows="10"  class="form-control" placeholder="" style="resize: vertical;">
>> Topic **
1 || Page title **
2 || Page title **
3 || Page title **
>> Topic **
4 || Page title **
5 || Page title **
</textarea>
                                        <span class="help-block">
                                            <u>Topic</u>&nbsp;&nbsp;&nbsp;>> Topic **<br>
                                            <u>Page</u>&nbsp;&nbsp;&nbsp;2 || Page title **
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="form-group col-md-12">
                                    <button type="butmit" class="btn btn-primary" data-toggle="modal" data-target="#action-Pagelist">Preview Page List</button>
                                </div>
                            </div>
                            </fieldset>
                            <fieldset class="content-group">
                                <legend class="text-bold">Upload PDF</legend>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label">PDF</label>
                                        <input type="file" class="file-input-custom" accept=".pdf" data-show-upload="false">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="content-group">
                                <legend class="text-bold">Ebook</legend>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="control-label">Ebook url path <span class="txt-colrMinor">(optional)</span></label>
                                        <input type="text" class="form-control" placeholder="- URL -">
                                    </div>
                                </div>
                            </fieldset>
                            <br><br><br>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <button type="butmit" class="btn btn-primary">Cancle</button>&nbsp;&nbsp;
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
    
    <!-- ACTION MODAL -->
    <div id="action-Pagelist" class="modal fade" data-backdrop="static" data-keyboard="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h6 class="modal-title">Page List Preview</h6>
                </div>

                <div class="modal-body">
                    <style>
                        .table {
                            width: initial;
                            font-family: 'maledpan-bold', Helvetica, Arial, sans-serif;
                        } 
                        .table .txt-head { 
                            font-size: 24px;
                            color: #333;
                        }
                        .table .txt-head-title { color: #ff850d; }
                        .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td{
                            border: none;
                            font-size: 16px;
                            text-align: left;
                            padding: 5px 15px 5px 0;
                        }
                        @media (min-width: 769px) {
                            .modal-dialog {
                                width: 80vw;
                                max-width: 570px;
                            }
                        }
                    </style>
                    <fieldset class="content-group">
                                <div id="preview-list">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2" align="left" class="txt-head">สารบัญ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td class="txt-head-title">Topic</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td><a href="#">Page title</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><a href="#">Page title</a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><a href="#">Page title</a></td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td class="txt-head-title">Topic</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><a href="#">Page title</a></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td><a href="#">Page title</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                    </fieldset>
                </div>

               <div class="modal-footer text-center">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
