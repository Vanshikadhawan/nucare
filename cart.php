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
					<li>Cart</li>
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
				<span>C</span>art
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Your shopping cart contains:
					
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

				include'connection.php';


				if(!isset($_SESSION['cid']))
				{
					header("Location:index.php");
				}


				if(isset($_POST['btncart']))
				{


				$dt= date('y/m/d');
				$sql="INSERT into tab_cart( customer_id,product_id,quantity, status, creation_date) values('$_SESSION[cid]', '$_POST[txtproid]', '$_POST[ddlqty]', 'pending', '$dt')";
					if(!mysqli_query($con,$sql))
					{
						die('ERROR:'.mysqli_error($con));
					}
				}
				$tax=0;
				$tot=0;
				 $sql1="SELECT a.id,a.customer_id, a.product_id, a.quantity, a.status, b.product_name, b.product_image, b.product_price,
				 a.quantity*b.product_price as amount from tab_cart a left join tab_product b on a.product_id=b.product_id 
				 where a.customer_id='". $_SESSION['cid']."' and a.status='pending'";
				 
				 
				$result=mysqli_query($con,$sql1);
				while($row= mysqli_fetch_array($result))
				{




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
										<a href="cart_delete.php?id='.$row['id'].'">  Delete </a> 
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






			<div class="checkout-left">
				<div class="row">
				<div class="address_form_agile col-md-3 mt-sm-5 mt-4">				
					<div class="checkout-left-basket">
						<a  class="btn btn-success check_out" href="index.php">Continue Shopping 
							<span class="far fa-hand-point-left"></span>
						</a>
					</div>
					
				</div>
				<div class="col-md-6"> </div>
				<div class="address_form_agile col-md-3 mt-sm-5 mt-4">
					<div class="checkout-right-basket">
						<a  class="btn btn-success check_out" href="order_detail.php?check=out">Proceed To order 
							<span class="far fa-hand-point-right"></span>
						</a>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	<!-- //checkout page -->


	

	<!-- footer -->
	<?php 
	include "footer.php";
?>