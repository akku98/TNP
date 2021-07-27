<?php
    @ob_start;
    $email=$this->session->userdata('email');
?>
<div class="col-lg-3 tr-sidebar tr-sticky">

						<div class="theiaStickySidebar">

							<div class="tr-menu sidebar-menu">

								<nav class="navbar navbar-default navbar-expand-lg">

									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

			                            <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>

			                        </button>

									<a class="navbar-brand" href="<?=base_url()?>"><img class="img-fluid" src="<?=base_url()?>User_assets/images/logos.png" alt="Logo"></a>



									<span class="discover">Discover</span>

										

									<div class="collapse navbar-collapse" id="navbarNav">

										<ul class="nav navbar-nav">

											<li class="active dropdown"><a href="<?=base_url()?>"><i class="fa fa-home" aria-hidden="true"></i>Home</a>

												

											</li>
                                            <br>

                                                <li class="dropdown"><a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Students</a>

												<ul class="sub-menu">

                                                                                                    

													<li><a href="<?=base_url('Resume')?>">Resume</a></li>

													<li><a href="<?=base_url('Cpf')?>">Career Preference Format</a></li>

													<li><a href="<?=base_url('StdRegisterForCampus')?>">Student Registration For Campus Drives </a></li>

													<li><a href="<?=base_url('Saf')?>">Self Assessment Form (SAF)</a></li>

												</ul>

											</li><br>
                                            
											<li><a href="<?=base_url('Dbf')?>"><i class="fa fa-database" aria-hidden="true"></i>Database</a></li>
                                            <br>

                                          <li class="dropdown"><a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Placement</a>

												<ul class="sub-menu">

                                                 <li><a href="<?=base_url('Notice')?>">Notice</a></li>

													<li><a href="<?=base_url('Crf')?>">Company Registration Form</a></li>

													

												</ul>

											</li><br>

											

											<li><a href="<?=base_url('Policy')?>"><i class="fa fa-book" aria-hidden="true"></i>Placement Policy</a></li><br>


                                            <li><a href="<?=base_url('TnpTeams')?>"><i class="fa fa-users" aria-hidden="true"></i>TNP Team</a></li>
                                    <?php
                                     if(isset($email))	{
                                        ?>
											<li><a href="<?=base_url('Logout')?>"><i class="fa fa-sign-out" aria-hidden="true"></i>Sign Out</a></li>
                                    <?php
                                         }
                                         else{
                                        ?>
                                            <li><a href="<?=base_url('login')?>"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                                    <?php
                                     }
                                    ?>
										</ul>

									</div>

								</nav><!-- /navbar -->						

							</div><!-- /left-memu -->

						</div><!-- /.theiaStickySidebar --> 				

					</div> 	