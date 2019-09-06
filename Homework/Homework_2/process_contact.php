<?php

 // Capture the data from our form
//
    
// validate if the required fields are empty
//Do not process the form if some required elements are missing
//output a confirmation of the field choices.  
//required fields: first name, last name, email, gender, age

            
   if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['gender']) && !empty($_POST['age']))
    {

   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];
   $age = $_POST['age'];
   $class1 = $_POST['class1'];
   $class2 = $_POST['class2'];
   $class3 = $_POST['class3'];
   $class4 = $_POST['class4'];
   $class5 = $_POST['class5'];
   $class6 = $_POST['class6'];
   $class7 = $_POST['class7'];
   $class8 = $_POST['class8'];
   $contribution = $_POST['contribution'];
   $mailing = $_POST['mailing'];
   $comment = $_POST['comment'];

 // confirmation message
        echo '<h2>Thank You For Registering</h2>';                     
        echo "<p>First Name: $first_name</p>";
        echo "<p>Last Name: $last_name</p>";
        echo "<p>Email Address: $email</p>";
        echo "<p>Gender: $gender</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Interests:</p>";
        echo "<p>$class1 $class2 $class3 $class4 $class5 $class6 $class7 $class8</p>";
        echo "<p>Contribution: $contribution</p>";
        if (!null($_POST['mailing'])) {echo "<p>Mailing list: Yes</p>";} else {echo "<p>Mailing list: No</p>";} ;
        echo "<p>Comments: $comment</p>";

    }
    else {
        echo "<h2>Registration error, please try again</h2>";
    }

?>