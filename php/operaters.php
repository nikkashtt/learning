<html>
<body>

<?php
echo "<h1>PHP Arithmetic operaters:</h1>";
$x = 22;  
$y = 2;
echo "Adding two numbers<br>";
echo $x + $y;
echo "<br>";
echo "<br>";
echo "Subtracting two numbers<br>";
echo $x - $y;
echo "<br>";
echo "<br>";
echo "Multiplying two numbers<br>";
echo $x * $y;
echo "<br>";
echo "<br>";
echo "Dividing two numbers<br>";
echo $x / $y;
echo "<br>";
echo "<br>";
echo "Modulus<br>";
echo $x % $y;
echo "<br>";
echo "<br>";
echo "Exponentiation<br>";
echo $x ** $y;
echo "<h1>PHP Assignment operaters</h1>";
echo "Adding two numbers:<br>";
$x = 20;  
$x += 100;
echo $x;
echo "<br>";
echo "<br>";
echo "Subtracting two numbers<br>";
$x = 50;
$x -= 30;
echo $x;
echo "<br>";
echo "<br>";
echo "Multiplying two numbers<br>";
$x = 5;
$x *= 6;
echo $x;
echo "<br>";
echo "<br>";
echo "Dividing two numbers<br>";
$x = 10;
$x /= 5;
echo $x;
echo "<br>";
echo "<br>";
echo "Modulus<br>";
$x = 15;
$x %= 4;
echo $x;
echo "<h1>PHP Comparison Operators:</h1>";
echo "Returns true if $x is equal to $y<br>";
$x = 100;  
$y = "100";
var_dump($x == $y);
echo "<br>";
echo "<br>";
echo "Returns true if $x is equal to $y, and they are of the same type<br>";
$x = 100;  
$y = "100";
var_dump($x === $y);
echo "<br>";
echo "<br>";
echo "Returns true if $x is not equal to $y<br>";
$x = 100;  
$y = "100";
var_dump($x != $y);
echo "<br>";
echo "<br>";
echo "Returns true if $x is not equal to $y<br>";
$x = 100;  
$y = "100";
var_dump($x <> $y);
echo "<br>";
echo "<br>";
echo "Returns true if $x is not equal to $y, or they are not of the same type<br>";
$x = 100;  
$y = "100";
var_dump($x !== $y);
echo "<br>";
echo "<br>";
echo "Returns true if $x is greater than $y<br>";
$x = 100;
$y = 50;
var_dump($x > $y);
echo "<br>";
echo "<br>";
echo "Returns true if $x is less than $y<br>";
$x = 10;
$y = 50;
var_dump($x < $y);
echo "<br>";
echo "<br>";
echo "Returns true if $x is greater than or equal to $y<br>";
$x = 50;
$y = 50;
var_dump($x >= $y);
echo "<br>";
echo "<br>";
echo "Returns true if $x is less than or equal to $y<br>";
$x = 50;
$y = 50;
var_dump($x <= $y);
echo "<br>";
echo "<br>";
echo "Returns an integer less than, equal to, or greater than zero,
 depending on if $x is less than, equal to, or greater than $y.<br>";
$x = 5;  
$y = 10;
echo ($x <=> $y);
echo "<br>";
$x = 10;  
$y = 10;
echo ($x <=> $y);
echo "<br>";
$x = 15;  
$y = 10;
echo ($x <=> $y);
echo "<br>";
?>  

</body>
</html>
