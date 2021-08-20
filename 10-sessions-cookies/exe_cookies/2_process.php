<?php

// Set Cookies

// Check that form is processed
// echo "<pre>";
// print_r( $_POST );

// Check that submit is set
if (isset( $_POST[ 'submit' ] )){

	// echo "Data submitted";

	// Retrieve data
	$name = $_POST[ 'username' ];
	$age = $_POST[ 'age' ];
	$color = $_POST[ 'color' ];

	// Set cookies
	setcookie( "name", $name, time()+3600 );
	setcookie( "age", $age, time()+3600 );
	setcookie( "color", $color, time()+3600 );

} else {

	echo "Bad submission. Please try again.";

}
