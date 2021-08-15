<?php

// Alternate/Instructor solution
// No validation

if(isset($_POST['submit'])){

  $isbn = $_POST[ 'isbn_num' ];

  $total = 0;
  
  $incrementer = 1;
  
  $digits = str_split( $isbn );

  foreach( $digits as $digit ){
    $total += $digit * $incrementer;
    $incrementer++;
  }

  if ($total % 11 == 0 ){
    echo "Valid";
  } else {
    echo "Invalid";
  }

}