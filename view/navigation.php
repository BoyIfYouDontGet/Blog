<?php
// looks for php imgs
require_once(__DIR__ . "/../model/config.php");
require_once(__DIR__ . "/../controller/login-verify.php");

// this if statement checks if users are authenticated
// they also redirect people that are not registered to the index page
if (!authenticateUser()) {
	header("Location: ". $path ."index.php");
	die();
}
?>
<nav>
	<ul>

		<li><a href="<?php  echo $path ."posts.php"?>"> Blog Post Forum</a></li>
		</ul>
		</nav>