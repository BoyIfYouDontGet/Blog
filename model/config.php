<?php
require_once(__DIR__ . "/database.php");
$path = "/BLOG/";
//refracted the variable from database.php to this config.php. I refractured this code because it make it easier for us to maintain our website
// variables
$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";
/// this variable contains all the functions (open connection close connection etc. )
$connection = new Database ($host, $username,$password, $database);


?>