<?php

// Output the date in the following formats.

// Set default time zone
date_default_timezone_set( 'America/New_York' );

// Monday 6th April 2015
echo date( 'l jS F Y' );
echo "<br>";

// Today is Tuesday
echo "Today is " . date( 'l' ) . ".";
echo "<br>";

// Monday 06 April, 2015
echo date( 'l d F, Y' );
echo "<br>";

// 2015/04/06
echo date( "Y/m/d" );
echo "<br>";

// Monday 6th April 2015, 3:12 PM
echo date( "l, jS F Y, g:i A" );
echo "<br>";

// Check if the current year is a leap year. Echo out a suitable message to say if it is or is not.

$leap_year = date( "L" );

if ( $leap_year ) {
  echo date( "Y" ) . " is a Leap Year!";
} else {
  echo date( "Y" ) . " is not a Leap Year. :(";
}
