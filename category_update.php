<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
<title>Untitled Document</title>
<style>
	.required{
		color:red;
		font-weight:bold;

	}
	.bg
	{
		background-color: lightyellow;

	}
	</style>
</head>
<script>
function get_subcat(idd)
{
	//alert(str);

	if(idd=="")
	{
		document.getElementById("sdiv").innerHTML="";
		return;
	}
	if(window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("sdiv").innerHTML=xmlhttp.responseText;
		}
}
//alert(idd);

xmlhttp.open("GET", "get_subcat.php?pid="+ idd,true);
xmlhttp.send();
}
</script>
<body>

<?php
include 'connection.php';

 $varid="";
$varname="";
$varparent="";
$varsub="";
$varimg1="";
if(isset($_GET['id']))
{
	$result=mysqli_query($con,"SELECT * FROM tab_category where category_id='$_GET[id]'");
		while($row=mysqli_fetch_array($result))
		{
			
			$varid=$row['category_id'];
			$varname=$row['category_name'];
			$varparent=$row['parent_category'];
			$varsub=$row['sub_category'];
		
			$varimg1=$row['category_image'];
			
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
	

$varparent=$_POST['ddlparent'];
			$varsub=$_POST['ddlsub'];

$varparent= ($varparent!=0)?"'$varparent'": "NULL";
$varsub= ($varsub!=0)?"'$varsub'": "NULL";
	
	$sql="update tab_category set
	
			category_name='$_POST[txtname]',
			parent_category=$varparent,
			sub_category=$varsub,
			category_image='$varimg2'
			where
			category_id='$_POST[txtid]'";
			if(!mysqli_query($con,$sql))
			{
				die('error:'.mysqli_error($con));
			}
			echo "1 record update";
			header("Location:category_view.php");
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
  <div class="col-sm-8"><h1 style="font-family:monospace;"> UPDATE CATEGORIES </h1></div>
  <div class="col-sm-2"></div>
</div>
<br><br>
<div class="form-group">
  <input type="hidden" name="txtid" id="txtid" value="<?php echo $varid;?>" />
      <label for="txtname">CATEGORY NAME<span class="required">*</span></label>
      <input type="text" class="form-control" name="txtname" id="txtname" required="required" value="<?php echo $varname;?>"/>
      	
    </div>
    <div class="form-group">
      <label for="ddlparent">PARENT CATEGORY<span class="required">*</span></label>
    <select  class='form-control' name="ddlparent"  id="ddlparent" onchange="get_subcat(this.value)">
    <option value="-1" <?php if($varparent==-1) echo "selected"; ?> >--Select Parent Category--</option>
    <option value="0"  <?php if(is_null($varparent)) echo 'selected' ; ?> >	 Parent</option>

    
    <?php
    $sqlparent="select * from tab_category where parent_category is NULL";
	$result= mysqli_query($con,$sqlparent);
	while($row=mysqli_fetch_array($result))
	{
		//echo $row['id']."=====".$main;
		echo"<option value='".$row['category_id'];
		if($varparent==$row['category_id'])
		{
			echo "' selected>";
		}
		else
		{
			echo"'>";
		}
		echo $row['category_name']."</option>";
	}
	?>
    </select>
		</div>
    <div class="form-group">
      <label for="ddlsub"> SUB CATEGORY<span class="required">*</span></label>
         
      <div id="sdiv">
       <select class='form-control' name="ddlsub" id="ddlsub" onchange="get_category(this.value)">
    <option value="-1" <?php if($varsub==-1) echo "selected"; ?> >--Select Sub Category--</option>
    <option value="0"  <?php if(is_null($varsub)) echo 'selected' ; ?> >	 None</option>
	 
    
    <?php
    if(is_null($varparent))
      $sql1="select * from tab_category where parent_category is Null and sub_category is NULL";
    	else 
  echo $sql1="select * from tab_category where parent_category =".$varparent." and sub_category is NULL";
	$result= mysqli_query($con,$sql1);
	while($row=mysqli_fetch_array($result))
	{
		echo "<option value='".$row['category_id'];
		if($varsub==$row['category_id'])
		{
			echo "' selected >";
		}
		else
		{
			echo"' >";
		}
		echo $row['category_name']."</option>";
	}
	?>
    </select></div>
    </div>
   
      <div class="form-group">
      <label for="img1">Image</label>
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
     <a href="category_view.php"> view</a>
    </div>
  </div>
</form>
</body>
</html>