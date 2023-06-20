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
                  $varpid="";
                  $vartitle="";
                  $varpath="";
                  $varava="";

                  if(isset($_GET['id']))
                        $varpid=$_GET['id'];

                  if(isset ($_POST['btn']))
                  {


                  $vartitle=$_POST['txttitle'];
                  $varava=$_POST['rbava'];
                  $varpid= $_POST['txtpid'];

                  move_uploaded_file($_FILES['txtpath']['tmp_name'], "images/".$_FILES['txtpath']['name']);
                     $varpath="images/".$_FILES['txtpath']['name'];
                     $vartype=$_FILES['txtpath']['type'];

                  $dt= date('Y-m-d h:i:s');

                  	$sql="INSERT INTO tab_product_image(image_title,product_id,image_path,available,creation_date)	Values('$vartitle','$varpid', '$varpath','$varava','$dt')";
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
	<div class="col-sm-8"><h1> PRODUCT IMAGE</h1></div>
	<div class="col-sm-2"></div>
</div>
</br></br>
<div class="form-group ">
		<label for="txttitle">Title<span class="required">*</span></label>
         <input type="hidden" name="txtpid" value="<?php echo $varpid; ?>" >
    <input type="text" class="form-control" id="txttitle" name="txttitle"
      placeholder="Enter image title" required="required">
 </div>
           
   <div class="form-group">
    <label for="txtpath">IMAGE Upload<span class="required">*</span></label>
    <input type="file" class="form-control" id="txtpath" name="txtpath" required="required">
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
<br/>
<br/>
<div class="container">
<div class="row">
  <div class="col-sm-12">

<?php
include 'connection.php';
$sqlview="SELECT * FROM tab_product_image";
$result= mysqli_query($con,$sqlview);
echo"<table border='1' class='table'  >";
echo"
<thead>
<tr>";
echo "
<td> S.No. </td>
<td> IMAGE TITLE </td>
<td> IMAGE PATH </td>
<td> AVAILABLE </td>
<td> Update / Delete </td>";

echo "</tr> </thead> <tbody>";
$sno=1;
while($row=mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>".$sno++."</td> 
  <td>".$row['image_title']."</a></td>
  <td><img src='".$row['image_path']."' width=50px height=50px /> </td>
  <td>".$row['available']."</td>
  
  <td>
  <a href='product_image_update.php?id=".$row['id']."'> <img src='images/update.jpg' width= 60px height=60px /> </a> ||
  
  <a href='product_image_delete.php? id=".$row['id']."'>Delete</a></td>";
  echo"</tr>";
}
echo "</tbody></table>";
mysqli_close($con);
?>
</div>
</div>
</div>


</body>
</html>