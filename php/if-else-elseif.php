<html>
<body>
<h1>PHP If-Else-Elseif:</h1>
<?php
$t = date("H");
if ($t < "20") {
  echo "Have a good day!";
}
echo "<br>";
echo "<br>";
$t = date("H");
if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
echo "<br>";
echo "<br>";
$t = date("H");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";
if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "10") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
 
</body>
</html>
