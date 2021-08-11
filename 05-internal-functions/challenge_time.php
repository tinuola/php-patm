<?php

// Write a script to display the number of days until Christmas.

// Set time zone
date_default_timezone_set( 'America/Los_Angeles' );

// Set today's date
$today = time();

// Set Xmas date
$xmas = strtotime( "December 25" );
// echo $xmas;

// Calculate difference
$days = ( $xmas - $today ) / 60 / 60 / 24 ;

// Print 
echo "There are " . ceil( $days ) . " days between today and Xmas.";