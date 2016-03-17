<?php

// This code is the answer to question 11 of the EWT assignment

header("content-type: text/xml");

$connect = mysql_connect("localhost", "pharper", "goyeotho");
mysql_select_db("pharper");

$id = $_GET["id"]; 
$date = date("Y-m-d");

$result = mysql_query("SELECT * FROM acc_bookings 
						WHERE accid = '$id'
						AND thedate > $date") 
						or die(mysql_error());

echo"<?xml version='1.0'?>";
echo"<bookings>";
while($row = mysql_fetch_array($result)) {
		echo"<booking>";

		echo"<date>$row[thedate]</date>";
		echo"<number>$row[npeople]</number>";

		echo"</booking>";
}
echo"</bookings>";


?>