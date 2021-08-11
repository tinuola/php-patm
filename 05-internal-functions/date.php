<?php
// https://www.php.net/manual/en/book.datetime.php
// https://www.php.net/manual/en/function.date
// https://www.php.net/manual/en/datetime.format.php
// https://www.php.net/manual/en/timezones.php

date_default_timezone_set( 'America/Los_Angeles' );

echo date( 'Y' );

echo "<br>";

echo "Today is " . date( 'l' ) . ".";

echo "<br>";

echo "The time is " . date( 'g:i a' ) . ".";