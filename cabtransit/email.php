<?php
   
 	$field_name = $_POST['cf_name'];
	$field_email = $_POST['cf_email'];
	$field_message = $_POST['cf_message'];
	
	echo"$field_name";	
	echo"$field_email";	
	echo"$field_message";
		
	$mail_to = 'phil.harper93@gmail.com';
	
	$subject = 'Message from a site visitor ' . $field_name;

	$body_message = 'From: '.$field_name."\n";
	$body_message .= 'E-mail: '.$field_email."\n";
	$body_message .= 'Message: '.$field_message;

	$headers = "From: $field_email\r\n";
	$headers .= "Reply-To: $field_email\r\n";

	mail($mail_to, $subject, $body_message, $headers);
?>