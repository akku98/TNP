<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>T & P | Admin Login</title>
        <!-- Theme CSS -->  
        <link id="theme-style" rel="stylesheet" href="<?=base_url()?>Adminassets/css/indexstyle.css">
        <link id="theme-style" rel="stylesheet" href="<?=base_url()?>Adminassets/css/bootstrap.css">
        
	    <!-- icons -->
	    <link rel="icon" href="<?=base_url()?>User_assets/images/logoes.png"> 
		<!-- icons -->
    </head>
    <body>
       <div class="container">
            <div class="login-container">
                <div id="output"></div>
                <div><img class="avatar" src="<?=base_url()?>User_assets/images/logoes.png"></div>
                <h4 class="title">Training & Placement Cell</h4><br>

                <div class="form-box">
                    <form method="POST" action="<?=base_url('AdminLoginCheck')?>">
                        <input name="uname" type="text" placeholder="Enter Your Username">
                        <input name="pass"  type="password" placeholder="Enter Your Password">
                        <button class="btn btn-info btn-block login" type="submit">Login</button>
                    </form>
                </div>
            </div>        
        </div>
    </body>
</html>
