<?php
$conn=mysqli_connect("localhost", "root", "", "cinema");
$email =$_POST ["email"];
$phone_number = $_POST ["phone_number"];
$user_name = $_POST["user_name"];
$password  = $_POST ["password"];

$sqr=mysqli_query($conn,"INSERT INTO register VALUES ('".$email."','".$phone_number."','".$user_name."','".$password."')");

			if($sqr)
			{
            echo '<h3 text-align: center>ok insert values into table</h3>';
			}
			else
           echo"not  ok". mysqli_error($conn);  
                

            echo '<a href="register.html"><h2>Back To home page</h2></a>';
 ?>