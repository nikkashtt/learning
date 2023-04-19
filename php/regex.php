<html>
<body>
<h1>PHP Regular Expressins:</h1>
<?php
echo "<h2>PHP preg_match():</h2>";
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str);
echo "<h2>PHP preg_match_all():</h2>";
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);
echo "<h2>PHP preg_replace():</h2>";
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str);
?>

</body>
</html>
