<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
<title>Untitled Document</title>
<style>.required{
		color:red;
		font-weight:bold;

	}
	.bg{
		background-color: peachpuff;
	}
</style>
</head>

<body>

<?php
include 'connection.php';

$varname="";
$varsince="";
$varabout="";
$varimg1="";
if(isset($_GET['id']))
{
	$result=mysqli_query($con,"SELECT * FROM tab_company where company_id='$_GET[id]'");
		while($row=mysqli_fetch_array($result))
		{
			
			$varid=$row['company_id'];
			$varname=$row['company_name'];
			$varsince=$row['company_since'];
			$varabout=$row['about_company'];
			$varimg1=$row['company_logo'];
			
			}
}
if(isset($_POST['btnupd']))
{
	if(isset($_FILES['img']) && !empty($_FILES['img']['name']))
	{
		
	move_uploaded_file($_FILES['img']['tmp_name'],$_FILES['img']['name']);
	$varimg2=$_FILES['img']['name'];
	}
	else
	{
		$varimg2= $_POST['txtimg'];
	}
	
	
	$sql="update tab_company set
	
			company_name='$_POST[txtname]',
			company_since='$_POST[txtsince]',
			about_company='$_POST[txtabout]',
			company_logo='$varimg2'
			where
			company_id='$_POST[txtid]'";
			if(!mysqli_query($con,$sql))
			{
				die('error:'.mysqli_error($con));
			}
			echo "1 record update";
			header("Location:company_view.php");
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
  <div class="col-sm-8"><h1 style="font-family:cursive;"> UPDATE COMPANY</h1></div>
  <div class="col-sm-2"></div>
</div>
<br><br>
<div class="form-group">
  <input type="hidden" name="txtid" id="txtid" value="<?php echo $varid;?>" />
      <label for="txtname">COMPANY NAME<span class="required">*</span></label>
      <input type="text" class="form-control" name="txtname" id="txtname" required="required" value="<?php echo $varname;?>"/>
      	
    </div>
    
    <div class="form-group">
      <label for="txtabout">ABOUT COMPANY<span class="required">*</span></label>
<textarea name="txtabout" class="form-control" id="txtabout" ><?php echo $varabout;?></textarea>
      </div>
      <div class="form-group">
  <label for="txtdiscount">COMPANY SINCE</label>
         
    <input type="text" class="form-control" id="txtsince" name="txtsince" value="<?php echo $varsince;?>" />
 </div>
  
      <div class="form-group">
      <label for="img1">COMPANY LOGO<span class="required">*</span></label>
  <input type ="hidden" class="form-control" name="txtimg" required="required" value="<?php echo $varimg1; ?>"  />
  
       <input type="file" name="img" id="I1" />

      <img src='<?php echo $varimg1;?>' width="100px" height="100px"/></td>
   </div>

    <div class="row">
    	<div class="col-sm-6">
     <input type="submit" name="btnupd" id="S1" value="Submit" />
   </div>
 </div>
 <div class="row">
   <div class="col-sm-6">
     <a href="company_view.php"> view</a>
    </div>
  </div>
</form>
</body>
</html>