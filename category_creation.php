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
		background-color:lightyellow;
	}
</style>
</head>

<body>
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
//alert(str);

xmlhttp.open("GET", "get_subcat.php?pid="+ idd,true);
xmlhttp.send();
}
</script>
<?php
include 'connection.php';

$varcatnm="";

$varpcat="";
$varscat="";
$varavil="";



if(isset ($_POST['btn']))
{

$varcatnm=$_POST['txtname'];

$varpcat=$_POST['ddlparent'];
$varscat=$_POST['ddlsub'];
$varavil=$_POST['rbavil'];

$varpcat= ($varpcat!=0)?"'$varpcat'": "NULL";
$varscat= ($varscat!=0)?"'$varscat'": "NULL";


	move_uploaded_file($_FILES['img1']['tmp_name'], "images/".$_FILES['img1']['name']);
	 $img="images/".$_FILES['img1']['name'];

$dt= date('Y-m-d h:i:s');
	$sql="INSERT INTO tab_Category(category_name,parent_category,sub_category,category_image,availability,creation_date)	Values('$varcatnm' , $varpcat,$varscat, '$img','$varavil','$dt')";
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
	<div class="col-sm-2">
    </div>
  	<div class="col-sm-8 ">

<form name="f1" id="f1" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8"><h1 style="font-family:monospace;"> Category Creation</h1></div>
	<div class="col-sm-2"></div>
</div>
</br></br>
<div class="form-group ">
		<label for="txtname">CATEGORY Name<span class="required">*</span></label>
         
    <input type="text" class="form-control" id="txtname" name="txtname"
      placeholder="Enter User Name"  required="required">
 </div>
           
           
  <div class="form-group">
  	<label for="ddlparent">PARENT CATEGORY<span class="required">*</span></label>
  	<select class="form-control" id="ddlparent" name="ddlparent" onchange="get_subcat(this.value)">
  		<option value="-1"> -- Select Parent Category -- </option>
<option value="0">Parent</option>
<?php
$sqlparent="select * from tab_category where parent_category is NULL";
$result= mysqli_query($con, $sqlparent);
while($row=mysqli_fetch_array($result))
{
	echo"<option value='".$row['category_id']."'>" .$row['category_name']."</option>";
}
?>
</select></div>
<div class="form-group">
	<label for="ddlsub"> SUB CATEGORY <span class="required">*</span></label>
	<div id="sdiv">
	<select class="form-control" id="ddlsub" name="ddlsub">
		<option value="-1"> -- Select Sub Category -- </option>

<option value="0">None</option>
</select>
</div>
</div>

<div class="form-group">
    <label for="img1">Image</label>
    <input type="file" class="form-control" id="img1" name="img1">
    
    </div>
    <fieldset class="form-group">
    <legend>AVAILABILITY</legend>
    <div class="form-check">
      <label class="form-check-label">
<input type="radio" class="form-check-input" name="rbavil" id="rbavil" value="1" checked>
        YES
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="rbavil" id="rbavil" value="0">
       NO
      </label>
    </div>
   
  </fieldset>
  <div class="row">
            	<div class="col-sm-6">
       	<button type="submit" name="btn" class="btn btn-block btn-primary">Submit</button>    	</div>
  



</form>
</div>
</div>
</div>
</body>
</html>