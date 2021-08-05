<?php

// Modulus - Tests for a remainder
$first_num = 100;

$second_num = 12;

$remainder = $first_num % $second_num;

echo $remainder;

echo "<br>";

echo "$first_num % $second_num has a remainder of $remainder";

echo "<br>";

// Exponents
$base_num = 4;

$exponent = 3;

$result1 = $base_num ** $exponent;

// Using PHP built-in function
$result2 = pow($base_num, $exponent);

echo $result1;
echo "<br>";
echo $result2;
echo "<br>";

echo "$base_num to the power of $exponent is $result1";