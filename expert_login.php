<?php
session_start();
ob_start();
include "expert_header.php";
?>
    <?php
        

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
        if(isset($_POST['btn2']))
        {
            $id=$_POST['id'];
            $pass=$_POST['pass'];
            include 'connection.php';
            echo $sqllogin="SELECT * FROM tab_expert_advisor where login_id='".$id."'";
            $result=mysqli_query($con,$sqllogin);
            $rowcount= mysqli_num_rows($result);
            if($rowcount==1)
            {
                if($row=mysqli_fetch_array($result))
                {
                        if(decrypt($row['password'])== $pass)
                        {
                            $_SESSION['eid']=$row['login_id'];
                            
                            $_SESSION['ename']=$row['expert_name'];
                    
                          header('location:expert_welcome.php');
                        }
                        else
                        {
                            header('location:expert_wrong.php');
                        }

                }
            }
            else
            {
                header('location:expert_wrong.php');
            }
       }
    ?>

<body>




<!-- page -->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="index.php">Home</a>
                        <i>|</i>
                    </li>
                    <li>Expert Advisor Login</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->
    
    <div class="privacy py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">


    	<div class="row">
    		<div class="col-sm-3"></div>
    		<div class="col-sm-6">
                <div class="border border-dark m-4 p-4 sm-6 bg">
    			<form id="f1" name="f1" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    				<h1 style="text-align: center;"><b>Login</b></h1><br/>
    				<div class="form-group row">
    					<label for="example-text-input" class=" col-form-label col-sm-3">Email Id<span class="required">*</span></label>
    					<div class="col-sm-9">
							<input class="form-control" name="id" type="email" id="txt1" value="<?php echo $id; ?>">
						</div>
                    </div>
                    <div class="form-group row">
						<label for="example-password-input" class="col-form-label col-sm-3">Password<span class="required">*</span></label>
    					<div class="col-sm-9">
							<input class="form-control" name="pass" type="password" id="txt2" value="<?php echo $pass; ?>">
						</div>
    				</div><br>
                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-info" name="btn2" style="height: 110%;">Login</button>

                            <a href="Expert_register.php" > New User Sign Up Here </a>
                        </div>
                    </div>
    			</form>
            </div>
    		</div>
    	</div>
    </div>

</div>

<?php 
    include "footer.php";
?>