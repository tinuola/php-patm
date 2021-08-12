<?php

// Posting data from form and printing it out.
// echo "<pre>";
// print_r( $_POST );



// isset checks whether a variable is empty. 
// Also check whether the variable is set/declared:
if ( isset( $_POST[ 'submit' ] ) ){
// if ( $_POST ) {
  
  $lastname = $_POST[ 'lastname' ];
  
  $gender = $_POST[ 'gender' ];
  
  echo "Your last name is $lastname and your gender is $gender.";

} else {

  echo "There is no data to post.";

}
