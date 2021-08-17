<?php

// Exploding and Imploding Strings

// Explode()
$string = 'Yemi, Kola, Tunji, Baba';

$exploded_names = explode( ", ", $string );

echo "<pre>";
print_r( $exploded_names );

// Implode()
$imploded_names = implode( "|", $exploded_names );

echo $imploded_names;