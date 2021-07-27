

    <?php 

?>
<html>
    <head>
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>theme/user/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>theme/user/css/apna.css">


        
        
        
        
    </head>
    <body>   
<div class="container-fluid">

	<div class="row">

		<div class="col-md-3">
			<img src="<?=base_url()?>theme/user/images/f.jpg" class="img-responsive img-circle">
		</div>
		<div class="col-md-6">

			<div class="row">
				<h2 align="center">Enter product</h2>
                                <form method="post" action="<?=base_url('product_submit')?>">
	Enter Product Name
        <input type="text" name="n1" class="form-control" placeholder="Enter Product Name" required autofocus><br><br>
	Enter Product Price
	<input type="text" name="n2" placeholder="Enter Product Price" class="form-control" required><br><br>
	Enter Product Description
	<textarea class="form-control"name="n3" placeholder="Enter Description here"></textarea><br><br>
	<input type="submit" class="btn btn-lg btn-primary">
</form>
			</div>


		</div>
		<div class="col-md-3">
			<img src="<?=base_url()?>theme/user/images/f.jpg" class="img-responsive img-circle">
		</div>

	</div>

</div>



</body>
</html>