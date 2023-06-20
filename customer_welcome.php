<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-theme.min.css"> 
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js" ></script>
    <?php
       session_start();
   
       if(isset($_POST['btn3']))
       {
       	unset($_SESSION['customer_name']);
       	session_destroy();
       	header('location:customer_login.php');
       }
       
       if(isset($_SESSION['loginid']))
       {
            echo "<h1><font color='sky-blue'><i><b> WELCOME &nbsp;".$_SESSION['name']."&nbsp; to our Website</b></i></font></h1>";
            
       }
       else
        echo "Invalid ";
    ?>
</head>
<body>
<div class="container">
	<div class="row">
	
		<div class="col-sm-12">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
				<br><br><br><br><br><br>
				<div class="form-group row">
					<div class=" col-sm-12 text-center">
						<button  type="submit" name="btn3" class="btn btn-info col-sm-1" style="height: 110%;">Logout</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>