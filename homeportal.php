<?php include 'include/topheader.php';?>


	<!-- ================== BEGIN EXTRA JS ================== -->
	<script type="application/javascript" src="<?= base_url()?>Adminassets/js/sweet.js"></script>
	<!-- ================== END EXTRA JS ================== -->
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
				

						<div class="tr-home-slider home-slider-1 tr-section">
							<div id="home-carousel" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#home-carousel" data-slide-to="0" class="active">
										<span class="indicators-title">For Students</span>
										<span class="catagory">The cell has been playing the dual role of accessing ever-changing industrial requirements and estimating the inherent talents of the students</span>
										
									</li>
                                <?php
                                    if($slider){  
                                        foreach ($slider as $value):
                                        $i = 1;
                                ?>
                                    <li data-target="#home-carousel" data-slide-to="<?=$i?>">
										
										<span class="indicators-title"><?=$value->Text?></span>
										<span class="catagory"><?=$value->description?></span>
									</li>
									
                                <?php $i++; endforeach;  } ?>
								</ol>	

								<div class="carousel-inner" role="listbox">
									<div class="item carousel-item active" style=" background-image: url(<?=base_url()?>User_assets/images/slider/campus.jpg)">
										<div class="post-content">
                                            <h3 class="catagory" data-animation="animated fadeInUp"><a href="#">For Students</a></h3>
											<h2 class="entry-title" data-animation="animated fadeInUp">
												<a href="#">The cell has been playing the dual role of accessing ever-changing industrial requirements and estimating the inherent talents of the students</a>
											</h2>
											
											
											
										</div><!-- /.post-content -->								
									</div><!-- /.item -->
                    <?php
                        if($slider){  
                            foreach ($slider as $data):
                    ?>
				        <div class="item carousel-item" style="background-image: url(<?=base_url()?><?=$data->image?>)">
										<div class="post-content">
                                            <h3 class="catagory"  data-animation="animated fadeInUp"><a href="#"></a><?=$data->Text?></h3>
											<h2 class="entry-title" data-animation="animated fadeInUp">
												<a href="#"><?=$data->description?></a>
											</h2>
											
											
										</div><!-- /.post-content -->								
									</div><!-- /.item -->
                                
                   <?php endforeach;  } ?>

								</div><!-- /.carousel-inner -->
							</div><!-- /#home-carousel -->					
						</div><!-- /.tr-home-slider -->

						<div class="row">
							<div class="col-md-8">
								<div class="tr-content">
									<div class="tr-ad">
										<a href="#"><img class="img-fluid" src="<?=base_url()?>User_assets/images/slider/institute.png" alt="Image"></a>
									</div><!-- /.tr-ad -->

									<div class="tr-section bg-transparent">
										<div class="section-title">
											<h1><span><a href="#">NOTICE</a></span></h1>
										</div>
										<?php
                                        if($notice){
                                            foreach($notice as  $value):
                                            if($value->role=='home') {
                                                   
                                                   ?>

                                                           <div class="tr-post">
											<div class="entry-header">
                                                        <div class="resp-container">
 
                                                    <iframe class="resp-iframe" src="<?=base_url()?><?=$value->image?>" gesture="media"  allow="encrypted-media" allowfullscreen></iframe>
													
												</div>
											</div>
											<div class="post-content">
												
												<h2 class="entry-title">
													<a href="details.html"><?=$value->notice_content?></a>
												</h2>
											</div><!-- /.post-content -->	
										</div><!-- tr-post -->
                                        <?php                                           	
                                            }
                                            endforeach;}
										?>
									</div>
									<div class="tr-section bg-transparent">
										<div class="section-title">
											<h1><span><a href="#">TNP Team</a></span></h1>
										</div>
										<div class="tr-post">
                                            <?php 
                                            if($tnpteam){
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
                                                </h3>
											</div><!-- /.post-content -->	
                                            
                                        <?php } endforeach;}?>
                                            
										</div><!-- tr-post -->
                                        
										<div class="tr-post">
											
														<div class="league-result text-center">
															<h2>Faculty Coordinators</h2>
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
                                                                <?php 
                                                                if($tnpteam){
                                                                    foreach($tnpteam as $value):
                                                                        if($value->role=='faculty'){
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
    
									</div><!-- /.business-section -->

								<!--	<div class="tr-ad">
										<a href="#"><img class="img-fluid" src="<?=base_url()?>User_assets/images/ai/1.jpg" alt="Image"></a>
									</div>--><!-- /.add -->

									<div class="tr-section bg-transparent">
										<div class="section-title">
											<h1><span><a href="#"></a>Placed Students</span></h1>
										</div>
										<div class="row">          
                                    <?php
									 if($students)
									 {
                                         foreach ($students as  $value) {
                                         	?>
                                                 <div class="col-md-6">
                                              <div class="tr-post medium-post " >
													<div class="entry-header">
														<div class="entry-thumbnail">
															<a href="#"><img class="img-fluid img-responsive " src="<?=base_url()?><?=$value->image?>" alt="Image"></a>
														</div>
													</div>
													<div class="post-content">
														<h2 class="entry-title">
															<a href="#"><?=$value->comp_name?></a>
														</h2>
													</div><!-- /.post-content -->	
														
                                                 </div>										
											</div>
										



                                         	<?php
                                         }

                                    }



									 ?>		
											
											
										</div><!-- /.row -->
									</div><!-- /.life-style-section -->

									<div class="tr-section bg-transparent">
										<div class="section-title">
											<h1><span><a href="#">Photo Gallery</a></span></h1>
										</div>
										<div id="photo-gallery" class="carousel slide carousel-fade photo-gallery" data-ride="carousel" style="max-height: 500px;min-height:500px ; max-width: 700px; " >
											<div class="carousel-inner">
												<div class="item carousel-item active" >
													<a href="#"><img class="img-fluid" src="<?=base_url()?>User_assets/images/slider/institute.png" style="max-height: 350px; min-height: 350px;" alt="Image"></a>
													<h2 style="margin-bottom: 11px;"><a href="#">RITEE</a></h2>
												</div>
                                                  <?php
                                                    if($gallery){
                                                        foreach($gallery as  $value) {
                                                  
                                            ?>
												<div class="item carousel-item">
													<a href="#"><img class="img-fluid" src="<?=base_url()?><?=$value->image?>" style="max-height: 350px; min-height: 350px;" alt="Image"></a>
													<h2><a href="#"><?=$value->text?></a></h2>
												</div>
                                                  <?php
                                                 }       }                                       
                                              ?>  
											</div><!--/carousel-inner-->
											
											<ol class="gallery-indicators carousel-indicators" style="margin-bottom: 11px;">
												<li data-target="#photo-gallery" data-slide-to="0" class="active">
													<img class="img-fluid" src="<?=base_url()?>User_assets/images/slider/institute.png" alt="Image">
												</li>
                                                 <?php
                                            if($gallery){
                                             $i=1;
                                                foreach($gallery as  $value) {
                                                  
                                            ?>
												<li data-target="#photo-gallery" data-slide-to="<?=$i?>">
													<img class="img-fluid" src="<?=base_url()?><?=$value->image?>" alt="Image">
												</li>
                                                  <?php
                                                 } $i++;     }                                       
                                              ?>  
											</ol><!--/gallery-indicators-->
											
											<div class="gallery-turner">
												<a class="left-photo" href="#photo-gallery" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
												<a class="right-photo" href="#photo-gallery" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
											</div>
										</div><!-- /.photo-gallery	 -->							
									</div><!-- /.photo-gallery-section -->
								</div><!-- /.tr-content -->
							</div>

							<?php include'include/homeside.php';?>
					</div>		
		  		</div><!-- /.row -->
		  	</div><!-- /.container-fulid -->  		
	  	</div><!-- /.main-wrapper -->

		<?php include 'include/footer.php';?>

<?php

if($this->session->flashdata('item')){
    $item=$this->session->flashdata('item');
    if($item == "yes"){ ?>
         <script> swal("Successfully Logged In!!!", "Now the Manage Your Profile", "success");</script>
    <?php }else if ($item == "no"){ ?>
        <script>swal("opps something went wrong!!!", "Please try again...", "error");</script>
   <?php     
    }else if ($item == "uppass"){ ?>
        <script>swal("Successfully Logged In!!!", "Now The Update Your Password", "success");</script>
   <?php     
    }else if ($item == "logout"){ ?>
        <script>swal("Successfully Logged Out!!!", "Thank you...!", "success");</script>
   <?php     
    }
}

?>
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