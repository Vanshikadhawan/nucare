<body>

<?php
include 'connection.php';

if(isset($_GET['id']))
{
mysqli_query($con,"DELETE FROM tab_product_image WHERE id='$_GET[id]'");
}
mysqli_close($con);
header('location:product_image.php');
?>
    

</body>