
<?php
$con= mysqli_connect("localhost","root","","db_pharmacy");
//check connectiondb
if(mysqli_connect_errno())
{
	echo "Failed to connection to Mysqli:",mysqli_connect_error();
}
?>
