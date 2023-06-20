<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,600;0,700;1,300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
		*
		{
			margin: 0;
			padding: 0;
			font-family: 'Josefin Sans', sans-serif;
			color: black;
			box-sizing: border-box;
		}
	 /* Make the image fully responsive */
	 .carousel-inner img 
	 {
	 	width: 100%;
	 	height: 100%;
	 	
	 }
	 #frames
	 {
	 	height: 1000px;
	 	width: 100%;
	 }
	</style>
   
</head>
<body>

 <?php
       session_start();
   
       if(isset($_POST['btn3']))
       {
       	unset($_SESSION['admin_name']);
       	session_destroy();
       	header('location:index.php');
       }
       
       if(isset($_SESSION['adid']))
       {
            echo "<h5><font color='sky-blue'><i><b> WELCOME &nbsp;".$_SESSION['adnm']."&nbsp; to our Website</b></i></font></h5>";
            echo "<img src=".$_SESSION['img']." width=80px height=80px align='left' />" ;
       }
       else
        echo "Invalid ";
    ?>
    <div class="container">
	<div class="row">
	
		<div class="col-sm-12">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
				<br><br>
				<div class="form-group row">
					<div class=" col-sm-12 text-right">
						<button  type="submit" name="btn3" class="btn btn-info col-sm-1" style="height: 110%;">Logout</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- navigation bar -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">NUCARE PHARMACY</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#thetarget" aria-controls="thetarget" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="thetarget">
				<ul class="navbar-nav ml-auto navbar-light bg-dark">

						<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">NEW CREATION
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="category_creation.php" target="myframe">CATEGORY</a>
							<a class="dropdown-item" href="offer_creation.php" target="myframe">OFFERS</a>
							<a class="dropdown-item" href="company_creation.php" target="myframe">PHARMACY COMPANY</a>
							<a class="dropdown-item" href="product_creation.php" target="myframe">PRODUCT</a>
							
							
							
					
						</div>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">VIEWS
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="category_view.php" target="myframe">CATEGORY </a>
							<a class="dropdown-item" href="offer_view.php" target="myframe">OFFER </a>
							<a class="dropdown-item" href="company_view.php" target="myframe">PHARMACY COMPANY </a>
							<a class="dropdown-item" href="product_view.php" target="myframe">PRODUCT</a>
							
							
							
							
						</div>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">UPDATE
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="category_view.php" target="myframe">CATEGORY </a>
							<a class="dropdown-item" href="offer_view.php" target="myframe">OFFER </a>
							<a class="dropdown-item" href="company_view.php" target="myframe">PHARMACY COMPANY</a>
							<a class="dropdown-item" href="product_view.php" target="myframe">PRODUCT</a>
							
							
							
							
						</div>
					</li>

				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>

		<!-- slider -->

	</header>
	<iframe name="myframe" title="category" id="frames">
</iframe>


	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>