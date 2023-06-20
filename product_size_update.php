<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <style type="text/css">
  	.required{
  		color: red;
  		font-weight: bold;
  	}
  	.bg{
  		background-color: lightblue;
  	}
  </style>
<title>Untitled Document</title>
</head>

<body>

<?php
include 'connection.php';

$vartitle="";
$vardesc="";
$varunit="";

if(isset($_GET['id']))
{
	$result=mysqli_query($con,"SELECT * FROM tab_product_size where size_id='$_GET[id]'");
		while($row=mysqli_fetch_array($result))
		{
			
			$varid=$row['size_id'];
			$vartitle=$row['size_title'];
			$varunit=$row['size_unit'];
			$vardesc=$row['size_description'];
			
			}
}
if(isset($_POST['btnupd']))
{
	
	
	
	$sql="update tab_product_size set
	
			size_title='$_POST[txttitle]',
			size_description='$_POST[txtdescription]',
			size_unit='$_POST[txtunit]'
			
			where
			size_id='$_POST[txtid]'";
			if(!mysqli_query($con,$sql))
			{
				die('error:'.mysqli_error($con));
			}
			echo "1 record update";
			header("Location:product_size_view.php");
			//mysql_close($con);
}
?>
<div class="container bg">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<div class="row">
  <div class="col-sm-2"> </div>
  <div class="col-sm-8"><h1> UPDATE PRODUCT SIZE</h1></div>
  <div class="col-sm-2"></div>
</div>
<br><br>
<div class="form-group">
  <input type="hidden" name="txtid" id="txtid" value="<?php echo $varid;?>" />
      <label for="txttitle">SIZE TITLE<span class="required">*</span></label>
      <input type="text" class="form-control" name="txttitle" id="txttitle" value="<?php echo $vartitle;?>"/>
      	
    </div>
    
    <div class="form-group">
      <label for="txtdescription">DESCRIPTION</label>
<textarea name="txtdescription" class="form-control" id="txtdescription" ><?php echo $vardesc;?></textarea>
      </div>
      <div class="form-group">
  <label for="txtunit">SIZE UNIT<span class="required">*</span></label>
         
    <input type="text" class="form-control" id="txtunit" name="txtunit" value="<?php echo $varunit;?>" />
 </div> 
   
  
    <div class="row">
    	<div class="col-sm-6">
     <input type="submit" name="btnupd" id="S1" value="Submit" />
   </div>
 </div>
 <div class="row">
   <div class="col-sm-6">
     <a href="product_size_view.php"> view</a>
    </div>
  </div>
</form>
</body>
</html>