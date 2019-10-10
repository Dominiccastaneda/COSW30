<?php
$name= ['aa', 'bb', 'cc'];

global $nametest = 'mario';

funciton greeting ($nametest){
    echo '<p>hello, my name is' .$nametest. '</p>';

}

greeting('mario');
greeting('luigi');
greeting('peach');




?>