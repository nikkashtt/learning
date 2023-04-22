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
echo "Returns true if x is equal to y<br>";
$x = 100;  
$y = "100";
var_dump($x == $y);
echo "<br>";
echo "<br>";
echo "Returns true if x is equal to y, and they are of the same type<br>";
$x = 100;  
$y = "100";
var_dump($x === $y);
echo "<br>";
echo "<br>";
echo "Returns true if x is not equal to y<br>";
$x = 100;  
$y = "100";
var_dump($x != $y);
echo "<br>";
echo "<br>";
echo "Returns true if x is not equal to y<br>";
$x = 100;  
$y = "100";
var_dump($x <> $y);
echo "<br>";
echo "<br>";
echo "Returns true if x is not equal to y, or they are not of the same type<br>";
$x = 100;  
$y = "100";
var_dump($x !== $y);
echo "<br>";
echo "<br>";
echo "Returns true if x is greater than y<br>";
$x = 100;
$y = 50;
var_dump($x > $y);
echo "<br>";
echo "<br>";
echo "Returns true if x is less than y<br>";
$x = 10;
$y = 50;
var_dump($x < $y);
echo "<br>";
echo "<br>";
echo "Returns true if x is greater than or equal to y<br>";
$x = 50;
$y = 50;
var_dump($x >= $y);
echo "<br>";
echo "<br>";
echo "Returns true if x is less than or equal to y<br>";
$x = 50;
$y = 50;
var_dump($x <= $y);
echo "<br>";
echo "<br>";
echo "Returns an integer less than, equal to, or greater than zero,
 depending on if x is less than, equal to, or greater than y<br>";
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
echo "<h1>PHP Increment / Decrement Operators</h1>";
echo "Increments x by one, then returns x<br>";
$x = 10;  
echo ++$x;
echo "<br>";
echo "<br>";
echo "Returns x, then increments x by one<br>";
$x = 10;  
echo $x++;
echo "<br>";
echo "<br>";
echo "Decrements x by one, then returns x<br>";
$x = 10;  
echo --$x;
echo "<br>";
echo "<br>";
echo "Returns x, then decrements x by one <br>";
$x = 10;  
echo $x--;
echo "<h1>PHP Logical Operators</h1>";
echo "True if both x and y are true<br>";
$x = 100;  
$y = 50;
if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
echo "<br>";
echo "<br>";
echo "True if either x or y is true<br>";
$x = 100;  
$y = 50;
if ($x == 100 or $y == 80) {
    echo "Hello world!";
}
echo "<br>";
echo "<br>";
echo "True if either x or y is true, but not both<br>";
$x = 100;  
$y = 50;
if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}
echo "<br>";
echo "<br>";
echo "True if both x and y are true<br>";
$x = 100;  
$y = 50;
if ($x == 100 && $y == 50) {
    echo "Hello world!";
}
echo "<br>";
echo "<br>";
echo "True if either x or y is true<br>";
$x = 100;  
$y = 50;
if ($x == 100 || $y == 80) {
    echo "Hello world!";
}
echo "<br>";
echo "<br>";
echo "True if $x is not true<br>";
$x = 100;  
if ($x !== 90) {
    echo "Hello world!";
}
echo "<h1>PHP String Operators:</h1>";
echo "Concatenation of txt1 and txt2<br>";
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
echo "<br>";
echo "<br>";
echo "Appends txt2 to txt1<br>";
$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;
echo "<br>";
echo "<br>";
echo "Union of x and y<br>";
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
print_r($x + $y); 
echo "<br>";
echo "<br>";
echo "Returns true if x and y have the same key/value pairs<br>";
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x == $y);
echo "<br>";
echo "<br>";
echo "Returns true if x and y have the same 
key/value pairs in the same order and of the 
same types<br>";
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x === $y);
echo "<br>";
echo "<br>";
echo "Returns true if x is not equal to y<br>";
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x != $y);
echo "<br>";
echo "<br>";
echo "Returns true if x is not equal to y<br>";
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x <> $y);
echo "<br>";
echo "<br>";
echo "Returns true if x is not identical to y<br>";
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x !== $y);
echo "<h1>PHP Conditional Operators:</h1><br>";
echo "Returns the value of x.
The value of x is expr2 if expr1 = TRUE.
The value of x is expr3 if expr1 = FALSE<br>";
echo $status = (empty($user)) ? "anonymous" : "logged in";
echo("<br>");
$user = "John Doe";
echo $status = (empty($user)) ? "anonymous" : "logged in";
echo "<br>";
echo "<br>";
echo "Returns the value of x.
The value of x is expr1 if expr1 exists, and is not NULL.
If expr1 does not exist, or is NULL, the value of x is expr2.<br>";
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
   echo $color = $color ?? "red";  
?>  

</body>
</html>