<?php

$connect = mysql_connect("localhost", "philharp", "Y0ping~1993");
mysql_select_db("question");

$answers = array(mysql_real_escape_string($_SERVER["REMOTE_ADDR"]), 
mysql_real_escape_string($_POST["smartPhone"]),
mysql_real_escape_string($_POST["OS"]),
mysql_real_escape_string($_POST["passcode"]),
mysql_real_escape_string($_POST["location"]),
mysql_real_escape_string($_POST["unlock"]),
mysql_real_escape_string($_POST["tablet"]), 
mysql_real_escape_string($_POST["multiple"]),
mysql_real_escape_string($_POST["extraInfo"]));

$query = "INSERT INTO results (IP, smartPhone, OS, passcode, location, wifi, tablet, multiple, extraInfo) VALUES ('$answers[0]', '$answers[1]', '$answers[2]', '$answers[3]', '$answers[4]', '$answers[5]', '$answers[6]', '$answers[7]', '$answers[8]')";
mysql_query($query) or die(mysql_error());


echo"Thank you for completing my questionnaire. It will be very helpful for my final year project.";


?>