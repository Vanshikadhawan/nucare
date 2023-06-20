<!DOCTYPE html>
<html lang="zxx">
<head>
	<title> Nucare Pharmacy, online Medicine Store </title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content=""	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<style type="text/css">
		.bg{
			background-color: lightblue;
		}
		.required{
			color: red;
			font-weight: bold;
		}
	</style>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->

</head>

<body>
    
	






	<!-- //page -->
	<!-- checkout page -->
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>onsultancy
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Patient Name</th>
								<th>Health Issue</th>
								<th>Consultancy Date </th>
								<th>Consultancy Time</th>
								<th> Status </th>
								<th>Approve/ Canceled </th>
							</tr>
						</thead>
						<tbody>
<?php
	session_start();
	include 'connection.php';
	$vareid="";
		if(isset($_GET['id']))
		{

			$sqlupd= "update tab_consultation set approval='".$_GET['id']."' where id=".$_GET['idd'];
			mysqli_query($con,$sqlupd);


		}






				if(isset($_SESSION['eid']))
					$vareid= $_SESSION['eid'];
	

$sqlcart="SELECT a.id,a.patient_id,a.expert_id,a.health_issue, a.report_upload_path,a.appointment_date, a.appointment_time,a.approval, a.status,b.customer_name,b.mobile_number FROM  tab_consultation a left join tab_customer b 
on a.patient_id = b.login_id where a.expert_id='".$vareid."'";


							$result=mysqli_query($con,$sqlcart);
							$dt=date("y-m-d");
							while($row = mysqli_fetch_array($result))
							{ 
							echo '	<tr class="rem1">
								<td class="invert">1</td>
								<td class="invert-image">
										'.$row['customer_name'].'
										<br/> 
										'.$row['mobile_number'].'
								</td>
								<td class="invert">
									
									'.$row['health_issue'].'
									</td>
								<td class="invert">'.$row['appointment_date'].'</td>
								<td class="invert">'.$row['appointment_time'].'</td>
								<td class="invert">'.$row['approval'].'</td>
								<td class="invert">
									<div class="rem">
		<h6><a href="consultancy_doc_list.php?id=Approve&idd='.$row['id'].'">  Approve </a> </h6> || 
		<h6><a href="consultancy_doc_list.php?id=Cancel&idd='.$row['id'].'">  Cancel </a> </h6>
									</div>
								</td>
							</tr>';
							}
	?>
	</tbody>
	</table>
	</div>	
</div>
</div>
</div>


 





		

	

	<!-- footer -->
	