<?php

$cities = [ 'Melbourne', 'Helsinki', 'Lisbon', 'Dakar' ];

$cityPosition = array_rand( $cities );

echo $cityPosition;

echo "<br>";

$city = $cities[ $cityPosition ];

echo $city;

