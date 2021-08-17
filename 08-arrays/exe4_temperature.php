<?php

/*
32.3, 31.3, 28.2, 29.3, 29.7, 29.9, 28.7, 28.4, 30.5, 30.5, 31.7, 30.6, 29.4, 32.0,
36.2, 31.3, 32.8, 33.3, 32.9, 28.8, 30.8, 28.0, 25.9, 30.8, 32.4, 32.0, 31.3, 25.2,
29.1, 28.6, 30.6

The temperatures in degrees C were recorded in January 2015
Write a script to output the following:
● average daily temperature in degrees C (rounded to 1 decimal place)
● the 5 lowest temperatures
● the 5 highest temperatures
*/

echo "<pre>";

$temperature = "32.3, 31.3, 28.2, 29.3, 29.7, 29.9, 28.7, 28.4, 30.5, 30.5, 31.7, 30.6, 29.4, 32.0, 36.2, 31.3, 32.8, 33.3, 32.9, 28.8, 30.8, 28.0, 25.9, 30.8, 32.4, 32.0, 31.3, 25.2, 29.1, 28.6, 30.6";

$temp_arr = explode( ", ", $temperature );
// print_r( $temp_arr );

// Get average temperature
$temp_arr_sum = array_sum( $temp_arr );
$temp_arr_count = count( $temp_arr );
$temp_arr_avg = round( $temp_arr_sum / $temp_arr_count, 1 );
echo "The average daily temperature is $temp_arr_avg&deg; C.";
echo "<br>";

// Get 5 lowest and highest temperatures
sort( $temp_arr );
// print_r( $temp_arr );

$temp_lowest = array_slice( $temp_arr, 0, 5);
// print_r($temp_lowest);
echo "The five lowest temperatures are:" . " " . implode( ", ", $temp_lowest ) . ".";
echo "<br>";

$temp_highest = array_slice( $temp_arr, -5 );
// print_r( $temp_highest );
echo "The five highest temperatures are:" . " " . implode( ", ", $temp_highest ) . ".";