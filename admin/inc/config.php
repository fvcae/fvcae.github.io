<?php
// Error Reporting Turn On
ini_set('error_reporting', E_ALL);

// Setting up the time zone
date_default_timezone_set('Asia/Dubai');

// Host Name
$dbhost = 'sql100.epizy.com';

// Database Name
$dbname = 'epiz_29289138_fv';

// Database Username
$dbuser = 'epiz_29289138';

// Database Password
$dbpass = 'jnAUg7WPwG5';

// Defining base url
define("BASE_URL", "https://fvcae.github.io/");

// Getting Admin url
define("ADMIN_URL", BASE_URL . "admin" . "/");

try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $exception->getMessage();
}