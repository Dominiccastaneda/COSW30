<?php

 // Capture the data from our form

    
// validate if the fields are empty

    if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password']))
    {

   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $confirm_password = $_POST['confirm_password'];


 // validate the password with the confirm password
    if ($password == $confirm_password){
        echo '<h2>Congratulation you have registered correctly.</h2>';
        echo "<p>First Name: $first_name</p>";
        echo "<p>Last Name: $last_name</p>";
        echo "<p>Email Address: $email</p>";
        echo "<p>Password: $password</p>";
    }
    else {
        echo '<h2>Password do not match. Please try again.</h2>';
    }


    }
    else {
        echo "<h2>Validation Error</h2>";
    }

?>