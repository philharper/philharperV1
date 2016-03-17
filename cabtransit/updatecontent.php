<?php
	
	session_start();
	
	if (!isset ($_SESSION["isAdmin"]))
	{
		$_SESSION["isAdmin"] = 0;
	}
	if ($_SESSION["isAdmin"] == 1)
	{
		include 'functions.php';
	
		$connect = connectToDatabase();
		
		$id = $_GET["ID"];
		$content = $_GET["content"];
		$IP = $_SERVER['REMOTE_ADDR'];
	
		$sql = mysql_query("UPDATE index_content SET content = '$content' WHERE ID = '$id'") or die(mysql_error());	
		$sql = mysql_query("INSERT INTO updates(ip_address) VALUES('$IP')") or die(mysql_error());	
	
		mysql_close($connect);
	}
?>