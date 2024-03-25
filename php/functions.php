<?php
function greet() {
    echo "Hi Pakistan!";
}
  // Call A Function
  greet();
  //Function parameter
  function greetPerson($name) {
    echo "Hi, $name!";
}

greetPerson("umama");
//default parameter values
function greetPerson($name = "Guest") {
    echo "Hi, $name!";
}

greetPerson(); 
greetPerson("Alice");
//returning values
function add($a, $b) {
    return $a + $b;
}

$result = add(5, 3); // $result is now 8
echo "The sum is: " . add(10, 15);
//passing parameter 
function applyOperation($num1, $num2, $operation) {
    return $operation($num1, $num2);
}

$sum = function($a, $b) {
    return $a + $b;
};

echo applyOperation(5, 3, $sum); 
?>