<?php

// List all multiples of 6 that are less than or equal to 60

echo "Print Multiples of 6.";
echo "<br><br>";

for ( $i = 0; $i <= 60; $i += 6 ) {
    echo $i . "<br>";
}

echo "<br>";

$j = 0;
while ( $j <= 60 ) {
    echo $j . "<br>";
    $j += 6;
}

echo "<br>";

// Fizz Buzz
/*
Multiples of 3       => Fizz
Multiples of 5       => Buzz
Multiples of 3 and 5 => FizzBuzz
*/

echo "Fizz Buzz.";
echo "<br><br>";

for ( $i = 1; $i <= 100; $i++ ) {

    if ( $i % 3 == 0 && $i % 5 == 0 ) {
        echo "Fizz Buzz<br>";
    } else if ( $i % 3 == 0 ) {
        echo "Fizz<br>";
    } else if ( $i % 5 == 0 ) {
        echo "Buzz<br>";
    } else {
        echo $i . "<br>";
    }

}