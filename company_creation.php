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
	.required{
    color:red;
    font-weight:bold;

  }
	.center{
		background-color: peachpuff;
	}
</style>
</head>

<body>
<?php
include 'connection.php';

$varname="";
$varabout="";
$varsince="";
$varavail="";



if(isset ($_POST['btn']))
{

$varname=$_POST['txtname'];
$varabout=$_POST['txtabout'];
$varsince=$_POST['txtsince'];
$varavail=$_POST['rbavi'];

	move_uploaded_file($_FILES['img1']['tmp_name'], "images/".$_FILES['img1']['name']);
	 $img="images/".$_FILES['img1']['name'];

$dt= date('Y-m-d h:i:s');
	$sql="INSERT INTO tab_company(company_name,company_since,about_company,company_logo,availability,creation_date)	Values('$varname', '$varsince','$varabout','$img','$varavail','$dt')";
	if(!mysqli_query($con, $sql))
	{
		die('error:'.mysqli_error($con));
	}
	echo"1 record added";
	//mysqli_close($con);
}
?>
<div class="container center ">
<div class="row">
	<div class="col-sm-2"></div>
  	<div class="col-sm-8 ">

<form name="f1" id="f1" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8"><h1 style="font-family:cursive"> COMPANY CREATION</h1></div>
	<div class="col-sm-2"></div>
</div>
</br></br>
<div class="form-group ">
		<label for="txtname">COMPANY NAME<span class="required">*</span></label>
         
    <input type="text" class="form-control" id="txtname" name="txtname"
      placeholder="Enter company name"  required="required">
 </div>
           
   <div class="form-group">
    <label for="txtabout">ABOUT COMPANY<span class="required">*</span></label>
    <textarea class="form-control" id="txtabout" name="txtabout" rows="5"></textarea>
  </div>

  <div class="form-group">
    <label for="txtsince">COMPANY SINCE<span class="required">*</span></label>
    <input type="text" class="form-control" id="txtsince" name="txtsince">
      
    </div>
    

<div class="form-group">
    <label for="img1">COMPANY LOGO<span class="required">*</span></label>
    <input type="file" class="form-control" id="img1" name="img1" required="required">
    
    </div>
    <fieldset class="form-group">
    <legend>AVAILABILITY</legend>
    <div class="form-check">
      <label class="form-check-label">
<input type="radio" class="form-check-input" name="rbavi" id="rbavi" value="1" checked>
        YES
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="rbavi" id="rbavi" value="0">
       NO
      </label>
    </div>
   
  </fieldset>
  <div class="row">
            	<div class="col-sm-6">
       	<button type="submit" name="btn" class="btn btn-block btn-primary">Submit</button>   
         	</div>
       </div>


</form>
</div>
</div>
</div>

</body>
</html>