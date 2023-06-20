<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>

<body>
<?php
include 'connection.php';
$sqlview="SELECT * FROM tab_product";
$result= mysqli_query($con,$sqlview);
echo"<table border='1' class='table table-striped'  >";
echo"
<thead class='thead-dark'>
<tr>";
echo "
<td> Update / Delete </td>
<td> Images </td>
<td> S.No. </td>
<td> PRODUCT NAME </td>
<td>PRODUCT COMPANY</td>
<td> PARENT CATEGORY</td>
<td> SUB CATEGORY </td>
<td> PRODUCT DESCRIPTION </td>
<td>MANUFACTURED DATE</td>
<td>EXPIRY DATE</td>
<td>PRODUCT PRICE</td>
<td>PRODUCT SIZE</td>
<td> PRODUCT IMAGE</td>
";

echo "</tr> </thead> <tbody>";
$sno=1;
while($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "
<td>
	<a href='product_update.php?id=".$row['product_id']."'> <img src='images/update.jpg' width= 60px height=60px /> </a> ||
	
	<a href='product_delete.php? id=".$row['product_id']."'>Delete</a></td>
	<td>
	<a href='product_image.php?id=".$row['product_id']."'> Images </a> 
	
	

	<td>".$sno++."</td> 
	<td>".$row['product_name']."</a></td>
	<td>".$row['product_company']."</td>
	<td>".$row['parent_category']."</td>
	<td>".$row['sub_category']."</td>
	<td>".$row['product_description']."</td>
	<td>".$row['manufactured_date']."</td>
  <td>".$row['expiry_date']."</td>
	<td>".$row['product_price']."</td>
  <td>".$row['product_size']."</td>
	
	
	<td><img src='".$row['product_image']."' width='50px' height='50px' /></td>
	";
	echo"</tr>";
}
echo "</tbody></table>";
mysqli_close($con);
?>
</body>
</html>