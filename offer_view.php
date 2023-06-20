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
$sqlview="SELECT * FROM tab_offer";
$result= mysqli_query($con,$sqlview);
echo"<table border='1' class='table'  >";
echo"
<thead>
<tr>";
echo "
<td> S.No. </td>
<td> OFFER TITLE </td>
<td> Description </td>
<td>DISCOUNT</td>
<td>START DATE</td>
<td>END DATE</td>
<td> ACTIVE </td>
<td> Image </td>
<td> Update / Delete </td>";

echo "</tr> </thead> <tbody>";
$sno=1;
while($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$sno++."</td> 
	<td>".$row['title']."</a></td>
	<td>".$row['description']."</td>
	<td>".$row['discount']."</td>
	<td>".$row['start_date']."</td>
	<td>".$row['end_date']."</td>
	<td>".$row['active']."</td>
	
	<td><img src='".$row['image']."' width='50px' height='50px' /></td>
	<td>
	<a href='offer_update.php?id=".$row['offer_id']."'> <img src='images/update.jpg' width= 60px height=60px /> </a> ||
	
	<a href='offer_delete.php? id=".$row['offer_id']."'>Delete</a></td>";
	echo"</tr>";
}
echo "</tbody></table>";
mysqli_close($con);
?>
</body>
</html>