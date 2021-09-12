<?php

// set server environment first
define(ENVIRONMENT, 'stage');

if (ENVIRONMENT !== 'prod') {
	ini_set('display_errors', 1);
	ini_set('error_reporting', 1);
}

$koneksi = mysqli_connect('host','username','password','databasename');

if (!$koneksi) {
	die("Database error : " . mysqli_connect_error());	
}

?>