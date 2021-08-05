<?php

$first_name = 'Lola';

$last_name = 'Sunday';

$age = 34;

echo "Hello, $first_name $last_name.";

echo '<br>';

// Concatenation operator
echo "Hello, " . $first_name . " " . $last_name . ".";

echo '<br>';

echo "She is $age years old.";

echo '<br>';

// Concatenation operator
echo "She is " . $age . " years old."; 

echo '<br><br>';

// More concatenation
$firstSentence = "The quick brown fox jumped over the lazy dog. However, the dog was not happy with the fox at all and started to bak at the fox.";

$secondSentence = "The quick brown fox jumped ";
$secondSentence .= "over the lazy dog. ";
$secondSentence .= "However, the dog was not happy with the fox ";
$secondSentence .= "at all and started to bark at the fox.";

echo $firstSentence;
echo "<br><br>";
echo $secondSentence;