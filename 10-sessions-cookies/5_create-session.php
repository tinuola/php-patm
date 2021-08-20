<?php

// To create a session
session_start();

// Store session data
$_SESSION[ 'name' ] = 'Kara';

$_SESSION[ 'age' ] = 30;

// Session data is stored in temporary directory on the server:
// On local machine, go to: Xampp/temp
// Cannot open/read data file directly
