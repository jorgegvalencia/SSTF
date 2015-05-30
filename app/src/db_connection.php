<?php

$user = 'root';
$password = 'root';
$db = 'tracker';
$host = 'localhost';
$port = 8889;

try {
	$conn = mysqli_connect($host, $user, $password, $db,$port);	
} catch (Exception $e) {
	header($_SERVER["SERVER_PROTOCOL"]." 500 Internal Server Error");
    die("Connection failed: " . mysqli_connect_error());
}

// Check connection
if (!$conn) {
	header($_SERVER["SERVER_PROTOCOL"]." 500 Internal Server Error");
    die("Connection failed: " . mysqli_connect_error());
}


?>