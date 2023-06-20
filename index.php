<?php
session_start();
ob_start();
include "header.php";
?>


	<!-- banner -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item item1 active">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">

							<p>Get flat
								<span>10%</span> Cashback on Essential Products</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">The
								<span>Big</span>
								Sale
							</h3>
							<a class="button2" href="product.php">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>20% Discount on 
								<span>Ayurvedic </span> Products</p>
							
							<a class="button2" href="product.php">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item3">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Get flat
								<span>10%</span> Cashback on </p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">First
								<span>order</span>
							</h3>
							<a class="button2" href="product.php">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>O</span>ur
				<span>N</span>ew
				<span>P</span>roducts</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						




						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">New  Products</h3>
							<div class="row">
									<?php
										include 'connection.php';
										$sqlview="SELECT * FROM tab_product order by product_id desc LIMIT 3";
										$result= mysqli_query($con,$sqlview);
										while($row=mysqli_fetch_array($result))
											{



												echo '<div class="col-md-4 product-men mt-5">
													<div class="men-pro-item simpleCart_shelfItem">



														<div class="men-thumb-item text-center">
															<img src="'.$row['product_image'].'" alt="" width="100px" height="200px" />
															<div class="men-cart-pro">
																<div class="inner-men-cart-pro">
																	<a href="single.php?prodid='.$row['product_id'].'" class="link-product-add-cart">Quick View</a>
																</div>
															</div>
														</div>
														<div class="item-info-product text-center border-top mt-4">
															<h4 class="pt-1">
																<a href="single.php?prodid='.$row['product_id'].'">'.$row['product_name'].'</a>
															</h4>
															<div class="info-product-price my-2">
																<span class="item_price"> Rs.'.$row['product_price'].'</span>
																
															</div>
															<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
																<a href="single.php?prodid='.$row['product_id'].'"  class="btn btn-info"> Add To Cart </a> 
															</div>
														</div>
													</div>
												</div>';
									}
									?>





							</div>
						</div>
						<!-- //first section -->






						<!-- second section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">Medical Decives</h3>
							<div class="row">




							<?php
										include 'connection.php';
										$sqlview="SELECT * FROM tab_product where parent_category=43 order by product_id desc LIMIT 3";
										$result= mysqli_query($con,$sqlview);
										while($row=mysqli_fetch_array($result))
											{



												echo '<div class="col-md-4 product-men mt-5">
													<div class="men-pro-item simpleCart_shelfItem">



														<div class="men-thumb-item text-center">
															<img src="'.$row['product_image'].'" alt="" width="100px" height="200px" />
															<div class="men-cart-pro">
																<div class="inner-men-cart-pro">
																	<a href="single.php?prodid='.$row['product_id'].'" class="link-product-add-cart">Quick View</a>
																</div>
															</div>
														</div>
														<div class="item-info-product text-center border-top mt-4">
															<h4 class="pt-1">
																<a href="single.php?prodid='.$row['product_id'].'">'.$row['product_name'].'</a>
															</h4>
															<div class="info-product-price my-2">
																<span class="item_price"> Rs.'.$row['product_price'].'</span>
																
															</div>
															<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
																<a href="single.php?prodid='.$row['product_id'].'"  class="btn btn-info"> Add To Cart </a> 
															</div>
														</div>
													</div>
												</div>';
									}
									?>


							</div>
						</div>
						<!-- //second section -->
						<!-- third section -->
						<div class="product-sec1 product-sec2 px-sm-5 px-3">
							<div class="row">
								<h4 class="col-md-4 effect-bg ">Summer Carnival 50% off on Personal Products </h4>
								
								
								<div class="col-md-8 bg-right-nut">
									<img src="images/image1.jpg" alt="" class="img-fluid">
								</div>
							</div>
						</div>
						<!-- //third section -->



						



						<!-- fourth section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
							<h3 class="heading-tittle text-center font-italic">Personal Care </h3>
							<div class="row">
								


<?php
										include 'connection.php';
										$sqlview="SELECT * FROM tab_product where parent_category=14 order by product_id desc LIMIT 3";
										$result= mysqli_query($con,$sqlview);
										while($row=mysqli_fetch_array($result))
											{



												echo '<div class="col-md-4 product-men mt-5">
													<div class="men-pro-item simpleCart_shelfItem">



														<div class="men-thumb-item text-center">
															<img src="'.$row['product_image'].'" alt="" width="100px" height="200px" />
															<div class="men-cart-pro">
																<div class="inner-men-cart-pro">
																	<a href="single.php?prodid='.$row['product_id'].'" class="link-product-add-cart">Quick View</a>
																</div>
															</div>
														</div>
														<div class="item-info-product text-center border-top mt-4">
															<h4 class="pt-1">
																<a href="single.php?prodid='.$row['product_id'].'">'.$row['product_name'].'</a>
															</h4>
															<div class="info-product-price my-2">
																<span class="item_price"> Rs.'.$row['product_price'].'</span>
																
															</div>
															<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
																<a href="single.php?prodid='.$row['product_id'].'"  class="btn btn-info"> Add To Cart </a> 
															</div>
														</div>
													</div>
												</div>';
									}
									?>
							</div>
						</div>
						<!-- //fourth section -->



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
										$sqlview="SELECT * FROM tab_offer order by offer_id";
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
										$sqlview="SELECT * FROM tab_company order by company_id asc LIMIT 10";
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
								<img src="images/off2.jpg" alt="" class="img-fluid">
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
