<?php

// This code is the answer to question 2 of the EWT assignment

// Setting the header to XML so that it knows how display the data
header("content-type: text/xml");

// Connecting to the Database
$connect = mysql_connect("localhost", "pharper", "goyeotho");
mysql_select_db("pharper");

$id = $_GET["id"]; // Acc ID
$n = $_GET["n"]; // Number of people
$d = $_GET["date"]; // Date of booking
$u = $_GET["user"]; // Username from booking
$date = date("Y-m-d");

$number = 0;
$result = mysql_query("SELECT * FROM acc_bookings 
							WHERE accID = '$id' 
							AND thedate > $date") or die(mysql_error());

while($row = mysql_fetch_array($result)) {
	$number = $number + $row[npeople];
}
$number = $number + $n;

if($number > 20)
{
	echo"<?xml version='1.0'?>";
	echo"<booking>";
	echo"<confirmation>";
	echo"<id>2</id>";
	echo"<message>Booking Error</message>";
	echo"</confirmation>";
	echo"</booking>";
}
else
{
// Inserting the booking into the database
	mysql_query("INSERT INTO acc_bookings (accID, thedate, username, npeople) 
		VALUES ('$id', '$d', '$u', '$n')") or die(mysql_error());

	//Confirmation XML for the client
	echo"<?xml version='1.0'?>";
	echo"<booking>";
	echo"<confirmation>";
	echo"<id>1</id>";
	echo"<message>Booking Sucessful</message>";
	echo"</confirmation>";
	echo"</booking>";
}
?>