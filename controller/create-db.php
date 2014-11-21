<?php
// this goes and finds a file once
require_once (__DIR__ . "/../model/config.php");

// checks if their is a connection error



$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
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
	echo "<p>" . $_SESSION["connection"]->error . "</p>";
}
// added paragraph tags
?>