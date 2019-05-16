<?php
$conn=mysqli_connect("localhost", "root", "", "cinema");
$film =$_POST ["film"];
$time = $_POST ["time"];
$venue = $_POST["venue"];
$ticket = $_POST ["ticket"];

        $sqr1=mysqli_query($conn,"INSERT INTO booking VALUES ('".$film."','".$time."','".$venue."','".$ticket."')");
        if($sqr1) 
		{
            echo '<h3 text-align: center>succesfully booking film </h3>';
		    echo "<h3 text-align: center>enjoy your time </h3>";
		}
        else
         echo"not  ok". mysqli_error($conn);  


            echo '<a href="register.html"><h2>Back To home page</h2></a>';
 ?>