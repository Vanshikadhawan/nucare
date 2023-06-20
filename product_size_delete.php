<body>

<?php
include 'connection.php';

if(isset($_GET['id']))
{
mysqli_query($con,"DELETE FROM tab_product_size WHERE size_id='$_GET[id]'");
}
mysqli_close($con);
header('location:product_size.php');
?>
    

</body>
