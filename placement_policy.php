<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Shops Management | Shop Registration</title>

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
                <h2>PLACEMENT POLICY</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?=base_url('dashboard')?>">Home</a>
                    </li>
                    <li>
                        <a>add policy</a>
                    </li>
                    <li class="active">
                        <strong>Add A Policy</strong>
                    </li>
                </ol>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1">Updating or adding Policy </a></li>
                            </ul>
                            <div class="tab-content">
                                
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">
                                       <div class="form-group">
                                            <div class="row text-center">
                                                <span class="text-success"><?php echo $this->session->flashdata("msg"); ?></span>
                                            </div>
                                        </div>
 									<?php echo form_open_multipart('Policy'); ?>    
											<div class="col-sm-3"></div>
                                        <fieldset class="form-horizontal">
                                            <div class="form-group"><label class="col-sm-2 control-label"> Update policy </label>
                                                <?php
                                                if($policy){
                                                  foreach($policy as  $value) {
                                                     ?>

                                                             <div class="col-sm-6">

                                                                <input type="hidden" name="id"value="<?=$value->id?>">


                                                                <textarea type="text" name="policy"  class="form-control" autofocus=""  tabindex="1" rows='15' cols='15'><?=$value->policy?></textarea>
                                                             </div>



                                                     <?php
                                                  }

                                                }

                                                ?>
                                            </div>
											
                                            <div class="form-group"><div class="col-sm-2"></div>
                                                <div class="col-sm-6"><input type="submit" class="form-control btn btn-primary" tabindex="10"> </div>
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



