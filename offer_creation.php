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
		background-color: lightgreen;
	}
</style>
</head>

<body>
<?php
include 'connection.php';

$vartitle="";
$vardesc="";
$vardiscount="";
$varsdate="";
$varedate="";
$varact="";



if(isset ($_POST['btn']))
{

$vartitle=$_POST['txttitle'];
$vardesc=$_POST['txtdescription'];
$vardiscount=$_POST['txtdiscount'];
$varsdate=$_POST['txtsdate'];
$varedate=$_POST['txtedate'];
$varact=$_POST['rbact'];

	move_uploaded_file($_FILES['img1']['tmp_name'], "images/".$_FILES['img1']['name']);
	 $img="images/".$_FILES['img1']['name'];

$dt= date('Y-m-d h:i:s');
	$sql="INSERT INTO tab_offer(title,description,discount,start_date,end_date,image,active,creation_date)	Values('$vartitle', '$vardesc','$vardiscount','$varsdate','$varedate', '$img','$varact','$dt')";
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
  	<div class="col-sm-8 ">

<form name="f1" id="f1" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8 "><h1 style="font-family: cursive;"> Offer Creation</h1></div>
	<div class="col-sm-2"></div>
</div>
</br></br>
<div class="form-group ">
		<label for="txtname">Title<span class="required">*</span></label>
         
    <input type="text" class="form-control" id="txttitle" name="txttitle"
      placeholder="Enter offer title" required="required" >
 </div>
           
   <div class="form-group">
    <label for="txtdescription">DESCRIPTION<span class="required">*</span></label>
    <textarea class="form-control" id="txtdescription" name="txtdescription" rows="3"></textarea>
  </div>
  <div class="form-group">
  <label for="txtdiscount">DISCOUNT<span class="required">*</span></label>
         
    <input type="text" class="form-control" id="txtdiscount" name="txtdiscount"
      placeholder="Enter discount" required="required" >
 </div>
   
  <div class="form-group">
    <label for="txtsdate">START DATE<span class="required">*</span></label>
    <input type="date" class="form-control" id="txtsdate" name="txtsdate"
      placeholder="Enter start date of offer" required="required">
    
    </div>
    <div class="form-group">
    <label for="txtedate">END DATE<span class="required">*</span></label>
    <input type="date" class="form-control" id="txtedate" name="txtedate"
      placeholder="Enter end date of offer" required="required">
    
    </div>

<div class="form-group">
    <label for="img1">Image<span class="required">*</span></label>
    <input type="file" class="form-control" id="img1" name="img1">
    
    </div>
    <fieldset class="form-group">
    <legend>ACTIVE</legend>
    <div class="form-check">
      <label class="form-check-label">
<input type="radio" class="form-check-input" name="rbact" id="rbact" value="1" checked>
        YES
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="rbact" id="rbact" value="0">
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

</body>
</html>

