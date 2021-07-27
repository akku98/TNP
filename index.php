<?php include 'include/header.php'; ?>
<body>
	  	<div class="main-wrapper tr-page-top homepage">
		  	<div class="container-fluid">
		  		<div class="row">
					<div class="col-sm-3 tr-sidebar tr-sticky">
						<div class="theiaStickySidebar">
							<div class="tr-menu sidebar-menu">
								<nav class="navbar navbar-default">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										</button>
                                                                            <a class="navbar-brand" href="index.php"><img class="img-responsive" src="<?=base_url()?>User_assets/images/logos.png"></a>
									</div><!-- /navbar-header -->
										
									<?php include 'include/sidebar.php'; ?>
								</nav><!-- /navbar -->						
							</div><!-- /left-memu -->
						</div><!-- /.theiaStickySidebar --> 				
					</div> 	
					<div class="col-sm-9">
						<div class="tr-topbar clearfix">
							<div class="topbar-center">
			                    <div class="breaking-news">
			                        <span># Newsfeed</span>
			                        <div id="ticker"> 
			                            <ul>
                                                        
                                                        <?php
                                                            include_once 'include/dbc.php';
                                                            error_reporting(0);
                                                            $news = mysqli_query($conn,"select * from news");

                                                            if($news)
                                                            {
                                                                    while($row10=mysqli_fetch_array($news))
                                                                    {
                                                                            $newsfeed[]=$row10;
                                                                    }
                                                            }
                                                            foreach ($newsfeed as $nf){
                                                                echo '<li><a href="#">'.$nf['name'].' - '.$nf['detail'].'</a></li>';
                                                            }
                                                        ?>
			                            </ul> 
			                   	 	</div>
			                	</div><!-- breaking-news -->						
							</div><!-- /.topbar-left -->	
						</div><!-- /.tr-topbar -->
						
						<div class="tr-home-slider home-slider-1 tr-section">
							<div id="home-carousel" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#home-carousel" data-slide-to="0" class="active">
										<span class="catagory">Guest Of Honor</span>
										<span class="indicators-title">Shri. Brijmohan Agrawal,cabinet minister in the Bharatiya Janata Party ministry of Chhattisgarh</span>
									</li>
									<li data-target="#home-carousel" data-slide-to="1">
										<span class="catagory">DJ Night</span>
										<span class="indicators-title"></span>
									</li>
									<li data-target="#home-carousel" data-slide-to="2">
										<span class="catagory">RitoFest 2k17</span>
										<span class="indicators-title">Chhattisgarh's First Ever 3D Show</span>
									</li>
									<li data-target="#home-carousel" data-slide-to="3">
										<span class="catagory">Flash Mob</span>
										<span class="indicators-title"> </span>
									</li>
								</ol>	

								<div class="carousel-inner" role="listbox">
									<div class="item active" style=" background-image: url(<?=base_url()?>User_assets/images/post/slider11.jpg)">
										<div class="post-content">
											<span class="catagory" data-animation="animated fadeInUp"><a href=""></a>Guest Of Honor</span>
											<h2 class="entry-title" data-animation="animated fadeInUp">
												<a href="">Shri. Brijmohan Agrawal,cabinet minister in the Bharatiya Janata Party ministry of Chhattisgarh</a>
											</h2>
											<div class="entry-meta"  data-animation="animated fadeInUp">
                                                                                               
											</div>
										</div><!-- /.post-content -->								
									</div><!-- /.item -->

									<div class="item" style="background-image: url(<?=base_url()?>User_assets/images/post/slider22.jpg)">
										<div class="post-content">
											<span class="catagory"  data-animation="animated fadeInUp"><a href="">DJ Night</a></span>
											<h2 class="entry-title" data-animation="animated fadeInUp">
												<a href=""></a>
											</h2>
											<div class="entry-meta"  data-animation="animated fadeInUp">
												
											</div>
										</div><!-- /.post-content -->								
									</div><!-- /.item -->

									<div class="item" style="background-image: url(<?=base_url()?>User_assets/images/post/1.jpg)">
										<div class="post-content">
											<span class="catagory"  data-animation="animated fadeInUp"><a href="">Cultural</a></span>
											<h2 class="entry-title" data-animation="animated fadeInUp">
												<a href="">Chhattisgarh's First Ever 3D Show</a>
											</h2>
											<div class="entry-meta"  data-animation="animated fadeInUp">
												<ul>
													<li>By <a href="">Shakul Sharma & Team</a></li>
													
												</ul>
											</div>
										</div><!-- /.post-content -->								
									</div><!-- /.item -->

									<div class="item" style="min-height:500px; background-image: url(<?=base_url()?>User_assets/images/post/155.jpg);background-repeat:no-repeat;background-size:cover;">
										<div class="post-content">
											<span class="catagory"  data-animation="animated fadeInUp"><a href="">Flash Mob</a></span>
											<h2 class="entry-title" data-animation="animated fadeInUp">
												<a href=""></a>
											</h2>
											<div class="entry-meta"  data-animation="animated fadeInUp">
												
											</div>
										</div><!-- /.post-content -->								
									</div><!-- /.item -->
								</div><!-- /.carousel-inner -->
							</div><!-- /#home-carousel -->					
						</div><!-- /.tr-home-slider -->				

						<div class="row">
							<div class="col-sm-8">
								<div class="tr-content">

									<div class="tr-section bg-transparent">
										<div class="section-title">
                                                                                    <h1><span><a>RITOFest Main Attractions</a></span></h1>
										</div>
										<div class="tr-post">
											<div class="entry-header">
												<div class="entry-thumbnail">
                                                                                                    <a href="gallery-album.php?category=3dshow"><img class="img-responsive" src="<?=base_url()?>User_assets/images/post/3dshow.jpg" alt="Image"></a>
												</div>
											</div>
											<div class="post-content">
												<h2 class="entry-title">
													<a href="gallery-album.php?category=3dshow">3D Show</a>
												</h2>
											</div><!-- /.post-content -->	
										</div><!-- tr-post -->

										<div class="row">
											<div class="col-md-6">
												<div class="tr-post medium-post">
													<div id="carousel-one" class="carousel slide" data-ride="carousel">
														<div class="carousel-inner" role="listbox">
															<div class="item active">
																<div class="entry-header">
																	<div class="entry-thumbnail">
                                                                                                                                            <a href="gallery-album.php?category=fshow"><img class="img-responsive" src="<?=base_url()?>User_assets/images/post/fsh1.jpg" alt="Image"></a>
																	</div>
																</div>	
															</div><!-- /.item -->
															<div class="item">
																<div class="entry-header">
																	<div class="entry-thumbnail">
                                                                                                                                            <a href="gallery-album.php?category=fshow"><img class="img-responsive" src="<?=base_url()?>User_assets/images/post/fsh2.jpg" alt="Image"></a>
																	</div>
																</div>	
															</div><!-- /.item -->
															<div class="item">
																<div class="entry-header">
																	<div class="entry-thumbnail">
                                                                                                                                            <a href="gallery-album.php?category=fshow"><img class="img-responsive" src="<?=base_url()?>User_assets/images/post/fsh3.jpg" alt="Image"></a>
																	</div>
																</div>	
															</div><!-- /.item -->

														</div><!-- /.carousel-inner -->
														<div class="gallery-turner">
															<a class="left-photo" href="#carousel-one" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
															<a class="right-photo" href="#carousel-one" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
														</div>			
													</div><!-- /#carousel-one -->
													<div class="post-content">
													
														<h2 class="entry-title">
															<a href="#">Fashion Show</a>
														</h2>
													</div><!-- /.post-content -->	
												</div><!-- tr-post -->
											</div>
											<div class="col-md-6 medium-post">
												<div class="tr-post">
													<div class="entry-header">
														<div class="entry-thumbnail">
                                                                                                                    <a href="huntitdown/huntitdown.html"><img class="img-responsive" src="<?=base_url()?>User_assets/images/post/HUNT IT DOWN.png" alt="Image"></a>
														</div>
													</div>
													<div class="post-content">
														<h2 class="entry-title">
                                                                                                                    <a href="huntitdown/huntitdown.html">Hunt It Down</a>
														</h2>
													</div><!-- /.post-content -->	
												</div><!-- tr-post -->
											</div>
										</div><!-- /.row -->
									</div><!-- /.business-section -->

									<div class="tr-section bg-transparent">
										<div class="section-title">
											<h1><span><a>Ritofest 2k18 Events</a></span></h1>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="tr-post medium-post">
													<div class="entry-header">
														<div class="entry-thumbnail">
                                                                                                                    <a href="gallery-album.php?category=robot"><img class="img-responsive" src="<?=base_url()?>User_assets/images/post/ROBORACE.jpg" alt="Image"></a>
														</div>
													</div>
													<div class="post-content">
														<h2 class="entry-title">
															<a href="gallery-album.php?category=robot">RoboWar & RoboRace</a>
														</h2>
													</div><!-- /.post-content -->	
												</div>											
											</div>
											<div class="col-md-6">
												<div class="tr-post medium-post">
													<div class="entry-header">
														<div class="entry-thumbnail">
                                                                                                                    <a href="gallery-album.php?category=fmob"><img class="img-responsive" src="<?=base_url()?>User_assets/images/post/flashmob.jpg" alt="Image"></a>
														</div>
													</div>
													<div class="post-content">
													
														<h2 class="entry-title">
															<a href="gallery-album.php?category=fmob">Flash Mob</a>
														</h2>
													</div><!-- /.post-content -->	
												</div>											
											</div>
											<div class="col-md-6">
												<div class="tr-post medium-post">
													<div class="entry-header">
														<div class="entry-thumbnail">
                                                                                                                    <a href="gallery-album.php?category=flowarr"><img class="img-responsive" src="<?=base_url()?>User_assets/images/post/flower.jpg" alt="Image"></a>
														</div>
													</div>
													<div class="post-content">
														<h2 class="entry-title">
															<a href="gallery-album.php?category=flowarr">Flower Decoration</a>
														</h2>
													</div><!-- /.post-content -->	
												</div>											
											</div>
											<div class="col-md-6">
												<div class="tr-post medium-post">
													<div class="entry-header">
														<div class="entry-thumbnail">
                                                                                                                    <a href="gallery-album.php?category=hghg"><img class="img-responsive" src="<?=base_url()?>User_assets/images/post/paint.jpg" alt="Image"></a>
														</div>
													</div>
													<div class="post-content">
														<h2 class="entry-title">
															<a href="gallery-album.php?category=hghg">Painting</a>
														</h2>
													</div><!-- /.post-content -->	
												</div>											
											</div>
										</div><!-- /.row -->
									</div><!-- /.life-style-section -->

									<div class="tr-section bg-transparent">
										<div class="section-title">
											<h1><span><a>Ritofest 2k17 Events</a></span></h1>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="tr-post medium-post">
													<div class="entry-header">
														<div class="entry-thumbnail">
                                                                                                                    <a href="gallery-album.php?category=robot"><img class="img-responsive" src="<?=base_url()?>User_assets/images/post/ROBORACE.jpg" alt="Image"></a>
														</div>
													</div>
													<div class="post-content">
														<h2 class="entry-title">
															<a href="gallery-album.php?category=robot">RoboWar & RoboRace</a>
														</h2>
													</div><!-- /.post-content -->	
												</div>											
											</div>
											<div class="col-md-6">
												<div class="tr-post medium-post">
													<div class="entry-header">
														<div class="entry-thumbnail">
                                                                                                                    <a href="gallery-album.php?category=fmob"><img class="img-responsive" src="<?=base_url()?>User_assets/images/post/flashmob.jpg" alt="Image"></a>
														</div>
													</div>
													<div class="post-content">
													
														<h2 class="entry-title">
															<a href="gallery-album.php?category=fmob">Flash Mob</a>
														</h2>
													</div><!-- /.post-content -->	
												</div>											
											</div>
											<div class="col-md-6">
												<div class="tr-post medium-post">
													<div class="entry-header">
														<div class="entry-thumbnail">
                                                                                                                    <a href="gallery-album.php?category=flowarr"><img class="img-responsive" src="<?=base_url()?>User_assets/images/post/flower.jpg" alt="Image"></a>
														</div>
													</div>
													<div class="post-content">
														<h2 class="entry-title">
															<a href="gallery-album.php?category=flowarr">Flower Decoration</a>
														</h2>
													</div><!-- /.post-content -->	
												</div>											
											</div>
											<div class="col-md-6">
												<div class="tr-post medium-post">
													<div class="entry-header">
														<div class="entry-thumbnail">
                                                                                                                    <a href="gallery-album.php?category=hghg"><img class="img-responsive" src="<?=base_url()?>User_assets/images/post/paint.jpg" alt="Image"></a>
														</div>
													</div>
													<div class="post-content">
														<h2 class="entry-title">
															<a href="gallery-album.php?category=hghg">Painting</a>
														</h2>
													</div><!-- /.post-content -->	
												</div>											
											</div>
										</div><!-- /.row -->
									</div><!-- /.life-style-section -->

									<div class="tr-section bg-transparent">
										<div class="section-title">
											<h1><span><a href="#">Glimpse Of RitoFest 2K17</a></span></h1>
										</div>
										<div id="photo-gallery" class="carousel slide carousel-fade photo-gallery" data-ride="carousel">
											<div class="carousel-inner">
												<div class="item active">
                                                                                                    <a href="#"><img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_8234_1.jpg" alt="Image"></a>
                                                                                                        </br>
                                                                                                </div>
												<div class="item">
                                                                                                    <a href="#"><img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_8258_2.jpg" alt="Image"></a>
                                                                                                	</br>
												</div>
												<div class="item">
                                                                                                    <a href="#"><img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_2682_3.JPG" alt="Image"></a>
													</br>
												</div>
												<div class="item">
                                                                                                    <a href="#"><img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_3244_4.JPG" alt="Image"></a>
													</br>
												</div>
												<div class="item">
                                                                                                    <a href="#"><img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_0210 (3)_5.JPG" alt="Image"></a>
													</br>
												</div>
												<div class="item">
                                                                                                    <a href="#"><img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_0017_6.JPG" alt="Image"></a>
													</br>
												</div>
												<div class="item">
                                                                                                    <a href="#"><img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_0029 (2)_7.JPG" alt="Image"></a>
													</br>
												</div>
												<div class="item">
                                                                                                    <a href="#"><img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_0053_8.JPG" alt="Image"></a>
													</br>
												</div>
												<div class="item">
                                                                                                    <a href="#"><img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_0933_9.JPG" alt="Image"></a>
													</br>
												</div>
												<div class="item">
                                                                                                    <a href="#"><img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_2619_10.JPG" alt="Image"></a>
													</br>
												</div>
												<div class="item">
                                                                                                    <a href="#"><img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_2624_11.JPG" alt="Image"></a>
													</br>
												</div>
												<div class="item">
                                                                                                    <a href="#"><img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_3295_12.JPG" alt="Image"></a>
													</br>
												</div>
												<div class="item">
                                                                                                    <a href="#"><img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_2965_13.JPG" alt="Image"></a>
                                                                                                        </br>
												</div>
											</div><!--/carousel-inner-->
											
											<ol class="gallery-indicators carousel-indicators">
												<li data-target="#photo-gallery" data-slide-to="0" class="active">
                                                                                                    <img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_8234_thumb.jpg" alt="Image">
												</li>
												<li data-target="#photo-gallery" data-slide-to="1" class="">
                                                                                                    <img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_8258_thumb.jpg" alt="Image">
												</li>
												<li data-target="#photo-gallery" data-slide-to="2" class="">
                                                                                                    <img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_2682_thumb.jpg" alt="Image">
												</li>
												<li data-target="#photo-gallery" data-slide-to="3" class="">
                                                                                                    <img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_3244__thumb.jpg" alt="Image">
												</li>
												<li data-target="#photo-gallery" data-slide-to="4" class="">
                                                                                                    <img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_0210 (3)_thumb.jpg" alt="Image">
												</li>
												<li data-target="#photo-gallery" data-slide-to="5">
                                                                                                    <img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_0017__thumb.jpg" alt="Image">
												</li>
												<li data-target="#photo-gallery" data-slide-to="6">
                                                                                                    <img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_0029 (2)__thumb.jpg" alt="Image">
												</li>
												<li data-target="#photo-gallery" data-slide-to="7">
                                                                                                    <img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_0053_thumb.jpg" alt="Image">
												</li>
												<li data-target="#photo-gallery" data-slide-to="8">
                                                                                                    <img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_0933_thumb.jpg" alt="Image">
												</li>
												<li data-target="#photo-gallery" data-slide-to="9">
                                                                                                    <img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_2619_thumb.jpg" alt="Image">
												</li>
												<li data-target="#photo-gallery" data-slide-to="10">
                                                                                                    <img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_2624_thumb.jpg" alt="Image">
												</li>
												<li data-target="#photo-gallery" data-slide-to="11">
                                                                                                    <img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_3295__thumb.jpg" alt="Image">
												</li>
												<li data-target="#photo-gallery" data-slide-to="12">
                                                                                                    <img class="img-responsive" src="<?=base_url()?>User_assets/images/glimpse/slide_2965_thumb.jpg" alt="Image">
												</li>
											</ol><!--/gallery-indicators-->
											
											<div class="gallery-turner">
												<a class="left-photo" href="#photo-gallery" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
												<a class="right-photo" href="#photo-gallery" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
											</div>
										</div><!-- /.photo-gallery	 -->							
									</div><!-- /.photo-gallery-section -->
								</div><!-- /.tr-content -->
							</div>

							<div class="col-sm-4 tr-sidebar tr-sticky">
								<div class="theiaStickySidebar">

									<div class="tr-section tr-widget">
										<div class="widget-title">
											<span>Rito2k18 Winners</span>
										</div>
										<ul class="medium-post-list">
											<li class="tr-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
                                                                                                            <a><img class="img-responsive" src="<?=base_url()?>User_assets/images/post/huntitdown.jpeg" alt="Image"></a>
													</div>
												</div>
												<div class="post-content">
													<div class="catagory">
														<a>Hunt It Down</a>
													</div>
													<h2 class="entry-title">
                                                                                                            <a><b>Mohit Barai , Diya Sen , Amit Tiwari & Sunaina Patel</b> Won Hunt It Down</a>
													</h2>
												</div><!-- /.post-content -->			
											</li>
											<li class="tr-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
                                                                                                            <a><img class="img-responsive" src="<?=base_url()?>User_assets/images/post/faceofrito.jpg" alt="Image"></a>
													</div>
												</div>
												<div class="post-content">
													<div class="catagory">
														<a>Face Of RITO</a>
													</div>
													<h2 class="entry-title">
														<a><b>Soma Mukharjee & Naveen Naager</b> Were Face Of RITO'17</a>
													</h2>
												</div><!-- /.post-content -->			
											</li>
											<li class="tr-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<a><img class="img-responsive" src="<?=base_url()?>User_assets/images/post/11.jpg" alt="Image"></a>
													</div>
												</div>
												<div class="post-content">
													<div class="catagory">
														<a>Painting</a>
													</div>
													<h2 class="entry-title">
														<a><b>Shruti Shukla </b> Won Painting Competation</a>
													</h2>
												</div><!-- /.post-content -->			
											</li>
											<li class="tr-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
                                                                                                            <a><img class="img-responsive" src="<?=base_url()?>User_assets/images/post/cric.jpg" alt="Image"></a>
													</div>
												</div>
												<div class="post-content">
													<div class="catagory">
														<a>Cricket</a>
													</div>
													<h2 class="entry-title">
														<a><b>Nursing(Girls) & CIVIL(Boys)</b> Won Cricket</a>
													</h2>
												</div><!-- /.post-content -->			
											</li>
                                                                                        <li class="tr-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
                                                                                                            <a><img class="img-responsive" src="<?=base_url()?>User_assets/images/post/kho-kho.jpg" alt="Image"></a>
													</div>
												</div>
												<div class="post-content">
													<div class="catagory">
														<a>Kho-kho</a>
													</div>
													<h2 class="entry-title">
														<a><b>Nursing(Girls) & 1year (Boys)</b> Won Kho-Kho</a>
													</h2>
												</div><!-- /.post-content -->			
											</li>
										</ul>
									</div><!-- /.tr-section -->

									<div class="tr-weather tr-widget">
										<!--<div class="weather-top">
											<div class="row">
												<div class="col-xs-6">
													<div class="weather-image">
														<img class="img-responsive" src="<?=base_url()?>User_assets/images/others/weather1.png" alt="Image">
													</div>
												</div>
												<div class="col-xs-6">
													<span class="weather-temp">21 <sup><span>°</span>C</sup></span>
													<span class="weather-type">Mostly Cloudy</span>
												</div>
											</div>
											<ul>
												<li>London, UK</li>
												<li><span><img class="img-responsive" src="<?=base_url()?>User_assets/images/others/weather2.png" alt="Image"></span>13%</li>
												<li><span><img class="img-responsive" src="<?=base_url()?>User_assets/images/others/weather3.png" alt="Image"></span>6.44 MPH</li>
											</ul>
										</div><!-- /.weather-top 

										<div class="weather-bottom">
											<ul>
												<li>
													<div class="weather-icon">
														<img class="img-responsive" src="<?=base_url()?>User_assets/images/others/weather4.png" alt="Image">
													</div>
													<div class="weather-info">
														<span>23°</span>
														<span class="date">Sun, 3 July</span>
													</div>
												</li>
												<li>
													<div class="weather-icon">
														<img class="img-responsive" src="<?=base_url()?>User_assets/images/others/weather5.png" alt="Image">
													</div>
													<div class="weather-info">
														<span>26°</span>
														<span class="date">Sun, 3 July</span>
													</div>
												</li>
											</ul>
										</div><!-- /.weather-bottom 
									</div><!-- /.weather-widget 	-->							

									<div class="tr-widget meta-widget">
										
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active"><a href="#author" data-toggle="tab"><i class="fa fa-user"></i>Rito'19 Winners</a></li>
										</ul>
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane active fade in" id="author">
												<ul class="authors-post">
												
                                                                                                    <?php
                                                                                                        include_once 'include/dbc.php';
                                                                                                        $win = mysqli_query($conn,"select * from winners");

                                                                                                        if($win)
                                                                                                        {
                                                                                                                while($rowwin=mysqli_fetch_array($win))
                                                                                                                {
                                                                                                                        $winlist[]=$rowwin;
                                                                                                                }
                                                                                                        }
                                                                                                        foreach ($winlist as $nf){
                                                                                                            echo '<li>
														<div class="entry-meta">
															<div class="author-info">
																<h2><a><b>'.$nf['name'].' - '.$nf['event'].'</b></a></h2>
															</div>						
														</div>
													</li>';
                                                                                                        }
                                                                                                    ?>
                                                                                                    			
												</ul>
											</div>
										</div>
									</div><!-- meta-tab -->								
								</div><!-- /.theiaStickySidebar -->						
							</div>
						</div><!-- row -->
					</div>		
		  		</div><!-- /.row -->
		  	</div><!-- /.container-fulid -->  		
	  	</div><!-- /.main-wrapper -->
                
                <footer id="footer">
			<div class="footer-menu">
				<div class="container">
					<ul class="nav navbar-nav">                       
						<li  class="active"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                                                                                        <li><a href="events.php"><i class="fa fa-compass" aria-hidden="true"></i>Events</a></li>
											<li><a href="sports.php"><i class="fa fa-futbol-o" aria-hidden="true"></i>Sports</a></li>
                                                                                        <li><a href="gallery.php"><i class="fa fa-photo" aria-hidden="true"></i>Gallery</a></li>
											<li><a href="about.php"><i class="fa fa-address-book-o" aria-hidden="true"></i>About</a></li>
                                                                                        <li><a href="sponsers.php"><i class="fa fa-money" aria-hidden="true"></i>Our Sponsors</a></li>
                                                                                        <li><a href="developers.php"><i class="fa fa-code" aria-hidden="true"></i>Our Developers</a></li>
                                                                                        <li><a href="http://rit.edu.in/" target="blank_"><i class="fa fa-graduation-cap" aria-hidden="true"></i>About RIT</a></li>
					</ul> 
				</div>
			</div>
                
<?php include 'include/footer.php'; ?>