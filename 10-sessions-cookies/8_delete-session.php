<?php

// Start session
session_start();

// Remove particular content
unset($_SESSION['name']);

session_destroy();
