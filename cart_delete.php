

<body>

<?php
  include 'connection.php';

  if(isset($_GET['id']))
  {
 mysqli_query($con,"DELETE FROM tab_cart WHERE id='$_GET[id]'");
 }	
 mysqli_close($con);
 header('location:cart.php');
 ?>

</body>
