

<body>

<?php
include 'connection.php';

if(isset($_GET['id']))
{
mysqli_query($con,"DELETE FROM tab_category WHERE category_id='$_GET[id]'");
}
mysqli_close($con);
header('location:category_view.php');
?>
    

</body>

