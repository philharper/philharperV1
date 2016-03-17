<?php

 include 'functions.php';

 session_start();
 
 $connect = connectToDatabase();
 
 $username = mysql_real_escape_string($_POST["username"]);
 $password = mysql_real_escape_string($_POST["password"]);
 
 $sql = mysql_query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
 
 $result = mysql_fetch_array($sql);
 
 if ($result["isadmin"] == 1)
 {
 	$_SESSION["isAdmin"] = 1;
	header("location: admin.php");
 }
 else 
 {
 	echo"Error: Wrong username or password!";
	session_destroy();
 }

?>