<style>
        .resp-container {
            position: relative;
            padding-top: 56.25%;
        }
        .resp-iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
</style>
<div class="col-md-4 tr-sidebar tr-sticky">
								<div class="theiaStickySidebar">

									<div class="tr-section tr-widget tr-ad ad-before">
                                        <div class="resp-container" style="height:500px;">

                                            <iframe class="resp-iframe" style="border-radius:10px;" src="<?=base_url('LoginController/developers')?>" gesture="media"  allow="encrypted-media" allowfullscreen></iframe>

                                        </div>
									</div><!-- /.tr-post -->

									<div class="tr-section tr-widget">
										<div class="widget-title">
											<span><h3><b>Placement Policy</b></h3></span>
										</div>
										<ul class="medium-post-list">
											<li class="tr-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<a href="details.html"><img src="<?=base_url()?>User_assets/images/slider/rules.png"></a>
													</div>
												</div>
												<?php
                                                    if($policy){
                                                        foreach($policy as  $value) {
                                                 	?>

                                                            <div class="post-content">
													<div class="catagory">
														<a href="#"><img src="<?=base_url()?>User_assets/images/slider/highlight.jpg" style="max-width: 20px; max-height: 20px;"></a>
													</div>
													<h2 class="entry-title">
														<a href="details.html"><style type="font-size:12px;"></style><?=$value->policy?></a>
													</h2>
												</div><!-- /.post-content -->	

                                                <?php
                                                 }}
                                                ?>		
											</li>
											
											
											
										</ul>
									</div><!-- /.tr-section -->

									<div class="tr-weather tr-widget">
										<div class="weather-top">
											<div class="row">
												<div class="col-6">
													
												</div>
												<div class="col-6">
													<span class="weather-temp"> <sup><span></span></sup></span>
													<span class="weather-type"></span>
												</div>
											</div>
											<ul>
												<li>
												</li>
                                                <li><span></span></li>
												<li><span><img class="img-fluid"> </span></li>
											</ul>
										</div><!-- /.weather-top -->

										<div class="weather-bottom">
											<ul>
												<li>
													<div class="weather-icon">
														
													</div>
													<div class="weather-info">
														<span></span>
														<span class="date"></span>
													</div>
												</li>
												<li>
													<div class="weather-icon">
														
													</div>
													<div class="weather-info">
														<span></span>
														<span class="date"></span>
													</div>
												</li>
											</ul>
										</div><!-- /.weather-bottom -->
									</div><!-- /.weather-widget -->

									<div class="tr-section tr-widget tr-ad ad-before">
										
                                        <div class="resp-container" style="height:500px;">

                                            <iframe class="resp-iframe" style="border-radius:10px;" src="<?=base_url('LoginController/developers')?>" gesture="media"  allow="encrypted-media" allowfullscreen></iframe>

                                        </div>
									</div><!-- /.tr-post -->								

									<div class="tr-widget meta-widget">
										<div class="widget-title">
											<span>Latest</span>
										</div>
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation"><a class="active" href="#author" data-toggle="tab"><i class="fa fa-user"></i>Notifications</a></li>
											<li role="presentation"><a href="#comment" data-toggle="tab"><i class="fa fa-comment-o"></i>Contents</a></li>
										</ul>
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane active show fade in" id="author">
												<?php
                                                    if($notice){
                                                        foreach($notice as $value):
                                                   if($value->role=='side') {
                                                  	    ?>
                                                                   <ul class="authors-post">
													<li>
														<div class="entry-meta">
															<div class="author-image">
																<a href="#"><img class="img-fluid" src="<?=base_url()?><?=$value->image?>" alt="Image"></a>
															</div>
															<div class="author-info">
																<h2><a href="#"><?=$value->notice_title?></a></h2>
															</div>						
														</div>
													</li>
													


															
												</ul>
                                                <?php }endforeach;}?>
											</div>
											<div role="tabpanel" class="tab-pane fade in" id="comment">
												<ul class="comment-list">
													<li>
														<?php
                                                    if($notice){
                                                        foreach($notice as  $value):
                                                           if($value->role=='side') {

                                                           	?>
                                                                 <div class="post-content">	
															<div class="entry-meta">
																<span><a href="#"><?=$value->notice_title?></a></span>
															</div>
															<h2 class="entry-title">
																<a href="#"><?=$value->notice_content?></a>
															</h2>
														</div>

                                                <?php }endforeach;}?>
                                                        
													</li>
													



												</ul>
											</div>
										</div>
									</div><!-- meta-tab -->								
								</div><!-- /.theiaStickySidebar -->						
							</div>
						</div><!-- row -->