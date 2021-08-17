<?php

// Splitting a String
$string = 'Halloween';

// $letters = str_split( $string);
$letters = str_split( $string, 3);

echo "<pre>";
print_r( $letters );
// Letters are split into an array
