<?php
// Array Traversing

echo "<pre>";

$cities = [ 'Melbourne', 'Helsinki', 'Lisbon' ];
print_r( $cities );
echo "<br>";

// To add to an array, to the end
array_push( $cities, "Jakarta", "Accra" );
print_r( $cities );
echo "<br>";

// To add to beginning of array
array_unshift ($cities, "Lagos", "Prague" );
print_r( $cities );
echo "<br>";

// To remove from end of array
$last_city = array_pop( $cities );
echo $last_city;
echo "<br>";
print_r( $cities );
echo "<br>";

// To remove from start of array
$first_city = array_shift( $cities );
echo $first_city;
echo "<br>";
print_r( $cities );
echo "<br> <br>";

// To remove multiple elements from different positions
$string = 'a,b,c,d,e,f,g,h';
$letters = explode( ",", $string);
print_r( $letters );

$result = array_slice( $letters, 5);
print_r( $result );
// Prints what's left after slice

$result = array_slice( $letters, 0, 5 );
print_r( $result );
// Preserves and prints what was sliced

// Slice from a position not beginning or end
$result = array_slice( $letters, 1, 3 );
print_r( $result );

$result = array_slice( $letters, -5, 2 );
print_r( $result );