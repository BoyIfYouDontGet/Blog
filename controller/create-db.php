<?php
// this goes and finds a file once
require_once (__DIR__ . "/../model/database.php");

// checks if their is a connection error
$connection = new mysqli($host, $username, $password);
if ($connection->connect_error) {
	die("<p>Error: " . $connection->connect_error . "</p>");
}
// checks to see if the database exists
$exists = $connection->select_db($database);
	// kills the program if there is a connection error.
if (!$exists) {
// sending commands to the database
$query = $connection->query("CREATE DATABASE $database");
if ($query) {
	echo "Successfully created database: " . $database . "</p>";
}
}
else {
	echo "<p>database already exists.<p>";
 // since a datebase exists already, this else statent runs
}

$query = $connection->query("CREATE TABLE posts ("
	."id int(11) NOT NULL AUTO_INCREMENT,"
	."title varchar(255) NOT NULL,"
	."post text NOT NULL,"
	. "PRIMARY KEY (id) )");
// created a query and a table
//checks to see if the table exists in our database
if ($query) {
	echo "<p>Successfully created table: posts</p> ";
}
else {
	echo "<p>$connection->error</p>";
}
// added paragraph tags
$connection->close();
?>