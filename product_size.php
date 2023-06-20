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
  color: red;
  font-weight: bold;
}
	
	.center{
		background-color: lightblue;
	}

</style>
</head>

<body>
<?php
include 'connection.php';

$vartitle="";
$vardesc="";
$varunit="";
$varava="";



if(isset ($_POST['btn']))
{

$vartitle=$_POST['txttitle'];
$vardesc=$_POST['txtdescription'];
$varunit=$_POST['txtunit'];
$varava=$_POST['rbava'];

$dt= date('Y-m-d h:i:s');
	$sql="INSERT INTO tab_product_size(size_title,size_description,size_unit,available,creation_date)	Values('$vartitle', '$vardesc','$varunit','$varava','$dt')";
	if(!mysqli_query($con, $sql))
	{
		die('error:'.mysqli_error($con));
	}
	echo"1 record added";
	//mysqli_close($con);
}
?>
<div class="container center">
<div class="row">
	<div class="col-sm-2"></div>
  	<div class="col-sm-8">

<form name="f1" id="f1" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8"><h1> PRODUCT SIZE</h1></div>
	<div class="col-sm-2"></div>
</div>
</br></br>
<div class="form-group ">
		<label for="txtname">Title<span class="required">*</span></label>
         
    <input type="text" class="form-control" id="txttitle" name="txttitle"
      placeholder="Enter size title" pattern="[A-Za-z ]{0,}">
 </div>
           
   <div class="form-group">
    <label for="txtdescription">DESCRIPTION</label>
    <textarea class="form-control" id="txtdescription" name="txtdescription" rows="3"></textarea>
  </div>
  <div class="form-group">
  <label for="txtunit">SIZE UNIT<span class="required">*</span></label>
         
    <input type="text" class="form-control" id="txtunit" name="txtunit"
      placeholder="Enter size unit" >
 </div>
   
  
    <fieldset class="form-group">
    <legend>AVAILABLE</legend>
    <div class="form-check">
      <label class="form-check-label">
<input type="radio" class="form-check-input" name="rbava" id="rbava" value="1" checked>
        YES
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="rbava" id="rbava" value="0">
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
<br/><br/>
<div class="container" >
<div class="row" >
  <div class="col-sm-12">
    <?php
include 'connection.php';
$sqlview="SELECT * FROM tab_product_size";
$result= mysqli_query($con,$sqlview);
echo"<table border='1' class='table'  >";
echo"
<thead class='thead-danger'>
<tr>";
echo "
<td> S.No. </td>
<td> SIZE TITLE </td>
<td> Description </td>
<td>SIZE UNIT</td>
<td> AVAILABLE </td>
<td> Update / Delete </td>";

echo "</tr> </thead> <tbody>";
$sno=1;
while($row=mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>".$sno++."</td> 
  <td>".$row['size_title']."</a></td>
  <td>".$row['size_description']."</td>
  <td>".$row['size_unit']."</td>
  <td>".$row['available']."</td>
  
  <td>
  <a href='product_size_update.php?id=".$row['size_id']."'> <img src='images/update.jpg' width= 60px height=60px /> </a> ||
  
  <a href='product_size_delete.php? id=".$row['size_id']."'>Delete</a></td>";
  echo"</tr>";
}
echo "</tbody></table>";
mysqli_close($con);
?>
</div>
</div>


</body>
</html>
