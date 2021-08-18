<?php

/* 
In a pack of playing cards there are 4 suits: clubs, diamonds, hearts, spades.
There are 13 cards in each suit: Ace, 2,3,4,5,6,7,8,9,10, Jack, Queen, King.
Your task is to create two arrays, one for the suits and one for the values.
You simply need to output the playing card to the user.
*/

$suits = [ 'Clubs', 'Diamonds', 'Hearts', 'Spades' ];

$pick_suit = array_rand( $suits );

$values = [ 'Ace', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'Jack', 'Queen', 'King' ];

$pick_value = array_rand( $values );

echo "The randomly selected card is the $values[$pick_value] of $suits[$pick_suit].";