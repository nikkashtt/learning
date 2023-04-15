<?php
echo "<h1>PHP Functions:</h1>";
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
echo "<br>";
$x = 5985;
var_dump($x);
echo "<br>";
$x = 4353.65;
var_dump($x);
?>