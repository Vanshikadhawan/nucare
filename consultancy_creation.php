
<?php 
session_start();
ob_start();
	include "header.php";
?>

	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					<li>Consult To Doc...</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							
							<div class="row">
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

$varpid="";
$varexid="";
$varhealth="";
$varadate="";
$varatime="";

if(!isset($_SESSION['cid']))
{
	header("Location:index.php");
}

if(isset($_GET['profid']))
	{
		$varexid=$_GET['profid'];
	}

if(isset ($_POST['btn']))
{
	

$varpid= $_SESSION['cid'];
$varexid= $_POST['txtexid'];
$varhealth=$_POST['txthealth'];
$varadate=$_POST['txtadate'];
$varatime=$_POST['txtatime'];


	move_uploaded_file($_FILES['img1']['tmp_name'], "images/".$_FILES['img1']['name']);
	 $img="images/".$_FILES['img1']['name'];

$dt= date('Y-m-d h:i:s');
 $sql="INSERT INTO tab_consultation(patient_id, expert_id, health_issue,report_upload_path, appointment_date, appointment_time, approval, creation_date) values('$varpid','$varexid','$varhealth','$img', '$varadate', '$varatime','Pending','$dt')";
		if(!mysqli_query($con, $sql))
	{
		die('error:'.mysqli_error($con));
	}
	echo"1 record added";
	//mysqli_close($con);
}
?>
<div class="container con">
<div class="row">
	<div class="col-sm-2">
    </div>
  	<div class="col-sm-8">

<form name="f1" id="f1" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8"><h1 style="font-family:cursive">  Our Experts Consultation</h1></div>
	<div class="col-sm-2"></div>
</div>
</br></br>
<div class="form-group">
		<label for="txthealth">HEALTH_ISSUE<span class="required">*</span></label>
         <input type="text" class="form-control" id="txthealth" name="txthealth"
      placeholder="Enter Your Health Issue" required="required" />

      <input type="hidden" name="txtexid" value="<?php echo $varexid; ?>" />
 </div>
 
    
<div class="form-group">
<label for="txtadate">APPOINTMENT DATE </label>
          <input type="date" class="form-control" id="txtadate" name="txtadate">
      
</div>
<div class="form-group">
<label for="txtatime">APPOINTMENT TIME </label>
          <input type="time" class="form-control" id="txtatime" name="txtatime">
</div>

    <div class="form-group">
    <label for="img1">REPORT UPLOAD PATH</label>
    <input type="file" class="form-control" id="img1" name="img1">
    </div>
    
   
 
  <div class="row">
            	<div class="col-sm-6">
       	<button type="submit" name="btn" class="btn btn-block btn-primary">Submit</button>    
   </div>
</div>
  



</form>
</div>
</div>
</div>
</div>
</div>


	<!-- footer -->
	<?php 
	include "footer.php";
?>