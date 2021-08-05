<?php

// Area of a rectangle
$rect_length = 10;
$rect_width = 5;
$rect_area = $rect_length * $rect_width;
echo "The area of a rectangle with a length of $rect_length and a width of $rect_width is $rect_area.";
echo "<br><br>";

// Area of a triangle
$tri_base = 12;
$tri_height = 3;
$tri_area = ($tri_base * $tri_height) / 2;
echo "The area of a triangle with a base of $tri_base and a height of $tri_height is $tri_area.";
echo "<br><br>";

// Area of a circle
$circ_radius = 5;
$circ_area = pi() * pow($circ_radius,2);
echo "The area of a circle with a radius of $circ_radius and using PHP's pi() function is $circ_area.";
echo "<br><br>";

// Area of a trapezoid
$trap_baseA = 10;
$trap_baseB = 8;
$trap_height = 4;
$trap_area = (($trap_baseA + $trap_baseB) / 2) * $trap_height;
echo "The area of a trapezoid with bases of $trap_baseA and $trap_baseB, and a height of $trap_height is $trap_area.";
echo "<br><br>";

// Concatenation
$first_name = 'John';
$middle_name = 'Henry';
$last_name = 'Green';
$age = 42;
echo $first_name . " " . $middle_name . " " . $last_name . " is " . $age . " years old.";