<?php
session_start();
ob_start();
include "expert_header.php";
?>
		<?php
  
	include'connection.php';

$varname="";
$varloginid="";
$varpass="";
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





if(isset($_POST['btnsub']))
{
	$varname= $_POST['txtname'];
	$varloginid=$_POST['txtid'];

   $pass1=random_password(8);
            $varpass=encrypt($pass1);
	//$varpass= $_POST['txtpass'];
	
  
	

$dt= date('Y-m-d h:i:s');
$id= $_POST['txtid'];
echo $sqllogin="SELECT * FROM tab_expert_advisor where login_id='".$id."'";
            $result=mysqli_query($con,$sqllogin);
            $rowcount= mysqli_num_rows($result);
    if($rowcount==0)
    {

            	$sql="INSERT INTO tab_expert_advisor(expert_name,login_id,password,creation_date)	Values('$varname', '$varloginid' ,
              '$varpass','$dt')";
            	if(!mysqli_query($con, $sql))
            	{
            		die('error:'.mysqli_error($con));
            	}
               $msg1= " Hello $varname,\n\n Welcome to Nucare Pharmacy ,  \n\nYour login Password is : $pass1  ";
                      email_send($varloginid," Your Password for Author Login", $msg1);
            	echo"1 record added";
              header("location:expert_login.php");
              
    }
    else
    {
      echo "<h3> $id is allready in use try another !!!!";
    }

	//mysqli_close($con);
}
?>


	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					<li>Expert Registration</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			

<div class="row">
	<div class="col-sm-2">
    </div>
  	<div class="col-sm-8 center">

<form name="f1" id="f1" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4 one"> <h2 style="font-family:cursive">EXPERT LOGIN</h2></div>
	<div class="col-sm-4"></div>
</div>
</br></br>
<div class="form-group">
           
           
           <label for="txtname">EXPERT NAME</label>
          <input type="text" class="form-control" id="txtname" name="txtname"
      placeholder="Enter Name" pattern="[A-Za-z ]{0,}" required="required">
      
           </div>
            <div class="form-group">
    <label for="txtid">LOGIN ID<span class="required">*</span></label>
    <input type="email" class="form-control" id="txtid" name="txtid"
     aria-describedby="uidhelp" placeholder="Enter email" required="required">
    <small id="uidhelp" class="form-text text-muted">Please Provide Your Valid Email Id, as<b> COMPUTER GENERATED PASSWORD</b> will be send on it Eg : abc@xyz.com </small>
    </div>
    
  
   
  

  <br/><br/><br/>
  <div class="row">
            	<div class="col-sm-3"></div>
              <div class="col-sm-6">
       	<button type="submit" name="btnsub" class="btn btn-block btn-primary">Submit</button>    	</div>
        <div class="col-sm-3"></div>
  



</form>
</div>
</div>


		</div>
	</div>
	

	

	<?php 
	include "footer.php";
?>