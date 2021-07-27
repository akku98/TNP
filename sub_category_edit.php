<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin | Sub-Category Management</title>

    <link href="<?=base_url()?>Adminassets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?=base_url()?>Adminassets/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">

    <link href="<?=base_url()?>Adminassets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    
    <link href="<?=base_url()?>Adminassets/css/plugins/dropzone/basic.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/css/plugins/dropzone/dropzone.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/css/plugins/codemirror/codemirror.css" rel="stylesheet">
    

    <link href="<?=base_url()?>Adminassets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/css/style.css" rel="stylesheet">



</head>

<body>

<div id="wrapper">

    <?php
        include 'layout/header.php';
    ?>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Category Management</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?=base_url('dashboard')?>">Home</a>
                    </li>
                    <li>
                        <a>Sub-Category Management</a>
                    </li>
                    <li class="active">
                        <strong>Edit Sub-Category Detail</strong>
                    </li>
                </ol><br>
                
            </div>
        </div>

            <div class="wrapper wrapper-content animated fadeInRight ecommerce">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1"> Editing A SUb-Category Detail</a></li>
                            </ul>
                            <div class="tab-content">
                                
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="row text-center">
                                                <span class="text-success"><?php echo $this->session->flashdata("msg"); ?></span>
                                            </div>
                                        </div>
 
                                    <?php echo form_open_multipart('main-category-data-upload'); ?>    
                                        <fieldset class="form-horizontal">
                                            <div class="form-group"><label class="col-sm-2 control-label">Main Category Name *</label>
                                                <div class="col-sm-7"><input type="text" name="name" class="form-control" required autofocus="" placeholder="Enter Here A Main Category Name" tabindex="1"></div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label"> Pick A Main Category Photo *</label>
                                                <div class="col-sm-10">
                                                    <div class="fileinput fileinput-new input-group col-sm-8"  data-provides="fileinput">
                                                        <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                        <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span>
                                                            <span class="fileinput-exists">Change</span><input tabindex="2" type="file" required="" name="file_name"></span>
                                                        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><div class="col-sm-3 control-label"></div>
                                                <div class="col-sm-4"><button class="form-control btn btn-success btn-rounded" tabindex="3"><strong>Add Main Category</strong></button> </div>
                                            </div>
                                    
                                        </fieldset>
                                    <?php form_close(); ?>
                                    </div>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        include 'layout/footer.php';
        ?>
</div>
    



<!-- Mainly scripts -->
<script src="<?=base_url()?>Adminassets/js/jquery-3.1.1.min.js"></script>
<script src="<?=base_url()?>Adminassets/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>Adminassets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?=base_url()?>Adminassets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?=base_url()?>Adminassets/js/inspinia.js"></script>
<script src="<?=base_url()?>Adminassets/js/plugins/pace/pace.min.js"></script>

<!-- SUMMERNOTE -->
<script src="<?=base_url()?>Adminassets/js/plugins/summernote/summernote.min.js"></script>
<!-- Jasny -->
    <script src="<?=base_url()?>Adminassets/js/plugins/jasny/jasny-bootstrap.min.js"></script>

    <!-- DROPZONE -->
    <script src="<?=base_url()?>Adminassets/js/plugins/dropzone/dropzone.js"></script>

    <!-- CodeMirror -->
    <script src="<?=base_url()?>Adminassets/js/plugins/codemirror/codemirror.js"></script>
    <script src="<?=base_url()?>Adminassets/js/plugins/codemirror/mode/xml/xml.js"></script>



<!-- Data picker -->
<script src="<?=base_url()?>Adminassets/js/plugins/datapicker/bootstrap-datepicker.js"></script>

<script>
    $(document).ready(function(){

        $('.summernote').summernote();

        $('.input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });

    });
</script>

</body>

</html>

