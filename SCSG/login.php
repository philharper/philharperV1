<?php

	session_start();

	$a = $_POST["username"];
	$b = $_POST["password"];
	
	$conn = mysql_connect("localhost", "scouts", "scouts", "Scouts");
	mysql_select_db("Scouts");
	
	$sql = "SELECT * FROM Accounts WHERE username = '$a' and password = '$b'";
	$result = mysql_query($sql) or die(mysql_error().$sql);
	$row = mysql_fetch_array($result);
	
	if ( $row == 0 )
	{
		echo"Error: Wrong username or password";
	}
	else {
		$_SESSION["sessionusername"] = $a;
		header("Location: adminAccount.html");
	}

?>