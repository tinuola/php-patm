<?php

// Start session
session_start();

// Check if session data exists?
if( isset($_SESSION['count']) ){

	$count = $_SESSION['count'];

	if ( $count > 1 ){
		echo "You have visited this page $count times.";
	} else {
		echo "This is your first visit to this page.";
	}

} else {

	echo "No session data captured.";

}