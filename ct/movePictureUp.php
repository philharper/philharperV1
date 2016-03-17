<?php

	include 'functions.php';
	
	$loopNumber = $_GET["ln"];
	$afterImage = $loopNumber-1;
	
	$connect = connectToDatabase();
	
	if ($loopNumber == 1)
	{
		header("location: admin.php");
	}
	else
	{
		mysql_query("UPDATE sliderimages SET loopNumber = loopNumber + 100 WHERE loopNumber = '$afterImage'") or die(mysql_error());	
		mysql_query("UPDATE sliderimages SET loopNumber = loopNumber - 1 WHERE loopNumber = '$loopNumber'") or die(mysql_error());
		
		$afterImage = $afterImage + 100;
		
		mysql_query("UPDATE sliderimages SET loopNumber = loopNumber - 99 WHERE loopNumber = '$afterImage'") or die(mysql_error());
		
		header("location: admin.php");
	}
?>