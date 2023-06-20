<body>

<?php
include 'connection.php';

if(isset($_GET['id']))
{
mysqli_query($con,"DELETE FROM tab_product WHERE product_id='$_GET[id]'");
}
mysqli_close($con);
header('location:product_view.php');
?>
    

</body>
