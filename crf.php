<?php include 'include/topheader.php';?>
<style>
        .resp-container {
            position: relative;
            padding-top: 56.25%;
        }
        .resp-iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 101%;
            height: 100%;
            border: 0;
        }
</style>
 	<body>
	  	<div class="main-wrapper tr-page-top homepage">
		  	<div class="container-fluid">
		  		<div class="row">
					<?php include 'include/sidebar.php';?>
					<div class="col-lg-9">
						<?php include 'include/header.php';?>
				


						<div class="row">
							<div class="col-md-8" style="height:200%;">
                                
								<div class="tr-content">
                                    <div class="resp-container"  style="height:2850px;">
 
                                                    <iframe class="resp-iframe" style="border-radius:10px;" src="<?=base_url('CrfView/Register')?>" gesture="media"  allow="encrypted-media" allowfullscreen></iframe>
													
                                    </div>
                                </div>
							</div>

							<?php include'include/homeside.php';?>
					</div>		
		  		</div><!-- /.row -->
		  	</div><!-- /.container-fulid -->  		
	  	</div><!-- /.main-wrapper -->

		<?php include 'include/footer.php';?>

		<!-- JS -->
		<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?=base_url()?>User_assets/js/jquery.min.js"></script>
		<script src="<?=base_url()?>User_assets/js/popper.min.js"></script>
		<script src="<?=base_url()?>User_assets/js/bootstrap.min.js"></script>
		<script src="<?=base_url()?>User_assets/js/marquee.js"></script>
		<script src="<?=base_url()?>User_assets/js/moment.min.js"></script>
		<script src="<?=base_url()?>User_assets/js/theia-sticky-sidebar.min.js"></script>
		<script src="<?=base_url()?>User_assets/js/jquery.jplayer.min.js"></script>
		<script src="<?=base_url()?>User_assets/js/jplayer.playlist.min.js"></script>
		<script src="<?=base_url()?>User_assets/js/slick.min.js"></script>
		<script src="<?=base_url()?>User_assets/js/carouFredSel.js"></script>
		<script src="<?=base_url()?>User_assets/js/magnific-popup.min.js"></script>
		<script src="<?=base_url()?>User_assets/js/main.js"></script> 
	</body>


</html>	