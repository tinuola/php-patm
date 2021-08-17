<?php

// Sorting through array

$names = [ 'Sade', 'Tope', 'Amina', 'Chinedu', 'Bola' ];

// Ascending order
// sort( $names );

// Reverse sort - descending order
rsort( $names );

echo "<ul>";

foreach ( $names as $name ){
  echo "<li>$name</li>";
}

echo "</ul>";