<?php

// This code is the answer to question 1 of the EWT assignment

header("content-type: text/xml");

$connect = mysql_connect("localhost", "pharper", "goyeotho");
mysql_select_db("pharper");

if(isset($_GET["type"]) or !empty($_GET["type"]))
{
	$type = $_GET["type"];
	$result = mysql_query("SELECT * FROM accommodation WHERE type = '$type'") or die(mysql_error());
}
else 
{
	$location = $_GET["location"];
	$result = mysql_query("SELECT * FROM accommodation WHERE location = '$location'") or die(mysql_error());
}

$ifRow = mysql_num_rows($result);

if($ifRow > 1)
{
	echo"<?xml version='1.0'?>";
	echo"<accommodation>";
	while($row = mysql_fetch_array($result))
	{
		echo"<places>";
		echo"<id>$row[ID]</id>";
		echo"<name>$row[name]</name>";
		echo"<location>$row[location]</location>";
		echo"<latitude>$row[latitude]</latitude>";
		echo"<longitude>$row[longitude]</longitude>";
		echo"</places>";
	}

	echo"</accommodation>";
}
else
{
	echo"<error>";
	echo"<id>1</id>";
	echo"<message>No Matches found</message>";
	echo"</error>";
}

mysql_close($connect);
?>