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
					<li><a href="consultancy_patient_list.php"> Veiw Your Consultations</a> </li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">Our Experts </h3>
							<div class="row">
<?php
	include 'connection.php';
	$sqlview="SELECT * FROM tab_expert_profile order by profile_id ";
	$result= mysqli_query($con,$sqlview);
	while($row=mysqli_fetch_array($result))
		{

		echo '<div class="col-md-4 product-men mt-5">
				<div class="men-pro-item simpleCart_shelfItem">
				<div class="men-thumb-item text-center">
						<img src="'.$row['image'].'" alt="" width="200px" height="250px" />
						<div class="men-cart-pro">
							<div class="inner-men-cart-pro">
								
							</div>
						</div>
					</div>
					<div class="item-info-product text-center border-top mt-4">
						<h4 class="pt-1">
<a href="consultancy_creation.php?profid='.$row['login_id'].'">'.$row['expert_name'].'</a>
						</h4>
						<div class="info-product-price my-2">
							<span class="item_price"> '.$row['qualification'].'</span>
							
						</div>
						<div class="info-product-price my-2">
							<span class="item_price">Experience: '.$row['experience'].'</span>
							
						</div>
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<a href="consultancy_creation.php?profid='.$row['login_id'].'"  class="btn btn-info"> Consult Now  </a> 
						</div>
					</div>
				</div>
			</div>';
}
?>


	</div>
</div>


	<!-- footer -->
	<?php 
	include "footer.php";
?>