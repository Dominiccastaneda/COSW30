<?php

 $numParagraphs = $_POST['paragraphs'];
$text = $_POST['text'];

$textexplode =explode(' ', $text);


shuffle($textexplode);

$textimplode = implode(' ', $textexplode);


 for ($i=0; $i < $numParagraphs; $i++) 
 {  
     //output a paragraph
     echo "<p>$textimplode</p>";
     
 }


    //foreach()
    //while()
    
    // $array = [ 1=> test, test] array starts at 1 instead of 0
// $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
 
?>