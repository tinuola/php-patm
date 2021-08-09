<?php

$a = 10;

$b = 5;

$c = true;

$d = true;

// && Operator 

// if ( $a == 10 && $b == 10 ) {
//     echo "True";
// } else {
//     echo "False";
// }

if ( $a == 10 && $b != 10) {
    echo "True";
} else {
    echo "False";
}

// || Operator

// if ( $a > 10 || $b < 10 ) {
//     echo "True";
// } else {
//     echo "False";
// }

// Combining Operators

if ( $c && ( $a > 10 || $b > 10 ) ) {
    echo "True";
} else {
    echo "False";
}

/* Truth Table
&&
T T = T
T F = F
F T = F
F F = F

||
T F = T
T F = T
F T = T
F F = F

*/