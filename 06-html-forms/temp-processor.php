<?php

// Check that form is processed
// echo "<pre>";
// print_r($_POST);
// echo "<br>";

// Get variables
$temperature_value = $_POST[ 'temperature_value' ];
$temperature_unit = $_POST[ 'temperature_unit' ];
$degree_accuracy = $_POST[ 'degree_accuracy' ];

// Conversion logic
if ( $temperature_value && $temperature_unit == "celcius" ) {

  $temp = intval( $temperature_value) * 9/5 + 32;

  if ( $degree_accuracy == 'whole_number' ) {
    echo $temperature_value . " degrees Celcius is " . round($temp) . " degrees Fahrenheit.";
  } else {
    echo $temperature_value . " degrees Celcius is " . round($temp, 1) . " degrees Fahrenheit.";
  }
  

} else if ( $temperature_value && $temperature_unit == "fahrenheit" ){
  
  $temp = (intval( $temperature_value) - 32) * 5/9;

  if ( $degree_accuracy == 'whole_number' ) {
    echo $temperature_value . " degrees Fahrenheit is " . round($temp) . " degrees Celcius.";
  } else {
    echo $temperature_value . " degrees Fahrenheit is " . round($temp, 1) . " degrees Celcius.";
  }

} else {

  echo "There is no data to post.";

}
