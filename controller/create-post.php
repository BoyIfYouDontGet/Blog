<?php
require_once(__DIR__ . "/../model/config.php");
$connection = new mysqli($host, $username, $password, $database);
//store information under a variable
$title =filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING) ;
// in parenthesis it tells us where to get our information
$post = filter_input(INPUT_POST,"post",FILTER_SANITIZE_STRING);
// the same thing but instead of title its posts
$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");
// echoes thepost
if($query) {
	echo "<p>Successfully inserted post : $title</p>";	
}
// if query wasnt successful the else statement would be done
else {
	echo "<p>$connection->error</p>";
}

// creates a query to connect you to the database
$connection->close();