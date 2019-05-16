<body  bgcolor="PINK">
<?php
$conn=mysqli_connect("localhost", "root", "", "cinema");

$user_name=$_POST['user_name'];
$password=$_POST['password'];
$sql="select * from register where(user_name='$user_name') and(password='$password')";								  
$resurt=mysqli_query($conn,$sql);
echo "<table border=1><tr>";
while($row=mysqli_fetch_array($resurt))
      {
	    echo "<tr>";
	     echo "<td>";
        $value=print "email:";
	    echo  "$row[email]";
	    echo "</br>";
		echo "</td>";		
	   echo "<td>";
	  $value=print "phone_number:";
	 echo "$row[phone_number]";
	  echo "</br>";
	 
	 echo "</td>";
	 echo "<td>";
	
	  $value=print "user_name:";
     echo "$row[user_name]";
	  echo "</br>";
	  echo "</td>";
	  echo "<td>";
	  
	  $value=print "password:"; 
	echo "$row[password]";
	 echo "</br>";
	echo "</td>";
	echo "<td>";
	echo "</tr>";

	
	

}
 echo"</table>";
 mysqli_close($conn);
?>
	