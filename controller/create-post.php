<?php
//store information under a variable
$title =filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING) ;
// in parenthesis it tells us where to get our information
$post = filter_input(INPUT_POST,"post",FILTER_SANITIZE_STRING);
// the same thing but instead of title its posts
echo "<p>Title:$title</p>";
echo "<p>Post:$post</p>";
?>