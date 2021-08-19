<?php

// 1. Creating a function
function hello (){
  echo "Hello World.";
}

// hello();


// 2. Variables in a function
function addTwoNumbers(){
  // global $c;
  $a = 5;
  $b = 10;
  $sum = $a + $b +$c;
  echo $sum;
}

// $c = 20;
// addTwoNumbers();


// 3. Pass variables to functions
function multiply( $num1, $num2 ){
  $product = $num1 * $num2;
  echo $product . "<br>";
}

// multiply( 5, 10 );
// multiply( 10, 10 );


// 4. Return a value
function uppercase( $name ){
  $result = strtoupper( $name );
  return $result;
}

// echo uppercase( "Smith" );

// $display = uppercase( "Smith" );
// echo $display;


// 5. Return multiple results
function calculate( $num1, $num2 ){
  $sum = $num1 + $num2;
  $diff = $num1 - $num2;
  return [$sum, $diff];
}

$result = calculate( 10, 3 );

echo "<pre>";
print_r($result);

echo $result[0];
echo "<br>";
echo $result[1];
echo "<br>";

foreach ($result as $val ){
  echo $val;
  echo "<br>";
}