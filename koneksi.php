<?php

// // set server environment first
define(ENVIRONMENT, 'stage');

if (ENVIRONMENT == 'prod') {
	ini_set('display_errors', 0);
	ini_set('error_reporting', 0);
}

$koneksi = mysqli_connect('localhost','root','','kapekoding');

if (!$koneksi) {
	die("Database error : " . mysqli_connect_error());	
}

?>