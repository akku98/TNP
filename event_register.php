<?php  

include './include/header.php';
$ecode = $_REQUEST['ecode'];

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once './src/autoload.php';
    $url='https://www.google.com/recaptcha/api/sitevarify';
    $privatekey="6LcxC0cUAAAAAMl9L0tZTDprTIp8QciR2YkXttKi";
    $recaptcha = new \ReCaptcha\ReCaptcha($privatekey);
    $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
    
    
    if($resp->isSuccess()){
        $name = $_POST["name"];
    $branch = $_POST["branch"];
    $contact = $_POST["contact"];
    $sem = $_POST["sem"];
    if($name != NULL && $name != ' ' ){
        $mysql_qry = "insert into register(name,contact,sem,branch,e_code)values('$name',$contact,$sem,'$branch','$ecode');";
        if($conn->query($mysql_qry)===TRUE)
        {
            //header("location:index.php");
            echo '<script>
                    alert("Thank You For Registering");
                </script>';
        }
        else
        {
            echo "Error: ".$mysql_qry." <br> ".$conn->error;
        }
    }
    }
    else{
         echo '<script>
    alert("Check reCAPTCHA!!!");
</script>';
    }
}
$query = mysqli_query($conn,"select * from events where e_code= '$ecode'");

if($query)
{
        while($row=mysqli_fetch_array($query))
        {
                $event[]=$row;
        }
}

?>
	<body class="tr-page contact-page">
		<div class="main-wrapper tr-page-top">
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
										<a class="navbar-brand" href="index.php"><img class="img-responsive" src="images/logo.png" alt="Logo"></a>
									</div><!-- /navbar-header -->
										
									<div class="collapse navbar-collapse" id="navbar-collapse">
										
										<ul class="nav navbar-nav">
                                                                                    <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                                                                                    <li class="active"><a href="events.php"><i class="fa fa-compass" aria-hidden="true"></i> Events</a></li>
                                                                                    <li><a href="sports.php"><i class="fa fa-futbol-o" aria-hidden="true"></i> Sports</a></li>
                                                                                    <li><a href="gallery.php"><i class="fa fa-photo" aria-hidden="true"></i> Gallery</a></li>
                                                                                    <li><a href="huntitdown/huntitdown.html"><i class="fa fa-ship" aria-hidden="true"></i>Hunt It Down</a></li>
                                                                                    <li><a href="https://www.facebook.com/ritofest2018/" target="blank_ " ><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                                    <li><a href="https://www.instagram.com/ritofest2018/" target="blank_ " ><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
                                                                                    <li><a href="about.php"><i class="fa fa-address-book-o" aria-hidden="true"></i> About</a></li>
                                                                                    <li><a href="sponsers.php"><i class="fa fa-money" aria-hidden="true"></i>Our Sponsors</a></li>
                                                                                    <li><a href="developers.php"><i class="fa fa-code" aria-hidden="true"></i>Our Developers</a></li>
                                                                                    <li><a href="http://rit.edu.in/" target="blank_"><i class="fa fa-graduation-cap" aria-hidden="true"></i>About RIT</a></li>
										</ul>
									</div>
								</nav><!-- /navbar -->						
							</div><!-- /left-memu -->
						</div><!-- /.theiaStickySidebar --> 				
					</div><!-- /.tr-sidebar --> 

					<div class="col-sm-9 tr-sticky">
						<div class="theiaStickySidebar">
							<div class="tr-topbar clearfix">
							<div class="topbar-center">
			                    <div class="breaking-news">
			                        <span># Newsfeed</span>
			                        <div id="ticker"> 
			                            <ul>
			                                <?php
                                                            include_once './include/dbc.php';
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
						</div>
                                                    
                                                     <?php
                                                    foreach ($event as $e){

                                                        echo '<div class="tr-content theiaStickySidebar">
									<div class="tr-section">
										<div class="tr-post">
											<div class="entry-header">
												<div class="entry-thumbnail">
													<img class="img-responsive" src="images/post/'.$e['e_img'].'" alt="Image">
												</div>
											</div>
											<div class="post-content">
												<div class="author">
													<img class="img-responsive img-circle" src="images/others/author1.png" alt="Image">
												</div>
												<div class="entry-meta">
													<ul>
														<li>Added By Admin</li>
														<li>Date: '.$e['e_date'].'</li>												
													</ul>
												</div><!-- /.entry-meta -->
												<h2 class="entry-title">
													'.$e['e_name'].'-'.$e['e_tag'].'
												</h2>
											</div><!-- /.post-content -->	
										</div><!-- /.tr-post --
								</div><!-- /.tr-content -->
							</div>';
                                                        $eventname=$e['e_name'];
                                                    }
                                                ?>

							<div class="tr-comment-box">
					<form class="contact-form" name="contact-form" method="post" onsubmit="return validate(this);" >
									<div class="section-title">
										<h1>Event Registration</h1>
									</div>
                                                                    
                                                                        <div class="form-group">
                                                                            <label for="name">Name</label>
                                                                            <input type="text" class="form-control" required="required" id="name" name="name">
                                                                        </div>
                                                                    
                                                                        <div class="form-group">
                                                                            <label for="Contact">Contact</label>
                                                                            <input type="Number" class="form-control" required="required" id="contact" name="contact">
                                                                        </div>
                                                                    
                                                                                                              
                                                                    <?php 
                                                                        if($ecode==='COC05'||$ecode==='CRL06'||$ecode==='MMT12'){
                                                                            echo '<div class="form-group">
                                                                            <label for="College">College</label>
                                                                            <input type="text" class="form-control" required="required" id="branch" name="branch">
                                                                         </div>';
                                                                        }
                                                                        else{
                                                                            echo '<div class="form-group">
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
                                                                         </div>';
                                                                        }
                                                                    ?>
                                                                    
                                                                    <div class="form-group">
                                                                            <label for="sem">Semester</label>
                                                                            <select name="sem" data-placeholder="Select a Semester" class="form-control" required="yes">

                                                                                     <option value="2">Semester 2</option>
                                                                                     <option value="4">Semester 4</option>
                                                                                     <option value="6">Semester 6</option>
                                                                                     <option value="8">Semester 8</option>

                                                                             </select>
                                                                         </div>
                                                                    <div class="form-group">
                                                                        <div class="g-recaptcha" data-sitekey="6LcxC0cUAAAAAIIHb_oMRFcQ-2czGOGdfvbi8ScO"></div>
                                                                    </div>
                                                                    <input type="hidden" class="form-control" required="required" id="event" name="event" value="<?php echo $_REQUEST['ecode'];?>">
                                                                    
                                                                         <div class="form-group text-center">
                                                                            <button type="submit" class="btn btn-primary pull-right">Register</button>
                                                                         </div>
                                                                    
                                                                       </div>
								</form>			
							</div><!-- /.tr-comment-box -->								
						</div><!-- /.theiaStickySidebar -->
					</div>		
				</div><!-- /.row -->							
			</div><!-- /.container-fluid -->	
		</div><!-- main-wrapper -->
            
		<footer id="footer">
			<div class="footer-menu">
				<div class="container">
					<ul class="nav navbar-nav">                       
						<li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                                                                <li><a href="events.php"><i class="fa fa-compass" aria-hidden="true"></i> Events</a></li>
                                                                <li><a href="sports.php"><i class="fa fa-futbol-o" aria-hidden="true"></i> Sports</a></li>
                                                                <li><a href="gallery.php"><i class="fa fa-photo" aria-hidden="true"></i> Gallery</a></li>
                                                                <li class="active"><a href="about.php"><i class="fa fa-address-book-o" aria-hidden="true"></i> About</a></li>
                                                                <li><a href="sponsers.php"><i class="fa fa-money" aria-hidden="true"></i>Our Sponsors</a></li>
                                                                <li><a href="developers.php"><i class="fa fa-code" aria-hidden="true"></i>Our Developers</a></li>
                                                                <li><a href="http://rit.edu.in/" target="blank_"><i class="fa fa-graduation-cap" aria-hidden="true"></i>About RIT</a></li>
					</ul> 
				</div>
			</div>
                  
<?php include './include/footer.php'; ?>