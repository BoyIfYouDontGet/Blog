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
 // since a datebase exists already, this else statent runs
}

$query = $connection->query("CREATE TABLE posts ("
	."id int(11) NOT NULL AUTO_INCREMENT,"
	."title varchar(255) NOT NULL,"
	."post text NOT NULL,"
	. "PRIMARY KEY (id) )");
// created a query and a table
$connection->close();
?>