
<?php 
ob_start();
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> T&P Admin | Dashboard</title>

    <link href="<?=base_url()?>Adminassets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?=base_url()?>Adminassets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/css/style.css" rel="stylesheet">

	<!-- ================== BEGIN EXTRA JS ================== -->
	<script type="application/javascript" src="<?= base_url()?>Adminassets/js/sweet.js"></script>
	<!-- ================== END EXTRA JS ================== -->
    
	    <!-- icons -->
	    <link rel="icon" href="<?=base_url()?>User_assets/images/logoes.png"> 
		<!-- icons -->
</head>

<body>
    <div id="wrapper">
    <?php
        include 'layout/header.php';
    ?>
        
            <div class="wrapper wrapper-content">
        <div class="row">
           <?php   $activatedc=$students=$campusd=$placeds=0;
                
                        foreach ($company as $data1) {
                            $activatedc=$activatedc+1;
                        }
                        foreach ($student as $data2) {
                            $students=$students+1;
                        }
                        foreach ($campus as $data3) {
                            $campusd=$campusd+1;
                        }
                        foreach ($placed as $data4) {
                            $placeds=$placeds+1;
                        }
                        ?>    
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Daily Updated</span>
                                <h5>Activated Company</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?=$activatedc?></h1>
                                <small>Total Connected Companies</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">Daily</span>
                                <h5>Students</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?=$students?></h1>
                                <small>Total Students</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">Daily</span>
                                <h5>Campus Drive</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?=$campusd?></h1>
                                <small>Total Students For Campus Drive</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-danger pull-right">By Admin</span>
                                <h5>Placed Students</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?=$placeds?></h1>
                                <small>Total Placed Students</small>
                            </div>
                        </div>
                    </div>
                
        </div>
        <?php
        include 'layout/footer.php';
        ?>
        </div>
        
    </div>
		 <?php
        if($this->session->flashdata('item')){
        $item=$this->session->flashdata('item');
        if($item == "no"){ ?>
        
          <script>swal("opps something went wrong!!!", "Please try again...", "error");</script>
        <?php }
		elseif($item=='yes'){ ?>
			<script>swal("Successfully Logged In !!!", "Thank You !", "success");</script>
		<?php
			}
		}
        ?>
    <!-- Mainly scripts -->
    <script src="<?=base_url()?>Adminassets/js/jquery-3.1.1.min.js"></script>
    <script src="<?=base_url()?>Adminassets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>Adminassets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?=base_url()?>Adminassets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="<?=base_url()?>Adminassets/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?=base_url()?>Adminassets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?=base_url()?>Adminassets/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?=base_url()?>Adminassets/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?=base_url()?>Adminassets/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="<?=base_url()?>Adminassets/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="<?=base_url()?>Adminassets/js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="<?=base_url()?>Adminassets/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?=base_url()?>Adminassets/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?=base_url()?>Adminassets/js/inspinia.js"></script>
    <script src="<?=base_url()?>Adminassets/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?=base_url()?>Adminassets/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="<?=base_url()?>Adminassets/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?=base_url()?>Adminassets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="<?=base_url()?>Adminassets/js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="<?=base_url()?>Adminassets/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?=base_url()?>Adminassets/js/demo/sparkline-demo.js"></script>

    
</body>
</html>
