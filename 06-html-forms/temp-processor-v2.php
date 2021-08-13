<?php

// Get variables
$temperature_value = $_POST[ 'temperature_value' ];
$temperature_unit = $_POST[ 'temperature_unit' ];
$degree_accuracy = $_POST[ 'degree_accuracy' ];

// Conversion logic
if ( $temperature_value && $temperature_unit == "celcius" ) {

  $temp = intval( $temperature_value) * 9/5 + 32;
  $rounded_temp = round( $temp, $degree_accuracy );
  $converted_unit = "fahrenheit";

  echo "$temperature_value&deg; $temperature_unit converted is $rounded_temp&deg; $converted_unit.";
  
} else if ( $temperature_value && $temperature_unit == "fahrenheit" ){
  
  $temp = (intval( $temperature_value) - 32) * 5/9;
  $rounded_temp = round( $temp, $degree_accuracy );
  $converted_unit = "celcius";
  
  echo "$temperature_value&deg; $temperature_unit converted is $rounded_temp&deg; $converted_unit.";

} else {

  echo "There is no data to post.";

}
