<?php

/*
This challenge looks at how we can escape strings in order to produce validated output.

- This is Sam's apple!
- Sam said, "Hello, Colin. How's your new PHP course going?"
- Sam's mother ordered a new book called "A Day in my Life" from her local bookstore.

BONUS: Replace the name Sam with a variable $name and produce the required output.
*/

$name = "Jen";

// echo "This is Sam's apple!";
echo "This is $name's apple!";

echo "<br><br>";

// echo "Sam said, \"Hello, Colin. How's your new PHP course going?\".";
echo "$name said, \"Hello, Colin. How's your new PHP course going?\".";

echo "<br><br>";

// echo "Sam's mother ordered a new book called \"A Day in my Life\" from her local bookstore.";
echo "$name's mother ordered a new book called \"A Day in my Life\" from her local bookstore.";

echo "<br><br>";

// echo 'This is Sam\'s apple!';
echo "This is $name's apple!";

echo "<br><br>";

// echo 'Sam said, "Hello, Colin. How\'s your new PHP course going?"';
echo "$name said, 'Hello, Colin. How\'s your new PHP course going?'";

echo "<br><br>";

// echo 'Sam\'s mother ordered a new book called "A Day in my Life" from her local bookstore.';
echo "$name's mother ordered a new book called \"A Day in my Life\" from her local bookstore.";