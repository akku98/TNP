<?php
@ob_start;
$uname=$this->session->userdata('uname');



?>

<div class="tr-topbar clearfix">

							<div class="topbar-left">

			                    <div class="breaking-news">

			                        <span># Newsfeed</span>
			                        <div id="ticker"> 

			                            <ul>

			                             <?php
                                            if($news){
                                                foreach($news as  $value) {
                                     	?>
                                           
                                            <li><a href="#"><?=$value->news?></a></li>
                                        
                                        <?php
                                     }}
                                    ?>
			                       
			                            </ul> 

			                   	 	</div>


			                	</div><!-- breaking-news -->						

							</div><!-- /.topbar-left -->	

							<div class="topbar-right">

								<div class="user">
                    
							<?php
							 if(!isset($uname))	{
							 	?>
							 	<div>
                                    
                                    <a href="<?=base_url('login')?>" aria-expanded="true" style="margin-top: 10px;"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Sign In</a>
                                
                                </div>	
                                <?php
                                 }
                                 else{
                                  ?>

									<div class="user-image">

										<img class="img-fluid img-circle" src="<?=base_url()?>User_assets/images/others/user.png" alt="Image">

									</div>

									<div class="dropdown user-dropdown">

										Hello,						

										<a href="#" aria-expanded="true"><?=$uname?><i class="fa fa-caret-down" aria-hidden="true"></i></a>

										<ul class="sub-menu text-left">

											<li><a href="<?=base_url()?>"><i class="fa fa-address-book-o" aria-hidden="true"></i>&nbsp;&nbsp;My Profile</a></li>

											<li><a href="<?=base_url('Logout')?>"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Sign Out</a></li>

										</ul>								

									</div>							

                                    <?php
                                     }																
                                    ?>
								</div>

								<div class="searchNlogin">

									<ul>

										<li class="search-icon"><i class="fa fa-search"></i></li>

										<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>

										<li><a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i></a></li>

										
									</ul>

									<div class="search">

										<form role="form">

											<input type="text" class="search-form" autocomplete="off" placeholder="Type & Press Enter">

										</form>

									</div> <!--/.search--> 								

								</div>											

							</div><!-- /.topbar-right -->

						</div><!-- /.tr-topbar -->