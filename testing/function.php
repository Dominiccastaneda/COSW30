<?php
$names= ['aa', 'bb', 'cc'];

global $nametest = 'mario';

funciton greeting ($nametest){
    echo '<p>hello, my name is' .$nametest. '</p>';

}


foreach  $names as $name() {
    greeting($name);


}

greeting('mario');
greeting('luigi');
greeting('peach');




?>