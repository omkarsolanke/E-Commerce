<?php
ini_set('error_reporting', E_ALL);
$dbhost = 'localhost';
$dbname = 'publictown';
$dbuser = 'root';
define("BASE_URL", "index.php/",);
define("ADMIN_URL", BASE_URL . "admin" . "/");
try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $exception->getMessage();
}