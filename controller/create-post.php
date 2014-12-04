<?php
require_once(__DIR__ . "/../model/config.php");

//store information under a variable
$title =filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING) ;
// in parenthesis it tells us where to get our information
$post = filter_input(INPUT_POST,"post",FILTER_SANITIZE_STRING);
// the same thing but instead of title its posts
$date = new DateTime('today');
// stores todays date in a variable called date
$time = new DateTime('America/Los_Angeles');
$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
// echoes thepost
if($query) {
	echo "<p>Successfully inserted post : $title</p>";
	echo  "Posted on:" . $date->format("m/d/y")  . " at " . $time->format("G:i"); 	
}
// if query wasnt successful the else statement would be done
else {
	echo "<p>" . $_SESSION["connection"]->error . "</p>";
}

