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
  		background-color: lightgreen;
  	}
  </style>
<title>Untitled Document</title>
</head>

<body>

<?php
include 'connection.php';

$vartitle="";
$vardesc="";
$vardiscount="";
$varsdate="";
$varedate="";
$varimg1="";
if(isset($_GET['id']))
{
	$result=mysqli_query($con,"SELECT * FROM tab_offer where offer_id='$_GET[id]'");
		while($row=mysqli_fetch_array($result))
		{
			
			$varid=$row['offer_id'];
			$vartitle=$row['title'];
			$vardiscount=$row['discount'];
			$varsdate=$row['start_date'];
			$varedate=$row['end_date'];
			$vardesc=$row['description'];
			$varimg1=$row['image'];
			
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
	
	
	$sql="update tab_offer set
	
			title='$_POST[txttitle]',
			description='$_POST[txtdescription]',
			discount='$_POST[txtdiscount]',
			start_date='$_POST[txtsdate]',
			end_date='$_POST[txtedate]',
			image='$varimg2'
			where
			offer_id='$_POST[txtid]'";
			if(!mysqli_query($con,$sql))
			{
				die('error:'.mysqli_error($con));
			}
			echo "1 record update";
			header("Location:offer_view.php");
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
  <div class="col-sm-8"><h1> UPDATE OFFER</h1></div>
  <div class="col-sm-2"></div>
</div>
<br><br>
<div class="form-group">
  <input type="hidden" name="txtid" id="txtid" value="<?php echo $varid;?>" />
      <label for="txttitle">OFFER TITLE<span class="required">*</span></label>
      <input type="text" class="form-control" name="txttitle" id="txttitle" required="required" value="<?php echo $vartitle;?>"/>
      	
    </div>
    
    <div class="form-group">
      <label for="txtdescription">DESCRIPTION</label>
<textarea name="txtdescription" id="txtdescription" class="form-control" ><?php echo $vardesc;?></textarea>
      </div>
      <div class="form-group">
  <label for="txtdiscount">DISCOUNT<span class="required">*</span></label>
         
    <input type="text" class="form-control" id="txtdiscount" name="txtdiscount" required="required" value="<?php echo $vardiscount;?>" />
 </div> 
   
  <div class="form-group">
    <label for="txtsdate">START DATE<span class="required">*</span></label>
    <input type="date" class="form-control" id="txtsdate" name="txtsdate" required="required" value="<?php echo $varsdate;?>"/>
      
    </div>
    <div class="form-group">
    <label for="txtedate">END DATE<span class="required">*</span></label>
    <input type="date" class="form-control" id="txtedate" name="txtedate"  required="required" value="<?php echo $varedate;?>"/>
    
    </div>
      <div class="form-group">
      <label for="img1">Image<span class="required">*</span></label>
  <input type ="hidden" class="form-control" name="txtimg" value="<?php echo $varimg1; ?>"  />
  
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
     <a href="offer_view.php"> view</a>
    </div>
  </div>
</form>
</body>
</html>