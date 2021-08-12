<?php

// Check that form is processed
// echo "<pre>";
// print_r($_POST);
// echo "<br>";

// Get variables
$temperature_value = $_POST[ 'temperature_value' ];
$temperature_unit = $_POST[ 'temperature_unit' ];

// $celcius = $_POST[ 'celcius' ];
// $fahrenheit = $_POST[ 'fahrenheit' ];

$degree_accuracy = $_POST[ 'degree_accuracy' ];
$whole_number = $_POST[ 'whole_number' ];
$one_decimal = $_POST[ 'one_decimal' ];
$two_decimal = $_POST[ 'two_decimal' ];

// Conversion logic
if ( $temperature_value && $temperature_unit == "celcius" ) {

  $temp = intval( $temperature_value) * 9/5 + 32;

  echo "$temperature_value degrees Celcius is $temp degrees Fahrenheit.";

} else if ( $temperature_value && $temperature_unit == "fahrenheit" ){
  
  $temp = (intval( $temperature_value) - 32) * 5/9;

  echo "$temperature_value degrees Fahrenheit is $temp Celcius.";

} else {

  echo "There is no data to post.";

}
