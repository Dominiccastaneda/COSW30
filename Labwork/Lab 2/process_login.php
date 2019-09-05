
<?php

 // Capture the data from our form
    $email = $email = $_POST['email'];
    $password = $password = $_POST['password'];

 // Create variable to match email and password against 
     $correct_email = 'test@test.com';
     $correct_password = 'supersecure123';
 
  // Check if the data is good (not empty, match our credentials)
 
     if ($email == $correct_email && $password == $correct_password) {
            // Success - output a success message
            echo '<h2>You logged in successfuly!</h2>';
            echo "<p>Email Address: $email</p>";
            echo "<p>Password: $password</p>";
        }
        else {
            // Error - output a error message
            echo '<h2>Sorry... try again.</h2>';
            echo '<a herf="login.php">Go Back</a>';
        }


 
    
    
?>
