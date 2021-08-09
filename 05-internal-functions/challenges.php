<?php

// Odds and Evens
echo "Odds and Evens <br>";

$rand_num = rand(1,20);

if ( $rand_num % 2 == 0 ) {
  echo $rand_num . " is an even number.";
} else {
  echo $rand_num . " is an odd number.";
}

echo "<br><br>";

//  Count odds and evens
echo "Count Odds and Evens <br>";

$odds = 0;
$evens = 0;

for ( $i = 1; $i <= 100; $i++ ){
  
  $rand_num = rand(1,20);

  if ( $rand_num % 2 == 0 ) {
    $evens++;
    echo $rand_num . "<br>";
  } else {
    $odds++;
    echo $rand_num . "<br>";
  }

}

echo "There were $evens even numbers and $odds odd numbers.";

echo "<br><br>";

// Calculate the area of a circle
echo "The Area of a Circle <br>";

$radius = 5;

$area = round( ( pi() * pow( $radius, 2 ) ), 2, PHP_ROUND_HALF_UP );

echo "The area of a circle with a radius of $radius = $area";
