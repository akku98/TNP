<?php include 'include/topheader.php';?>
 	<body>
	  	<div class="main-wrapper tr-page-top homepage">
		  	<div class="container-fluid">
		  		<div class="row">
					<?php include 'include/sidebar.php';?>
					<div class="col-lg-9">
						<?php include 'include/header.php';?>
				


							<div class="tr-comment-box">
					<form class="contact-form" name="contact-form" method="post" onsubmit="return validate(this);" >
									<div class="section-title">
										<h1>Registration</h1>
									</div>

                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" required="required" id="name" name="name">
                                        </div>

                                        <div class="form-group">
                                            <label for="Contact">Contact</label>
                                            <input type="Number" class="form-control" required="required" id="contact" name="contact">
                                        </div>
                                            <div class="form-group">
                                            <label for="branch">Branch</label>
                                            <select id="branch" name="branch" data-placeholder="Select Branch" class="form-control" required="yes">

                                                     <option value="ME">Mechanical Engineering</option>
                                                     <option value="CE">Civil Engineering</option>
                                                     <option value="CSE">Computer Science Engineering</option>
                                                     <option value="ETNT">Electronics and Telecommunication Engineering</option>
                                                     <option value="BIO">Biotechnology and Engineering</option>
                                                     <option value="CHEM">Chemical Engineering</option>
                                                     <option value="RITCOM">RITCOM</option>
                                                     <option value="RIBS">RIBS</option>
                                                     <option value="RITCON">RITCON</option>
                                                     <option value="RITCOHM">RITCOHM</option>

                                             </select>
                                         </div>

                                    <div class="form-group">
                                            <label for="sem">Semester</label>
                                            <select name="sem" data-placeholder="Select a Semester" class="form-control" required="yes">

                                                     <option value="2">Semester 2</option>
                                                     <option value="4">Semester 4</option>
                                                     <option value="6">Semester 6</option>
                                                     <option value="8">Semester 8</option>

                                             </select>
                                         </div>
                        
                                    <input type="hidden" class="form-control" required="required" id="event" name="event" value="">

                                         <div class="form-group text-center">
                                            <button type="submit" class="btn btn-primary pull-right">Register</button>
                                         </div>

                                       </div>
								</form>			
							</div><!-- /.tr-comment-box -->	
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