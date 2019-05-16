<body  bgcolor="PINK">
<?php
$conn=mysqli_connect("localhost", "root", "", "cinema");
$user_name=$_POST['user_name'];
$sql="delete  from register where(user_name='$user_name')";
 $sqr=mysqli_query($conn,$sql);
 if($sqr)
 {
 echo"<h1>";
 echo "you have delete successfully";
 echo"</h1>";
 }
 else
	  echo "your user_name is dosent correct or user_name is not have in the database";
  mysqli_close($conn);
?>