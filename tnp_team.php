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
        .img{
        	width: 100px;
        	height: 500px;
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
							<div class="col-md-8">
								<div class="tr-content">
									<div class="tr-ad">
										<a href="#"><img class="img-fluid" src="<?=base_url()?>User_assets/images/slider/institute.png" alt="Image"></a>
									</div><!-- /.tr-ad -->

									<div class="tr-section bg-transparent">
										<div class="section-title">
											<h1><span><a href="#">TNP Team</a></span></h1>
										</div>
										<div class="tr-post">
                                            <?php if($tnpteam){
                                                        foreach($tnpteam as $value):
                                                if($value->role=='director'){
                                            ?>
											<div class="entry-header">
												<div class="entry-thumbnail">
													<a href="details.html"><img class="img-fluid" src="<?=base_url()?><?=$value->image?>" alt="Image"></a>
												</div>
											</div>
											<div class="post-content">
												<div class="author">
													<a href="#"><img class="img-fluid img-circle" src="<?=base_url()?><?=$value->image?>" alt="Image"></a>
												</div>
                                                <h2 class="entry-title">
                                                    <a href="#">Director TNP</a>
                                                </h2>
                                                <h3 class="entry-catagory">
                                                    <a href="#"><?=$value->Name?></a>
                                                </h3><br>
                                                <h2 class="entry-title text-center">
                                                    <a href="#">About:</a>
                                                </h2>
                                                <h3 class="entry-catagory text-center">
                                                   <br> <?=$value->about?>
                                                </h3>
											</div><!-- /.post-content -->	
                                            
                                        <?php } endforeach;}?>
                                            
										</div><!-- tr-post -->
                                        
    
									</div><!-- /.business-section -->

								<!--	<div class="tr-ad">
										<a href="#"><img class="img-fluid" src="<?=base_url()?>User_assets/images/ai/1.jpg" alt="Image"></a>
									</div>--><!-- /.add -->

									<div class="tr-section bg-transparent">

										<div class="tr-post">
                                                <h2 class="entry-title">
                                                    <a href="#">T&P FACULTY COORDINATER</a>
                                                </h2>
                                            <?php if($tnpteam){
                                                   foreach($tnpteam as $value):
                                                if($value->role=='faculty'){
                                            ?>
											<div class="post-content">
												<div class="author">
													<a href="#"><img class="img-circle" style="width:200px;height:200px; margin-top:50px" src="<?=base_url()?><?=$value->image?>" alt="Image"></a>
												</div>
                                                <h3 class="entry-catagory text-center" style="margin-top:-200px;">
                                                    <a href="#"><?=$value->Name?></a>
                                                </h3>
                                                <h4 class="entry-title text-center">
                                                    Branch : <?=$value->Branch?>
                                                </h4>
                                                <h4 class="entry-title text-center">
                                                    Contact No. : <?=$value->mobileno?>
                                                </h4><br><br><br><br><br><br><br>
											</div><!-- /.post-content -->	
                                            
                                        <?php } endforeach;}?>
                                            
										</div><!-- tr-post -->
										<!--  <div class="section-title">
											<h1><span><a href="#"></a>Placed Students</span></h1>
										</div> --><div class="row">          
                                   
                                              
										</div><!-- /.row --> 
									</div><!-- /.life-style-section -->

									<div class="tr-section bg-transparent">
									
										<div class="tr-post">
											
														<div class="league-result text-center">
															<h2>Student Coordinators</h2>
															<ul>
																<li>
																	<ul>
																		<li>
																			<div class="pull-left">
																				 
																				<span class="team-name"><b>Name</b></span>
																			</div>
																		</li>
																		<li>
																			<span class="match-result"><b>Branch</b></span>
																		</li>
																		<li>
																			<div class="pull-right">
																				<span class="team-name"><b>Mobile No.</b></span>
																				
																			</div>
																		</li>
																	</ul>
																</li>
                                                                <?php if($tnpteam){
                                                                        foreach($tnpteam as $value):
                                                                        if($value->role=='student' || $value->role=='Student'){
                                                                    ?>
																<li>
																	<ul>
																		<li>
																			<div class="pull-left">
																				<span class="team-name"><?=$value->Name?></span>
																			</div>
																		</li>
																		<li>
																			<span class="match-result"><?=$value->Branch?></span>
																		</li>
																		<li>
																			<div class="pull-right">
																				<span class="team-name"><?=$value->mobileno?></span>
																				
																			</div>
																		</li>
																	</ul>
																</li>
                                                                <?php } endforeach;}?>
															</ul>
														</div><!-- /.post-content -->	
										</div><!-- tr-post -->
                                              			
									</div> <!-- /.photo-gallery-section -->
								</div><!-- /.tr-content -->
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