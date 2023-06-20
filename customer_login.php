<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-theme.min.css"> 
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js" ></script>
    <?php
    session_start();
        $id="";
        $pass="";
        if(isset($_POST['btn2']))
        {
            $id=$_POST['id'];
            $pass=$_POST['pass'];
            include 'connection.php';
            echo $sqllogin="SELECT * FROM tab_customer where login_id='".$id."' and password='".$pass."'";
            $result=mysqli_query($con,$sqllogin);
            $rowcount= mysqli_num_rows($result);
            if($rowcount==1)
            {
                if($row=mysqli_fetch_array($result))
                {
                    $_SESSION['loginid']=$row['login_id'];
                    
                    $_SESSION['name']=$row['customer_name'];
            
                  header('location:customer_welcome.php');
                }
            }
            else
            {
                header('location:customer_wrong.php');
            }
       }
    ?>
</head>
<body>
    <div class="container">
    	<div class="row">
    		<div class="col-sm-3"></div>
    		<div class="col-sm-6">
                <div class="border border-dark m-4 p-4 sm-6">
    			<form id="f1" name="f1" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    				<h1 style="text-align: center;"><b>Login</b></h1><br/>
    				<div class="form-group row">
    					<label for="example-text-input" class=" col-form-label col-sm-3">Email Id</label>
    					<div class="col-sm-9">
							<input class="form-control" name="id" type="email" id="txt1" value="<?php echo $id; ?>">
						</div>
                    </div>
                    <div class="form-group row">
						<label for="example-password-input" class="col-form-label col-sm-3">Password</label>
    					<div class="col-sm-9">
							<input class="form-control" name="pass" type="password" id="txt2" value="<?php echo $pass; ?>">
						</div>
    				</div><br>
                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-info" name="btn2" style="height: 110%;">Login</button>
                        </div>
                    </div>
    			</form>
            </div>
    		</div>
    	</div>
    </div>
</body>
</html>