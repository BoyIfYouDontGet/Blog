<?php
require_once(__DIR__ . "/../model/config.php");
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING)
// this query selects a username and password that match the users information
$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username' ");