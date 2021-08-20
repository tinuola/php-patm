<?php

// Print cookie data

$name = $_COOKIE[ 'name' ];
$age = $_COOKIE[ 'age' ];
$color = $_COOKIE[ 'color' ];

if ( $name && $age && $color ){

	echo "Your name is $name.<br>";
	echo "Your age is $age.<br>";
	echo "Your favorite color is $color.";

} else {

	echo "Insufficient data.";

}
