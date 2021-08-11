<?php

$time = time();
// Defaults to num of seconds since "epoch" or Jan 1, 1970
echo $time;
echo "<br>";

// Set date
// Number of seconds between date and epoch

// $date = strtotime( "12th January 2025");
// $date = strtotime( "Next Friday");
$string = "Next Friday";
$date = strtotime( $string );

echo $date;
echo "<br>";

$seconds = $date - $time;
$minutes = $seconds / 60;
$hours = $minutes / 60;
$days = ceil($hours / 24);

// echo "It is $days days until Jan 12, 2025";
// echo "It is $days days until Friday.";
echo "It is $days days until $string.";