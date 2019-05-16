<?php
 require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['user_name']) && isset($_POST['password']))
	{
		
        $user_name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone_number = $_POST['phone_number'];
        $query = "INSERT INTO `user` ( email,phone_number,user_name, password, ) VALUES ( '$email', '$phone_number','$username','$password',)";
        $result = mysqli_query($conn, $query);
		
        if($result){
            echo "User Created Successfully.";
        }else{
            echo "User Registration Failed";
        }
    }
?> 