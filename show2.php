
<body  bgcolor="PINK"dir="trl" text="black">
 <?php
$conn=mysqli_connect("localhost", "root", "", "cinema");

$sql="select * from  booking";
$resurt=mysqli_query($conn,$sql);
echo "<table border=1><tr>";
while($row=mysqli_fetch_array($resurt))
{
	  echo "</tr>";
	  echo "<td>";
      $value=print "film:";
	   echo  "$row[film]";
	    echo "</br>";
		echo "</td>";
		
	 echo "<td>";
	 $value=print "time:";
	 echo "$row[time]";
	  echo "</br>";
	 
	 echo "</td>";
	 echo "<td>";
	
	  $value=print "venue:";
     echo "$row[venue]";
	  echo "</br>";
	  echo "</td>";
	  echo "<td>";
	  
	  $value=print "ticket:"; 
	echo "$row[ticket]";
	 echo "</br>";
	echo "</td>";
	echo "<td>";
	
 
}
mysqli_close($conn);
?>