<?php

// Confirm form is working
// echo "<pre>";
// print_r( $_POST );

// String Length Challenge
$str = $_POST[ 'user_input' ];
$spacing = $_POST[ 'spacing' ];

if ( $spacing == 'yes_space' ) {

  $str_length = strlen( $str );

  echo "The string: '$str', is $str_length characters long.";

} else {

  $str_length = strlen( str_replace( " ", "", $str ) );

  echo "Without spaces included, the string: '$str', is $str_length characters long.";

}


