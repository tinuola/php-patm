<?php

// String Length
$sentence = "This is a sentence.";
$sentence_length = strlen( $sentence );
echo $sentence_length;
echo "<br><br>";

// Word Count
$word_count = str_word_count( $sentence );
echo $word_count;
echo "<br><br>";

// String Replace
$string = "Ben|Sam|Amy|Jane";
$replaced_string = str_replace( "|", ", ", $string );
echo $string;
echo "<br>";
echo $replaced_string;
echo "<br><br>";

// Randomise a String
$game = "basketball";
$shuffled_str = str_shuffle( $game );
echo $game;
echo "<br>";
echo $shuffled_str;
echo "<br><br>";

// Escaping Strings
echo "Tom's got a great book called \"Hello World!\"";
echo "<br>";
echo 'Tom\'s got a great book called "Hello World!"';