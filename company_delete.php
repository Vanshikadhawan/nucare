<body>

<?php
include 'connection.php';

if(isset($_GET['id']))
{
mysqli_query($con,"DELETE FROM tab_company WHERE company_id='$_GET[id]'");
}
mysqli_close($con);
header('location:company_view.php');
?>
    

</body>
