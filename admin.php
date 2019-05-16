<?php
$conn=mysqli_connect("localhost", "root", "", "cinema");
  
$user_name = $_POST["user_name"];
$password  = $_POST ["password"];


$quiry="SELECT * FROM admain WHERE user_name = '$user_name' and password = '$password'";

        $sqr1=mysqli_query($conn,$quiry);
        if($sqr1)
		{
			
            echo '<h3 text-align: center>ok login into cinema</h3>';
		    echo '<h3 text-align: center><a href="fu.html">go to the admain pages</a></h3>';
		}
        else
         echo"not  ok". mysqli_error($conn);  
 ?>