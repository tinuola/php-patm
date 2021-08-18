<?php

// Confirm post method
// echo "<pre>";
// print_r( $_POST );

// Check form submit value
if ( isset( $_POST[ 'submit' ] ) ){

  // Store credit card number
  $card_num = $_POST[ 'card_num' ];
  
  // Get last four digits
  $card_num_snip = substr( $card_num, -4 );
  // echo $card_num_snip;

  // Get length of card number
  $card_num_len = strlen ( $card_num );

  // Reverse credit card number
  $card_num_reverse = strrev( $card_num );
  // echo $card_num_reverse;
  // echo "<br>";

  // Create counter for odd digits
  $odd_digits_sum = 0;

  // Create counter for even digits
  $even_digits_sum = 0;

  // Loop through the card number
  for ( $i = 0; $i < $card_num_len; $i++ ){
    if ( $i % 2 == 0 ){
      // echo "$card_num_reverse[$i] is odd positioned" . "<br>";
      $digit = $card_num_reverse[$i];
      $odd_digits_sum += $digit;
    } else {
      // echo "$card_num_reverse[$i] is even positioned" . "<br>";
      $digit = $card_num_reverse[$i] * 2;
      // echo $digit . "<br>";
      if ( $digit > 9 ){
        $updated_digit = $digit - 9;
        $even_digits_sum += $updated_digit;
      } else {
        $even_digits_sum += $digit;
      }
    }
  }

  // echo $odd_digits_sum . "<br>";
  // echo $even_digits_sum . "<br>";

  $digits_total = $odd_digits_sum + $even_digits_sum;

  // Bonus!
  $card_hidden_digits = $card_num_len - 4;

  if ( $digits_total % 10 == 0 ){
    echo str_pad( $card_num_snip, $card_hidden_digits, "*", STR_PAD_LEFT ) .  " is a valid credit card number.";
  } else {
    echo str_pad( $card_num_snip, $card_hidden_digits, "*", STR_PAD_LEFT ) . " is not a valid credit card number. Please check your card and try again.";
  }

} else {
  
  echo "Invalid form entry.";

}