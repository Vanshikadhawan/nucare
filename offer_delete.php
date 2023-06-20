<body>

<?php
include 'connection.php';

if(isset($_GET['id']))
{
mysqli_query($con,"DELETE FROM tab_offer WHERE offer_id='$_GET[id]'");
}
mysqli_close($con);
header('location:offer_view.php');
?>
    

</body>
