<?php
// looks into this file and uses the information
require_once(__DIR__ . "/../model/config.php");
?>

<h1>Login</h1>
<form method="post" action="<?php echo $path . "controller/login-user.php"?>">
	<div> <label for "username"> Username: </label>
<input type="text" name="username" />
   </div>

<div>
<label for="password"> Password:</label>
<input type"password" name="password" />  
   </div>
<div>
<button type="submit">Submit</button>
</div>
</form>
<?php
// created divs so that the user needs to log in to post on my website. The 3 things they need to input are their email username and password. Then the submit button submits all the information
 // this form is to login a user 
 // the form sends the information to another file that then sends it to database
 ?>