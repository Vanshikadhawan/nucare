<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
$varparent=$_GET["pid"];
include'connection.php';
 $sql="select * from tab_category where parent_category='$varparent' and sub_category  is null";
$result=mysqli_query($con,$sql);
echo"<select name='ddlsub' class='form-control'  id='ddlsub'>";

echo"<option value='-1'>--Select Sub Category--</option>";
echo"<option value='0'>None</option>";
while($row=mysqli_fetch_array($result))
{
	echo"<option value='".$row['category_id']."'>	".$row['category_name']."</option>";
}
echo"</select>";
mysqli_close($con);
	
?>
</body>
</html>