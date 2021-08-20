<?php

session_start();

if( isset($_SESSION['count']) ){

	$count = $_SESSION['count']++;

	echo "You have visited this page $count times.";

} else {

	$_SESSION['count'] = 1;

	echo "This is your first visit to this page.";

}