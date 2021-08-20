<?php

// To read a session

// session_start also checks if one is running otherwise gets one going
session_start();

// echo $_SESSION['name'];

if (isset( $_SESSION['name'] )){

	echo $_SESSION['name'];

} else {
	
	echo "Session has not been set.";

}