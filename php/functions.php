<?php
display();
display();
writemsg();
$a = 'Toyota';
$b = 'BMW';
$c = 'Audi';

$cars = array($a,$b,$c);
var_dump($cars);
writemsg();
function writemsg(){
    echo "Hello World!";
}
function display(){
    echo "Display";
}
?>