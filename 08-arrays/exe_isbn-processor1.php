<?php

/*
HOW TO CHECK IF AN ISBN IS VALID (Length of 10)
STEP 1: Multiply each digit of the ISBN by a weighted value.
The first digit is multiplied by 1, the second digit by 2, the third digit by 3 etc.
STEP 2: Find the total of these multiplied digits.
STEP 3: If the total is divided by 11 and there is no remainder then the ISBN is valid.
*/

// Confirm that post method works
// echo "<pre>";
// print_r ( $_POST );

// Set variable to get isbn from form
$isbn = $_POST[ 'isbn_num' ];
// echo $isbn;

// Remove whitespace
$isbn_clean = str_replace( " ", "", $isbn );

// Set counter
$isbn_count = 0;

/* 
Bonus: Validation
Validate isbn is correct length 
Validate that isbn only contains numbers
*/

// Validation
if ( strlen( $isbn_clean ) === 11 && is_numeric( $isbn_clean ) ){

  // Turn isbn into array
  $isbn_arr = str_split( $isbn_clean );
  // print_r( $isbn_arr);

  // Loop through the array and multiply each item by weighted value
  foreach ( $isbn_arr as $key => $num ){
    $weight = $key + 1;
    $calc = $weight * $num;
    $isbn_count += $calc;
  }
  // echo $isbn_count;

  // Divide sum of counter by 11 to check if isbn is valid
  if ( $isbn_count % 11 === 0 ){
    echo "$isbn is a valid ISBN number.";
  } else {
    echo "$isbn is not a valid ISBN number.";
  }

} else {

  echo "Please enter an ISBN number that contains only 11 integer/numeric characters.";

}
