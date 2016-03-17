<?php

 include 'functions.php';

 session_start();
 
 $title = $_POST["title"];
 $newPost = $_POST["newPost"];

 $connect = connectToDatabase();
 
 mysql_query("INSERT INTO news(title, post) VALUES('$title', '$newPost')") or die($sql);
 
 header("location: index.php");
 
?>
