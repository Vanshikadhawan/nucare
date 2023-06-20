<body>
  <?php
  include 'connection.php';

  if(isset($_GET['id']))
  {
 mysqli_query($con,"DELETE FROM tab_order WHERE id='$_GET[id]'");
 }	
 mysqli_close($con);
 header('location:order_detail.php');
 ?>

</body>
</html>