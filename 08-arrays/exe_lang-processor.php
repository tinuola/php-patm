<?php

// Check that form data is posting
// echo "<pre>";
// print_r( $_POST );

// Check that form is submitted
if( isset( $_POST[ 'submit' ] ) ){

  // Create "database" of censored words
  $bad_words = [ 'badword1', 'badword2' ];

  // Get sentence
  $sentence = $_POST[ 'sentence' ];

  // If sentence contains any of censored words, replace with ***
  foreach ( $bad_words as $word ){
    if ( str_contains( $sentence, $word ) ){
      $sentence = str_replace( $word, "****", $sentence ); 
    } 
  }
  echo $sentence;

} else {

  echo "Server error. Sorry, please try again.";

}