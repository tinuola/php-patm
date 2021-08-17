<?php

// Amend array
echo "<pre>";

$cities = [ 'Melbourne', 'Helsinki', 'Lisbon' ];
print_r( $cities );

// To add to an array, to the end
array_push( $cities, "Jakarta", "Accra" );
print_r( $cities );

// To add to beginning of array
array_unshift ($cities, "Lagos", "Prague" );
print_r( $cities );