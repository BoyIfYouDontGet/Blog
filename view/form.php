<?php
	
	require_once(__DIR__ . "/../model/config.php");
        require_once(__DIR__ . "/../controller/login-verify.php");

// this if sta tement checks if users are authenticated
// they also redirect people that are not registered to the index page
        if (!authenticateUser()) {
            header("Location: " . $path . "index.php");
            die();
        }
        ?>
<h1> <p>Create Blog post</p><p><small>-Tech Guys </small></p> </h1>

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
	<div>
		<label for="title"> Title: </label>
		<input type="text" name="title" placeholder="Title"/>
	</div>
	<div>
		<label for="post"> Post: </label>
		<textarea name="post" placeholder="Post" ></textarea>
	</div>
	<div>
		<button type="submit">Submit</button>
	</div>
</form>