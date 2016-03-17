<?php

	include 'functions.php';
	
	$loopNumber = $_GET["ln"];
	$afterImage = $loopNumber+1;
	
	$connect = connectToDatabase();
	
	$sql = mysql_query("SELECT * FROM sliderimages ORDER BY loopNumber DESC LIMIT 1") or die(mysql_error());	
	$result = mysql_fetch_array($sql);
	
	if($result["loopNumber"] == $loopNumber)
	{
		header("location: admin.php");
	}
	else 
	{
		mysql_query("UPDATE sliderimages SET loopNumber = loopNumber - 100 WHERE loopNumber = '$afterImage'") or die(mysql_error());	
		mysql_query("UPDATE sliderimages SET loopNumber = loopNumber + 1 WHERE loopNumber = '$loopNumber'") or die(mysql_error());
	
		$afterImage = $afterImage - 100;
	
		mysql_query("UPDATE sliderimages SET loopNumber = loopNumber + 99 WHERE loopNumber = '$afterImage'") or die(mysql_error());
	
		header("location: admin.php");
	}
?>