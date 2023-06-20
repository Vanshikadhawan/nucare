
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
							<h3 class="heading-tittle text-center font-italic">Your Consultaions  </h3>
							<div class="row">







	
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Expert  Name</th>
								<th>Health Issue</th>
								<th>Consultancy Date </th>
								<th>Consultancy Time</th>
								<th> Status </th>
								
							</tr>
						</thead>
						<tbody>
<?php
	//session_start();
	include 'connection.php';
	$vareid="";
		if(isset($_GET['id']))
		{

			$sqlupd= "update tab_consultation set approval='".$_GET['id']."' where id=".$_GET['idd'];
			mysqli_query($con,$sqlupd);

		}
		if(isset($_SESSION['cid']))
					$vareid= $_SESSION['cid'];
	

$sqlcart="SELECT a.id,a.patient_id,a.expert_id,a.health_issue, a.report_upload_path,a.appointment_date, a.appointment_time,a.approval, a.status,b.expert_name,b.qualification FROM  tab_consultation a left join tab_expert_profile b 
on a.expert_id = b.login_id where a.patient_id='".$vareid."'";


							$result=mysqli_query($con,$sqlcart);
							$dt=date("y-m-d");
							while($row = mysqli_fetch_array($result))
							{ 
							echo '	<tr class="rem1">
								<td class="invert">1</td>
								<td class="invert-image">
										'.$row['expert_name'].'
										<br/> 
										'.$row['qualification'].'
								</td>
								<td class="invert">
									
									'.$row['health_issue'].'
									</td>
								<td class="invert">'.$row['appointment_date'].'</td>
								<td class="invert">'.$row['appointment_time'].'</td>
								<td class="invert">'.$row['approval'].'</td>
								
							</tr>';
							}
	?>
	</tbody>
	</table>
	</div>	
</div>
</div>

 





		

	

	<!-- footer -->
	<?php 
	include "footer.php";
?>