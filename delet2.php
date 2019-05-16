<body  bgcolor="PINK">
<?php
$conn=mysqli_connect("localhost", "root", "", "cinema");
$film=$_POST['film'];
$sql="delete  from booking where(film='$film')";
 mysqli_query($conn,$sql);
 echo"<h1>";
 echo "you have delete successfully";
 echo"</h1>";
  mysqli_close($conn);
?>