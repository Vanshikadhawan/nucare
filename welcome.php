<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,600;0,700;1,300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
      
	<title>responsive site</title>
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
	<!-- navigation bar -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">Special</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#thetarget" aria-controls="thetarget" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="thetarget">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="category.php" target="myframe">view <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.html">insert</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">category
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Disabled</a>
					</li>
				</ul>
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