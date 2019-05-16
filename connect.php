<?php
$server="localhost";
$user="root";
$pass="";
$db_name="cinema";
$conn=mysqli_connect($server,$user,$pass,$db_name);
$qr1=mysqli_query($conn,"use cinema ");
if($conn){
	echo"connected";
}
else
{
	die("not connected".mysqli_connect_error());
}



?>