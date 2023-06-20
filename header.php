<!DOCTYPE html>
<html lang="zxx">
<head>
	<title> Nucare Pharmacy, online Medicine Store </title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content=""	/>
	<link rel="icon" href="E:\php_pharmacy\Images\favicon.png">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->
	<style type="text/css">
		.con{
			background-color: lightyellow;
		}
	</style>

	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->

</head>

<body>
 <?php
      //session_start();  

        function encrypt($string)
       {
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'AA74CDCC2BBRT935136HH7B63C27'; 
        $secret_iv = '5fgf5HJ5g27'; // user define secret key
        $key = hash('sha256', $secret_key);
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
       
        $output = openssl_encrypt($string, $encrypt_method, $key, 0,$iv);
        $output = base64_encode($output);
      
       return $output;
       }       

        function decrypt($string)
       {
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'AA74CDCC2BBRT935136HH7B63C27'; 
        $secret_iv = '5fgf5HJ5g27'; // user define secret key
        $key = hash('sha256', $secret_key);
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
       
        $output = openssl_decrypt(base64_decode($string),$encrypt_method, $key, 0, $iv);
      
       return $output;
       }       
        $id="";
        $pass="";
        if(isset($_POST['btnlog']))
        {
            $id=$_POST['txtlogid'];
            $pass=$_POST['txtpass'];
            include 'connection.php';
            $sqllogin="SELECT * FROM tab_customer where login_id='".$id."'";
            $result=mysqli_query($con,$sqllogin);
            $rowcount= mysqli_num_rows($result);
            if($rowcount==1)
            {
                if($row=mysqli_fetch_array($result))
                {
                	echo decrypt($row['password']).":pass:". $pass;
                        if(decrypt($row['password'])== $pass)
                        {
                            $_SESSION['cid']=$row['login_id'];
                            
                            $_SESSION['cname']=$row['customer_name'];
                    
                          header('location:index.php');
                        }
                        else
                        {
                           // header('location:customer_wrong.php');
                        }

                }
            }
            else
            {
               // header('location:customer_wrong.php');
            }
       }
    ?>

<!-- customer registration code -->
	<?php
	include'connection.php';

$varname="";
$varloginid="";
$varpass="";
$varmob="";
 function random_password( $length = 8 ) 
        {
                $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
                $password = substr( str_shuffle( $chars ), 0, $length );
                return $password;
        }

        function email_send($to,$sub,$msg)
        {
            $to_email=$to;
            $subject=$sub;
            $message=$msg;
            $heders="From: ";

            if(mail($to_email,$subject,$message,$heders))
            {
              echo "<script> alert('E-Mail Send  To you , Check your inbox '); </script>";
            }
            else
              echo "<script> alert('Your Internet connection is not Working '); </script>";
        }
        


if(isset($_POST['btnreg']))
{
	$varname= $_POST['txtname'];
	$varloginid=$_POST['txtid'];
	 $pass1=random_password(8);
     $varpass=encrypt($pass1);
	//$varpass= $_POST['txtpass'];
    $varmob=$_POST['txtmob'];
	

$dt= date('Y-m-d h:i:s');
$id= $_POST['txtid'];
echo $sqllogin="SELECT * FROM tab_customer where login_id='".$id."'";
            $result=mysqli_query($con,$sqllogin);
            $rowcount= mysqli_num_rows($result);
    if($rowcount==0)
    {

            	$sql="INSERT INTO tab_customer(customer_name,login_id,password,mobile_number,creation_date)	Values('$varname', '$varloginid' ,
              '$varpass', '$varmob','$dt')";
            	if(!mysqli_query($con, $sql))
            	{
            		die('error:'.mysqli_error($con));
            	}
            	echo"1 record added";
            	  $msg1= " Hello $varname,\n\n Welcome to Nucare Pharmacy ,  \n\nYour login Password is : $pass1  ";
                      email_send($varloginid," Your Password for Author Login", $msg1);
            	echo"1 record added";
    }
    else
    {
      echo "<h3> $id is allready in use try another !!!!";
    }

	//mysqli_close($con);
}
?>

<!-- Change Password Code  -->

 <?php
     include 'connection.php';
    
     $varid="";
    $oldpass="";
    $newpass="";
    $conpass="";

    

    if (isset($_POST['btnchange']))
    { 
        $oldpass=$_POST['oldpass'];
                $newpass=$_POST['newpass'];
                $conpass=$_POST['conpass'];
        if(isset($_SESSION['cid']))
        {
       echo   $sql= "SELECT * FROM tab_customer where login_id='".$_SESSION['cid']."'";
        $result = mysqli_query($con,$sql);
        $count=mysqli_num_rows($result);
        if($count!=0)
        {
              if($row = mysqli_fetch_array($result))
                {
                    //echo "$oldpass and ".decrypt($row['password']);

                   if($oldpass==decrypt($row['password']))
                   {
                        if ($newpass==$conpass)
                        {
                            $newpass=encrypt($newpass);
                          $sqpupdate="update tab_customer set password='$newpass' where login_id='".$_SESSION['cid']."'";

                          mysqli_query($con,$sqpupdate);
                            echo "Password Change successfully.";
                        }
                        else
                        {
                            echo "Password does not match.";
                        }
                   }
                   else
                    echo "Wrong Password";
            }
                

        
 
    }
    else
        echo " Wrong User id ";
}
}
    ?>


	<!-- top-header -->
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				
				<div class="col-lg-12 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						

						<?php

							if(isset($_GET['log']))
							{
								unset($_SESSION['cid']);
								session_destroy();
							}
								if(isset($_SESSION['cid']))
								{
									echo '	<li class="text-center border-right text-white">
											<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
												<i class="fas fa-truck mr-2"></i>Welcome : '.$_SESSION['cname'].' </a>
										</li>
										


										<li class="text-center border-right text-white">
											<a href="index.php?log=off"   class="text-white">
												<i class="fas fa-sign-in-alt mr-2"></i> Log Out </a>
										</li>
										<li class="text-center border-right text-white">
											<a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-white">
												<i class="fas fa-sign-in-alt mr-2"></i> Change Password </a>
										</li>
										';

								}
								else
								{




									echo '	<li class="text-center border-right text-white">
											<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
												<i class="fas fa-truck mr-2"></i>Welcome : Guest </a>
										</li>
										


										<li class="text-center border-right text-white">
											<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
												<i class="fas fa-sign-in-alt mr-2"></i> Log In </a>
										</li>
										<li class="text-center border-right text-white">
											<a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
												<i class="fas fa-sign-out-alt mr-2"></i>Register </a>
										</li>';
					}
					?>

						<li class="text-center border-right text-white">
							<a href="customer_profile.php" class="text-white">
								<i class="fa fa-id-badge" aria-hidden="true"></i>Profile</a>
						</li>
						<li class="text-center  text-white">
							<a href="consultancy.php" class="text-white">Consult To Doctor</a>
						</li>
						
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>
	<!-- modals -->

<!--Change PassWord  -->
	<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Change Password</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label class="col-form-label">Current Password</label>
							<input type="password" class="form-control" placeholder=" " name="oldpass" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">New Password</label>
							<input type="password" class="form-control" placeholder=" " name="newpass" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Confirm  Password</label>
							<input type="password" class="form-control" placeholder=" " name="conpass" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" name="btnchange" class="form-control" value="Log in">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">Don't have an account?
							<a href="#" data-toggle="modal" data-target="#exampleModal2">
								Register Now</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>





	<!-- log in -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Log In</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label class="col-form-label">Username</label>
							<input type="text" class="form-control" placeholder=" " name="txtlogid" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="txtpass" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" name="btnlog" class="form-control" value="Log in">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">Don't have an account?
							<a href="#" data-toggle="modal" data-target="#exampleModal2">
								Register Now</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- register -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Register</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label class="col-form-label">Your Name</label>
							<input type="text" class="form-control" placeholder=" " name="txtname" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Login Id</label>
							<input type="email" class="form-control" placeholder=" " name="txtid" required="">
						</div>
						<div class="form-group">
							
							Your<b> Computer Genrated password </b>will send to your given Email ID . Please Provide Verified Id !!!  
						</div>
						
						 <div class="form-group">
                               <label for="txtmob">MOBILE NUMBER</label>
                                  <input type="text" class="form-control" id="txtmob" name="txtmob"
                                       placeholder="Enter MOBILE NUMBER" />
                         </div>
						<div class="right-w3l">
							<input type="submit" name="btnreg" class="form-control" value="Register">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms & Conditions</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-4 logo_agile">
					<h5 class="text-left">
						<a href="index.php" class="font-weight-bold font-italic">
							<img src="images/logo.png" alt=" " class="image-fluid" width="80px" height="80px">Nucare Pharmacy
							
						</a>
				</h5>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-8 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="#" method="post">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" type="submit">Search</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="cart.php" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="btn w3view-cart" type="submit" name="submit" value="">
										<i class="fas fa-cart-arrow-down"></i>
									</button>
								</form>
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-right mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>



						<?php
								include 'connection.php';
								$sqlparent="SELECT * FROM tab_category where category_id in (1,49,9,14,25,43,34) ";
								$result1= mysqli_query($con,$sqlparent);
								$z=1;
								while($row1=mysqli_fetch_array($result1))
									{
										
										
						echo '<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">


							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								'.$row1['category_name'].'
							</a>';
								if($row1['category_id']==1)
								{
									$sqlsub="SELECT * FROM tab_category where category_id in (1) ";
								}
								else if($row1['category_id']==49)
								{
									$sqlsub="SELECT * FROM tab_category where category_id in (4,49) ";
								}

								else if($row1['category_id']==9)
								{
									$sqlsub="SELECT * FROM tab_category where category_id in (9) ";
								}
								else if($row1['category_id']==14)
								{
									$sqlsub="SELECT * FROM tab_category where category_id in (14) ";
								}
								else if($row1['category_id']==25)
								{
									$sqlsub="SELECT * FROM tab_category where category_id in (25) ";
								}
								
								else if($row1['category_id']==43)
								{
									$sqlsub="SELECT * FROM tab_category where category_id in (29,43) ";
								}
								else if($row1['category_id']==34)
								{
									$sqlsub="SELECT * FROM tab_category where category_id in (34,38) ";
								}
								
							
								$result2= mysqli_query($con,$sqlsub);
								while($row2=mysqli_fetch_array($result2))
									{

							echo '<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									
									<h5 class="mb-3">'.$row2['category_name'].'</h5>';
									if($z==1 )
									{
										echo '<div class="row">';

									}
									
									echo'	<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">';
												
								$sqlcat="SELECT * FROM tab_category where parent_category= ".$row2['category_id'];
								$result3= mysqli_query($con,$sqlcat);
								while($row3=mysqli_fetch_array($result3))
									{
										echo '<li>
													<a href="product.php?pid='.$row2['category_id'].'&sid='.$row3['category_id'].'">'.$row3['category_name'].'</a>
												</li>';
									}

												
												
											echo '</ul>
										</div>
										';
										$z=0;
									}


										
									echo '</div>
								</div>
							</div>
						</li>';
							$z=1;
					}

						?>






				
					</ul>
				</div>
			</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->