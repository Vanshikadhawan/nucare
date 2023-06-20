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
    background-color:skyblue;
  }
  .one{
    color: darkblue;
    text-decoration: underline;
  }
  .required{
    color: red;
    font-weight: bold;
  }
	
</style>
</head>

<body>
	<?php
	include'connection.php';

$varname="";
$varloginid="";
$vargender="";
$vardob="";
$varquali="";
$varimg="";
if(isset($_POST['btnsub']))
{
	$varname= $_POST['txtname'];
	$varloginid=$_POST['txtid'];
	$vargender=$_POST['rbg'];
  $vardob=$_POST['txtdob'];
  $varquali=$_POST['txtquali'];
 move_uploaded_file($_FILES['img1']['tmp_name'], "images/".$_FILES['img1']['name']);
   $img="images/".$_FILES['img1']['name'];
	

$dt= date('Y-m-d h:i:s');
$id= $_POST['txtid'];
echo $sqllogin="SELECT * FROM tab_pharmacist_profile where login_id='".$id."'";
            $result=mysqli_query($con,$sqllogin);
            $rowcount= mysqli_num_rows($result);
    if($rowcount==0)
    {

            	$sql="INSERT INTO tab_pharmacist_profile(pharmacist_name,login_id,gender,dob,qualification,image,creation_date)	Values('$varname', '$varloginid' , '$vargender', '$vardob', '$varquali', '$img', '$dt')";
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
	<div class="col-sm-2"></div>
	<div class="col-sm-8 one"> <h2 style="font-family:cursive">PHARMACIST PROFILE</h2></div>
	<div class="col-sm-2"></div>
</div>
</br></br>
<div class="form-group">
           
           
           <label for="txtname">PHARMACIST NAME<span class="required">*</span></label>
          <input type="text" class="form-control" id="txtname" name="txtname"
      placeholder="Enter USER Name" pattern="[A-Za-z ]{0,}" required="required">
      
           </div>
            <div class="form-group">
    <label for="txtid">LOGIN ID<span class="required">*</span></label>
    <input type="email" class="form-control" id="txtid" name="txtid"
     aria-describedby="uidhelp" placeholder="Enter email" required="required">
    <small id="uidhelp" class="form-text text-muted">Please Provide Your Valid Email Id, As you password will be send on it Eg : abc@xyz.com </small>
    </div>
    
  
    <fieldset class="form-group">
    <legend>GENDER<span class="required">*</span></legend>
    <div class="form-check">
      <label class="form-check-label">
<input type="radio" class="form-check-input" name="rbg" id="rbg" value="1">
        MALE
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="rbg" id="rbg" value="0">
       FEMALE
      </label>
    </div>
   
  </fieldset>
  <div class="form-group">
    <label for="txtdob">DATE OF BIRTH<span class="required">*</span></label>
    <input type="date" class="form-control" id="txtdob" name="txtdob"
      placeholder="Enter date of birth" required="required">
    
    </div>
     <div class="form-group">
      <label for="txtquali"> QUALIFICATION<span class="required">*</span></label>
      <input type="text" class="form-control" name="txtquali" id="txtquali" placeholder="Enter YOUR QUALIFICATION" required="required">
    </div>
  <div class="form-group">
    <label for="img1">PROFILE IMAGE</label>
    <input type="file" class="form-control" id="img1" name="img1">
    
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
</body>
</html>