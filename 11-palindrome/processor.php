<?php

// Validate processor
// echo "<pre>";
// print_r( $_POST );

// Validate form submit
if ( isset($_POST['submit']) ){

	// Set user input to variable
	$word = $_POST['word'];

	// Remove white space
	$wordTrimmed = str_replace(" ", "", $word);

	// Reverse string
	$reverseTrimmedWord = strrev($wordTrimmed);

	// Compare and print confirmation
	if ( $wordTrimmed === $reverseTrimmedWord ){
		
		echo "'$word' is a palindrome!";

	} else {

		echo "'$word' is not a palindrome.";
	}

} else {

	echo "Check your form again.";

}