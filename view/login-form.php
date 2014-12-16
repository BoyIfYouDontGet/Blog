<?php
// looks into this file and uses the information
// line 24: created divs so that the user needs to log in to post on my website. The 3 things they need to input are their email username and password. Then the submit button submits all the information
 // line 25:this form is to login a user 
 // line 26:the form sends the information to another file that then sends it to database
require_once(__DIR__ . "/../model/config.php");
?>

<h1>Login</h1>

<form method="post" action="<?php echo $path . "controller/login-user.php" ?>">
	<div> 
		<label for "username"> Username: </label>
		<input type="text" name="username" placeholder="Username" />
   	</div>

	<div>
		<label for="password"> Password:</label>
		<input type="password" name="password" placeholder="Password" />  
   	</div>
	
	<div>
		<button type="submit">Submit</button>
	</div>
</form>
