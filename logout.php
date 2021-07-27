<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Admin | Login Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?=base_url()?>Adminassets/color/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>Adminassets/color/plugins/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>Adminassets/color/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>Adminassets/color/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>Adminassets/color/css/transparent/style.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>Adminassets/color/css/transparent/style-responsive.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>Adminassets/color/css/transparent/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url()?>Adminassets/color/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN EXTRA JS ================== -->
	<script type="application/javascript" src="<?= base_url()?>Adminassets/js/sweet.js"></script>
	<!-- ================== END EXTRA JS ================== -->
</head>
<body class="pace-top">
	
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login bg-white-transparent-1 animated fadeInDown">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                    <span class="logo"></span> <b>Destiny Basket</b> Admin
                    <small>All Rights Are Reserved By<br> Thinker-Paradize OPC Pvt. Ltd. <?php echo date('Y'); ?></small>
                </div>
                <div class="icon">
                    <i class="fa fa-lock"></i>
                </div>
            </div>
            <!-- end brand -->
            <!-- begin login-content -->
            <div class="login-content">
                <form action="<?= base_url('login-check')?>" method="post" class="margin-bottom-0">
                    <div class="form-group m-b-20">
                        <input type="text" name="user" autofocus="" class="form-control form-control-lg inverse-mode" placeholder="Email Address" required />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" name="pwd" class="form-control form-control-lg inverse-mode" placeholder="Password" required />
                    </div>
                    <div class="checkbox checkbox-css m-b-20">
                        <input type="checkbox" id="remember_checkbox" /> 
                        <label for="remember_checkbox">
                        	Remember Me
                        </label>
                    </div>
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
                    </div>
                </form>
            </div>
            <!-- end login-content -->
			<center>
		<?php
        
            include 'layout/footer.php';
        ?>
			</center>
        </div>
        <!-- end login -->
	</div>
	<!-- end page container -->
			 <?php
        if($this->session->flashdata('item')){
        $item=$this->session->flashdata('item');
        if($item == "no"){ ?>
        
          <script>swal("opps something went wrong!!!", "Please try again...", "error");</script>
        <?php }
		elseif($item=='yes'){ ?>
			<script>swal("Successfully Logged Out!!!", "Thank You !", "success");</script>
		<?php
			}
		}
        ?>
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url()?>Adminassets/color/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?=base_url()?>Adminassets/color/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?=base_url()?>Adminassets/color/plugins/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>

	<script src="<?=base_url()?>Adminassets/color/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?=base_url()?>Adminassets/color/plugins/js-cookie/js.cookie.js"></script>
	<script src="<?=base_url()?>Adminassets/color/js/theme/transparent.min.js"></script>
	<script src="<?=base_url()?>Adminassets/color/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>

</body>

</html>

