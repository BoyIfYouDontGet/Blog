<?php
require_once(__DIR__ . "/../model/config.php");
// this query will show all of our posts from the beginning of time!
        $query = "SELECT * FROM posts";
        $result = $_SESSION["connection"]->query($query);
//this if statement echoes out all of our titles and posts 
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                echo "<div class='post'>";
                echo "<h2>" . $row['title'] . "</h2>";
                echo "<br />";
                echo "<p>" . $row['post'] . "</h1>";
                echo "<br/>";
                echo "</div";
            }
        }
        