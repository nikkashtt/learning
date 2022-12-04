<html>
    <head></head>
<body>

<?php  
$x = 5985;
$y = 10.365;
$z = null;
$cars = array("Audi","BMW","Buggatti");
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
var_dump($cars);
echo "<br>";
echo "<br>";
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("white", "Audi");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("blue", "Buggatti");
  echo $myCar -> message();
  echo "<br>";
  echo "<br>";
  $x = "Hello world!";
echo "<br>";
echo "<br>";
var_dump($z);
?>  

</body>

</html>