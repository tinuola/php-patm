<?php

// Associative Array
$students = [ "Dupe"=>14, "Bose"=>12, "Kemi"=>17 ];
// echo "<pre>";
// print_r( $students );

// Looping through associative arrays
foreach ( $students as $student=>$age ){
  echo "$student is $age years old. <br>";
}

echo "<br>";

// Getting key or index for non-associative array
$cities = [ 'Melbourne', 'Helsinki', 'Lisbon', 'Dakar' ];

foreach ( $cities as $key => $city ){
  echo "$city is in spot $key.<br>";
}
