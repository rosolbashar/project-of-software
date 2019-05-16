
<body  bgcolor="PINK"dir="trl" text="black">
 <?php
$conn=mysqli_connect("localhost", "root", "", "cinema");

$sql="select * from  register";
$resurt=mysqli_query($conn,$sql);
echo "<table border=1><tr>";
while($row=mysqli_fetch_array($resurt))
{
	 echo "</tr>";
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
	
 
}
mysqli_close($conn);
?>