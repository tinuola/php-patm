<?php

// Generate a random number between 1 and 2
// $random_num = rand(1, 2);
// echo $random_num;

// Generate a random number 100 times
// for ( $i = 1; $i <= 100; $i++ ) {
//   $random_num = rand(1, 2);
//   echo $random_num . "<br>";
// }

// Generate a random# and count 1s and 2s
$ones = 0;
$twos = 0;

for ( $i = 1; $i <= 100; $i++ ) {

  $random_num = rand(1, 2);

  if ( $random_num === 1 ){
    $ones++;
    echo "Random number is " . $random_num . "; Count of 1s is now $ones" . "<br>";
  } else {
    $twos++;
    echo "Random number is " . $random_num . "; Count of 2s is now $twos" . "<br>";
  }

}
//  OR
// echo "1 = " . $ones;
// echo "<br>";
// echo "2 = " . $twos;