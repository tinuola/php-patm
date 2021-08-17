<?php

/*
Place the following cities into an array:
London, Paris, Amsterdam, New York, Berlin, Brisbane
*/

echo "<pre>";

$cities = [ "London", "Paris", "Amsterdam", "New York", "Berlin", "Brisbane" ];

// OR explode the string!
// $string = 'London, Paris, Amsterdam, New York, Berlin, Brisbane';
// $cities = explode(", ", $string);

// Sort the cities alphabetically.
sort( $cities );
print_r( $cities );

// Display the cities as an ordered list.
echo "<ol>";

foreach ( $cities as $city ){
  echo "<li>$city</li>";
}

echo "</ol>";

/* 
Add the following cities by using the array_push function: 
Sydney, Helsinki, Beijing, Dublin, Rome 
*/
array_push( $cities, "Sydney", "Helsinki", "Beijing", "Dublin", "Rome");

// Sort the cities alphabetically.
sort( $cities );

// Display the cities as an ordered list.
echo "<ol>";

foreach ($cities as $city ){
  echo "<li>$city</li>";
}

echo "</ol>";