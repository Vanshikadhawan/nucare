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
					<li>Offer Details</li>
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
				<span>O</span>ffer
				<span>P</span>age</h3>
			<!-- //tittle heading -->
			<div class="row">
				<?php
						include 'connection.php';


							$varoffid="1";
										
										if(isset($_GET['offid']) )
										{
											$varoffid=$_GET['offid'];
											
											$sqlview="SELECT * FROM tab_offer where offer_id=$varoffid";
											}
											else
											$sqlview="SELECT * FROM tab_offer where offer_id=1 ";

						$result= mysqli_query($con,$sqlview);
						while($row=mysqli_fetch_array($result))
				{


				echo'<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="'.$row['image'].'">
									<div class="thumb-image">
										<img src="'.$row['image'].'" width=100px height=100px alt=""> </div>
								</li>
								
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3">'.$row['title'].'</h3>
					
					<div class="single-infoagile">
						<ul>
							<li class="mb-3"> Description:
								'.$row['description'].'
							</li>
							<li class="mb-3">Start date:
							'.$row['start_date'].'
								
							</li>
							<li class="mb-3">End Date:
							'.$row['end_date'].'
								
							</li>
							<li class="mb-3">Discount:
							'.$row['discount'].'%
								
							</li>
							
						</ul>
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