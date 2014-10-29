<?php
// this goes and finds a file once
require_once (__DIR__ . "/../model/database.php");

// checks if their is a connection error
$connection = new mysqli($host, $username, $password);
if ($connection->connect_error) {
	die("Error: " . $connection->connect_error);
}
// checks to see if the database exists
$exists = $connection->select_db($database);
	// kills the program if there is a connection error.
if (!$exists) {
// sending commands to the database
$query = $connection->query("CREATE DATABASE $database");
if ($query) {
	echo "Successfully created database: " . $database;
}
}
else {
	echo "database already exists.";
 
}
$connection->close();
?>