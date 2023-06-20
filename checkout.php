<?php 
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
					<li>Checkout</li>
				</ul>
			</div>
		</div>
	</div>






	<!-- //page -->
	<!-- checkout page -->
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>heckout
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Your shopping cart contains:
					<span>3 Products</span>
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product</th>
								<th>Quality</th>
								<th>Product Name</th>

								<th>Price</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>

				    <?php

				 <?php
						include 'connection.php';
							
						if(isset($_SESSION['cid']))
						{
						$dt=date("y-m-d");
						 $sqlselect= "Select * from tab_order where customer_id='".$_SESSION['cid']."'  and status='In process'";
						$resultselect=mysqli_query($con,$sqlselect);
						$count=mysqli_num_rows($resultselect);
							if($count==0)	
							{
						    $dt=date("y-m-d");

							$sqlins="INSERT INTO tab_order(customer_id,order_date,order_amount,status,creation_date) Values('$_SESSION[cid]','$dt', '$_SESSION[total]',  'In process','$dt')";
							if(!mysqli_query($con,$sqlins))
							{
								die('error:'.mysqli_error($con));
							}
							}
						}

						    $sql3="select max(id) from tab_order where customer_id='".$_SESSION['cid']."'  and status='In process'";
							$result1=mysqli_query($con,$sql3);
							while($row=mysqli_fetch_array($result1))
							{
								$_SESSION['Order_Id']=$row[0];
							}
							
							 $sqlcart="SELECT a.id,a.customer_id, a.product_id, a.quantity, a.status, b.product_name, b.product_image, b.product_price,
							  a.quantity*b.product_price as amount from tab_cart a left join tab_product b on a.product_id=b.product_id 
							  where a.customer_id='". $_SESSION['cid']."' and a.status='pending'";


							$result=mysqli_query($con,$sqlcart);
							$dt=date("y-m-d");
							while($row = mysqli_fetch_array($result))
							{ 
							 $q="INSERT into tab_order_item(order_id,product_id,quantity,status,creation_date) 
							 values('$_SESSION[Order_Id]', '".$row['product_id']."', '".$row['quantity']."','In process','$dt')";
						    if(!mysqli_query($con,$q))
							{
								die('ERROR:'.mysqli_error($con));
							}
						}
							
							
						$sql11= "update  tab_cart set status='ordered' where customer_id='".$_SESSION['cid']."'  and status='pending'";
						    if(!mysqli_query($con,$sql11))
							{
								die('ERROR:'.mysqli_error($con));
							}
							
							
							//header('location:confirm.php');



?>	






						echo '	<tr class="rem1">
								<td class="invert">1</td>
								<td class="invert-image">
									<a href="single.php">
										<img src="'.$row['product_image'].'" alt=" " class="img-responsive" />
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											
											
												<span>'.$row['quantity'].'</span>
											
											</div>
									</div>
								</td>
								<td class="invert">'.$row['product_name'].'</td>
								<td class="invert">'.$row['product_price'].'</td>
								<td class="invert">
									<div class="rem">
										<h4><a href="cart_delete.php?id='.$row['id'].'">  Delete </a> </h4>
									</div>
								</td>
							</tr>';




				

					$tot+= $row['amount'];
					
				}
					
					
				$tax= $tot*18/100;

				$_SESSION['total']= $tot+ $tax;



				?>






						</tbody>
					</table>


					  <div class="row" >
         	<div class="col-md-6">
            </div>
            <div class="col-md-3">
            <h4> Total</h4>
            </div>
            <div class="col-md-3" >
            <h4><?php echo $tot;  ?></h4>
            </div>
            
         </div>
        
         <div class="row">
             <div class="col-md-6">
            </div>
            <div class="col-md-3">
            <h4> GST 18%</h4>
            </div>
            <div class="col-md-3">
            <h4><?php echo $tax;  ?></h4>
            </div>
            
         </div>
         
         <div class="row">
         	<div class="col-md-6">
            </div>
            <div class="col-md-3">
            <h4> Net Amount</h4>
            </div>
            <div class="col-md-3">
            <h4><?php echo $tot+$tax ;  ?></h4>
            </div>
           
            </div>
            
		</div>	
				</div>
			</div>

 <?php
include 'connection.php';
	
if(isset($_SESSION['cid']))
{
$dt=date("y-m-d");
 $sqlselect= "Select * from tab_order where customer_id='".$_SESSION['cid']."'  and status='In process'";
$resultselect=mysqli_query($con,$sqlselect);
$count=mysqli_num_rows($resultselect);
	if($count==0)	
	{
    $dt=date("y-m-d");

	$sqlins="INSERT INTO tab_order(customer_id,order_date,order_amount,status,creation_date) Values('$_SESSION[cid]','$dt', '$_SESSION[total]',  'In process','$dt')";
	if(!mysqli_query($con,$sqlins))
	{
		die('error:'.mysqli_error($con));
	}
	}
}

    $sql3="select max(id) from tab_order where customer_id='".$_SESSION['cid']."'  and status='In process'";
	$result1=mysqli_query($con,$sql3);
	while($row=mysqli_fetch_array($result1))
	{
		$_SESSION['Order_Id']=$row[0];
	}
	
	 $sqlcart="SELECT a.id,a.customer_id, a.product_id, a.quantity, a.status, b.product_name, b.product_image, b.product_price,
	  a.quantity*b.product_price as amount from tab_cart a left join tab_product b on a.product_id=b.product_id 
	  where a.customer_id='". $_SESSION['cid']."' and a.status='pending'";


	$result=mysqli_query($con,$sqlcart);
	$dt=date("y-m-d");
	while($row = mysqli_fetch_array($result))
	{ 
	 $q="INSERT into tab_order_item(order_id,product_id,quantity,status,creation_date) 
	 values('$_SESSION[Order_Id]', '".$row['product_id']."', '".$row['quantity']."','In process','$dt')";
    if(!mysqli_query($con,$q))
	{
		die('ERROR:'.mysqli_error($con));
	}
}
	
	
$sql11= "update  tab_cart set status='ordered' where customer_id='".$_SESSION['cid']."'  and status='pending'";
    if(!mysqli_query($con,$sql11))
	{
		die('ERROR:'.mysqli_error($con));
	}
	
	
	//header('location:confirm.php');



?>	






			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Add a new Details</h4>
					<form action="payment.php" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group">
										<input class="billing-address-name form-control" type="text" name="name" placeholder="Full Name" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Mobile Number" name="number" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Landmark" name="landmark" required="">
											</div>
										</div>
									</div>
									<div class="controls form-group">
										<input type="text" class="form-control" placeholder="Town/City" name="city" required="">
									</div>
									<div class="controls form-group">
										<select class="option-w3ls">
											<option>Select Address type</option>
											<option>Office</option>
											<option>Home</option>
											<option>Commercial</option>

										</select>
									</div>
								</div>
								<button class="submit check_out btn">Delivery to this Address</button>
							</div>
						</div>
					</form>
					<div class="checkout-right-basket">
						<a id="rzp-button1" class="btn btn-success check_out" href="#">Make a Payment
							<span class="far fa-hand-point-right"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //checkout page -->

<button id="rzp-button1" class="btn btn-default check_out">Pay Now</button>

	<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_BbZ7Iy5kpLnVby",
    "amount": "<?php echo $tot1*100; ?>", // 2000 paise = INR 20
    "name": "Nucare Pharmacy",
    "description": "<?php echo $_SESSION['cname'] ; ?>",
    "image": "images/logo.png",
    "handler": function (response){
       // alert(response.razorpay_payment_id);
	   //alert("\"payment.php?ordid=<?php echo $_SESSION['Order_Id'];?>&payid="+response.razorpay_payment_id+"\"");
	   window.location="payment.php?ordid=<?php echo $_SESSION['Order_Id'];?>&payid="+response.razorpay_payment_id;
    },
    "prefill": {
        "name": "<?php echo $_SESSION['cname'] ; ?>",
        "email": "<?php echo $_SESSION['cid'] ; ?>"
    },
    "notes": {
        "address": "Hello World"
    },
    "theme": {
        "color": "#F37254"
    }
};
var rzp1 = new Razorpay(options);

document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>

	<!-- middle section -->
	<div class="join-w3l1 py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="join-agile text-left p-4">
						<div class="row">
							<div class="col-sm-7 offer-name">
								<h6>Smooth, Rich & Loud Audio</h6>
								<h4 class="mt-2 mb-3">Branded Headphones</h4>
								<p>Sale up to 25% off all in store</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="images/off1.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="join-agile text-left p-4">
						<div class="row ">
							<div class="col-sm-7 offer-name">
								<h6>A Bigger Phone</h6>
								<h4 class="mt-2 mb-3">Smart Phones 5</h4>
								<p>Free shipping order over $100</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="images/off2.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- middle section -->

	<!-- footer -->
	<?php 
	include "footer.php";
?>