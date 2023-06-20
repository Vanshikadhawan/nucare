
<?php
session_start();
ob_start();
include "header.php";

//session_start();
include 'connection.php';
	

	if(isset($_GET['payid']) && isset($_GET['ordid']))
	{

		 
        
		$varname= $_SESSION['cname'];
		$varloginid= $_SESSION['cid'];
		$payid= $_GET['payid'];
	$dt=date("y-m-d");
	$sqlins="INSERT INTO tab_payment(order_id,customer_id,payment_mode,amount,status,creation_date)Values('$_GET[ordid]', '$_SESSION[cid]', 'Online', '$_SESSION[total]', 'Paid','$dt')";
	if(!mysqli_query($con,$sqlins))
	{
		die('error:'.mysqli_error($con));
	}
	
	$sql11= "update tab_order set status='paid' where customer_id='".$_SESSION['cid']."'  and status='In process'";
    if(!mysqli_query($con,$sql11))
	{
		die('ERROR:'.mysqli_error($con));
	}
		$sql11= "update tab_order_item set status='paid' where order_id='".$_GET['ordid']."'  and status='In process'";
    if(!mysqli_query($con,$sql11))
	{
		die('ERROR:'.mysqli_error($con));
	}



		echo "<br><br> <h1> Your Payment is Successfully paid  </h1><br><br> <hr>";
		echo "<h4> Your order will be delivered with in 7-8 Working Days. For  further query mail at order@nucare.com</h4> ";


	$msg1= " Hello $varname,\n\n Welcome to Nucare Pharmacy ,  \n\nYour Payment is Successfully paid \n\n Payment ID is : $payid Your order will be delivered with in 7-8 Working Days. For  further query mail at order@nucare.com ";
                      email_send($varloginid," Your Payment Confirmation ", $msg1);
		
	}
	


?>



<?php
include "footer.php";
?>

</body>
</html>