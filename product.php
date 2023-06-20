
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
					<li>Nucare Pharmacy</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>M</span>edicines
				<span>&</span>
				<span>E</span>quipments</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">





						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">
								


								<?php
										include 'connection.php';
										$varpid="";
										$varsid="";
										if(isset($_GET['pid']) && isset($_GET['sid']))
										{
											$varpid=$_GET['pid'];
											$varsid=$_GET['sid'];

											$sqlview="SELECT * FROM tab_product where parent_category=$varpid and sub_category=$varsid order by product_id ";
										}
										else
											$sqlview="SELECT * FROM tab_product where parent_category=43 order by product_id desc LIMIT 3";

										$count=0;
										//$sqlview="SELECT * FROM tab_product where parent_category=43 order by product_id desc LIMIT 3";
										$result= mysqli_query($con,$sqlview);
										while($row=mysqli_fetch_array($result))
											{


								echo '<div class="col-md-4 product-men mt-md-0 mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="'.$row['product_image'].'" width=100px height=200px alt="">
											<div class="men-cart-pro">

												<div class="inner-men-cart-pro">
													<a href="single.php?prodid='.$row['product_id'].'" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="single.php?prodid='.$row['product_id'].'">'.$row['product_name'].'</a>
															</h4>
															<div class="info-product-price my-2">
																<span class="item_price"> Rs.'.$row['product_price'].'</span>
																
															</div>
															<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
																

																<a href="single.php?prodid='.$row['product_id'].'" class="btn btn-info" > Add to Cart </a>

															</div>
														</div>
													</div>
												</div>';
												$count++;
												if($count==3)
												{
													
													echo '
													</div> </div>
													<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">';
							$count=0;
												}




									}





									?>







							</div>
						</div>
						<!-- //first section -->









					</div>
				</div>
				<!-- //product left -->
				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Search Here..</h3>
							<form action="#" method="post">
								<input type="search" placeholder="Product name..." name="search" required="">
								<input type="submit" value=" ">
							</form>
						</div>
						
						<!-- discounts -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Discount</h3>
						<?php
										include 'connection.php';
										$sqlview="SELECT * FROM tab_offer order by offer_id ";
										$result= mysqli_query($con,$sqlview);
										while($row=mysqli_fetch_array($result))
											{


						echo '<div class="row">
						
							
									<a href="offer_page.php?offid='.$row['offer_id'].'"><img src="'.$row['image'].'" alt="" width="200px" height="200px" /></a>
									</li>
									
									
								
						</div>';
					}
						?>
									
						</div>
						<!-- //discounts -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Brands</h3>
						<?php
										include 'connection.php';
										$sqlview="SELECT * FROM tab_company order by company_id";
										$result= mysqli_query($con,$sqlview);
										while($row=mysqli_fetch_array($result))
											{


						echo '<div class="row">
						
							
									*<a href="company_page.php?comid='.$row['company_id'].'">'.$row['company_name'].'</a>
									</li>
									
									
								
						</div>';
					}
						?>
									
						</div>
						
						<!-- //electronics -->
						
						
						
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
	<!-- //top products -->

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
								<img src="images/personal covid essentials.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- middle section -->

	<!-- middle section -->

	<?php 
	include "footer.php";
?>
				
	