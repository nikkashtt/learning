<html>
<body>

<?php
$x = 5985;
var_dump(is_int($x));
echo "<br>";
$x = 59.85;
var_dump(is_int($x));
echo "<br>";
echo "<br>";
$x = 10.365;
var_dump(is_float($x));
echo "<br>";
echo "<br>";
$x = 1.9e411;
var_dump($x);
echo "<br>";
echo "<br>";
$x = acos(8);
var_dump($x);
echo "<br>";
echo "<br>";
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>  

</body>
</html>