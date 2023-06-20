<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
<style>
  .center{
    background-color: pink;
  }
  .one{
    color: darkblue;
    text-decoration: underline;
  }
	.required{
    color:red;
    font-weight:bold;

  }
</style>
</head>

<body>
	<?php
	include'connection.php';

$varadnm="";
$varadid="";
$varpass="";
$varact="";
$varimg="";

if(isset($_POST['btnsub']))
{
	$varadnm= $_POST['txtname'];
	$varadid=$_POST['txtid'];
	$varpass= $_POST['txtpass'];
	$varact=$_POST['rbact'];
	move_uploaded_file($_FILES['img1']['tmp_name'], "images/".$_FILES['img1']['name']);
	 $img="images/".$_FILES['img1']['name'];

$dt= date('Y-m-d h:i:s');
$id= $_POST['txtid'];
echo $sqllogin="SELECT * FROM tab_admin where login_id='".$id."'";
            $result=mysqli_query($con,$sqllogin);
            $rowcount= mysqli_num_rows($result);
    if($rowcount==0)
    {

            	$sql="INSERT INTO tab_admin(admin_name,login_id,password,admin_image,active,creation_date)	Values('$varadnm', '$varadid' , $varpass, '$img','$varact','$dt')";
            	if(!mysqli_query($con, $sql))
            	{
            		die('error:'.mysqli_error($con));
            	}
            	echo"1 record added";
    }
    else
    {
      echo "<h3> $id is allready in use try another !!!!";
    }

	//mysqli_close($con);
}
?>
<div class="container">
<div class="row">
	<div class="col-sm-2">
    </div>
  	<div class="col-sm-8 center">

<form name="f1" id="f1" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4 one"> <h2>ADMIN LOGIN</h2></div>
	<div class="col-sm-4"></div>
</div>
</br></br>
<div class="form-group">
           
           
           <label for="txtname">ADMIN Name<span class="required">*</span></label>
          <input type="text" class="form-control" id="txtname" name="txtname"
      placeholder="Enter User Name" pattern="[A-Za-z ]{0,}">
      
           </div>
            <div class="form-group">
    <label for="txtid">LOGIN ID<span class="required">*</span></label>
    <input type="email" class="form-control" id="txtid" name="txtid"
     aria-describedby="uidhelp" placeholder="Enter email">
    <small id="uidhelp" class="form-text text-muted">Please Provide Your Valid Email Id, As you password will be send on it Eg : abc@xyz.com </small>
    </div>
     <div class="form-group">
    <label for="txtpass">Password<span class="required">*</span></label>
    <input type="password" class="form-control" id="txtpass" name="txtpass"
      placeholder="Enter User Password">
  </div>
  <div class="form-group">
    <label for="img1">Image</label>
    <input type="file" class="form-control" id="img1" name="img1">
    
    </div>
    <fieldset class="form-group">
    <legend>ACTIVE</legend>
    <div class="form-check">
      <label class="form-check-label">
<input type="radio" class="form-check-input" name="rbact" id="rbact" value="1" checked>
        YES
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="rbact" id="rbact" value="0">
       NO
      </label>
    </div>
   
  </fieldset>
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
</body>
</html>