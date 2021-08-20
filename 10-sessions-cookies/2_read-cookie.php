<?php

// Read a cookie

// $_COOKIE [ 'fruit' ]

// echo $_COOKIE[ 'fruit' ];

if( isset( $_COOKIE [ 'fruit' ] ) ){
	echo $_COOKIE[ 'fruit' ];
} else {
	echo "There is no cookie for you. Sorry.";
}
// Find error message in php_error_log