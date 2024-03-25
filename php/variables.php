<?php

// Integers

// $a = 10;
// echo $a;

// $a = 10;
// $b = 30;

// $c = $a + $b;
// echo($c);

// $a = 300;
// $b = 30;

// $c = $a - $b;
// echo($c);

//Float/Double
// $a = 30;
// $b = 16;

// $c = $a / $b;
// echo($c);

// Strings

// $myStr = "Pakistan";
// echo("Hi " . $myStr);

// $myStr = "Pakistan";
// echo(var_dump($myStr));

// echo "<br>";

// $a = 100;
// var_dump($a);

// $prediction = false;
// var_dump($prediction);

//float

// $floatNum = 3.14; // Floating point number
// $scientificNum = 1.2e3; // Scientific notation (1.2 x 10^3)
// echo($floatNum);
// $numbers = array(1, 2, 3, 4, 5); 
// print_r($numbers);

//OBJECT

// class Car {
//     public $color;
//     public $model;
//     public function __construct($color, $model) {
//       $this->color = $color;
//       $this->model = $model;
//     }
//     public function message() {
//       return "My car is a " . $this->color . " " . $this->model . "!";
//     }
//   }
  
//   $myCar = new Car("red", "Volvo");
//   var_dump($myCar);

//NULL
// $x = "Hi Pakistan!";
// $x = null;
// var_dump($x);

//Resource for file handling
// $file = fopen("example.txt", "r"); 

// $myArray = array("Pakistan", "Apple", "Cup");
// print_r($myArray);
// define("GREETING", "Welcome to local host!");
// echo GREETING;
// $num1 = 10;
// $num2 = 5;
// if ($num1 > $num2) {
//     echo "num1 is greater than num2";
// } elseif ($num1 == $num2) {
//     echo "num1 is equal to num2";
// } else {
//     echo "num1 is less than num2";
// }
$x = 10;
$y = 5;
if ($x > 0 && $y > 0) {
    echo "Both x and y are positive";
}

if ($x > 0 || $y > 0) {
    echo "At least one of x or y is positive";
}

if (!($x == 0)) {
    echo "x is not equal to 0";
}

?>