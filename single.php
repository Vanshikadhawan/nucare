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
					<li>Product Details</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- Single Page -->
	




	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>S</span>ingle
				<span>P</span>age</h3>
			<!-- //tittle heading -->
			<div class="row">
				<?php
						include 'connection.php';


							$varpid="43";
										$varsid="";
										if(isset($_GET['prodid']) )
										{
											$varpid=$_GET['prodid'];
											
											$sqlview="SELECT * FROM tab_product where product_id=$varpid";
											}
											else
											$sqlview="SELECT * FROM tab_product where product_id=43 ";

						$result= mysqli_query($con,$sqlview);
						while($row=mysqli_fetch_array($result))
				{


				echo'<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">';

										if(isset($_GET['prodid']) )
										{
											$varpid=$_GET['prodid'];
											
											$sqlimg="SELECT * FROM tab_product_image where product_id=$varpid";
										}
										else
											$sqlimg="SELECT * FROM tab_product_image where product_id=43 ";

						$result1= mysqli_query($con,$sqlimg);
						while($row1=mysqli_fetch_array($result1))
						{


							echo'	<li data-thumb="'.$row1['image_path'].'">
									<div class="thumb-image">
										<img src="'.$row1['image_path'].'" width=100px height=100px alt=""> </div>
								</li>';
							}

								
							echo ' </ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3">'.$row['product_name'].'</h3>
					<p class="mb-3">
						<span class="item_price"> Rs.'.$row['product_price'].'</span>
						
						<label>Free delivery</label>
					</p>
					<div class="single-infoagile">
						<ul>
							<li class="mb-3"> Product Size:
								'.$row['product_size'].'
							</li>
							<li class="mb-3">Manufactured Date:
							'.$row['manufactured_date'].'
								
							</li>
							<li class="mb-3">Expiry Date:
							'.$row['expiry_date'].'
								
							</li>
							<li class="mb-3">Company:
							'.$row['product_company'].'
								
							</li>
							
						</ul>
					</div>
					<div class="product-single-w3l">
						<p class="my-3">Product Description:<br/>
						'.$row['product_description'].'
							
					</div>

					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<form action="cart.php" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="Samsung Galaxy J7 Prime" />
									Quantity
									<input type="number" class="form-control" name="ddlqty" value="1"  min="1" max="10" />
									<input type="hidden" name="discount_amount" value="1.00" />
									<input type="hidden" name="currency_code" value="USD" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="txtproid" value="'.$varpid.'" />
									<input type="submit" name="btncart" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>
					</div>
					<br/><br/>
				</div>';
			}
			?>
			</div>
		</div>
	</div>
	<!-- //Single Page -->







	<!-- middle section -->
	<div class="join-w3l1 py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="join-agile text-left p-4">
						<div class="row">
							<div class="col-sm-7 offer-name">
								<p>Boost your immunity against Covid-19 with</p>
								<h4 class="mt-2 mb-3">Patanjali Products</h4>
								<p>Sale up to 25% off </p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="images/off1.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="join-agile text-left p-4">
						<div class="row ">
							<div class="col-sm-7 offer-name">
								<h6>30% Discount on</h6>
								<h4 class="mt-2 mb-3">Covid Essentials</h4>
								<p>Free shipping order over Rs.1000</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="images/off2.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- middle section -->

	<?php 
		include "footer.php";
	?>