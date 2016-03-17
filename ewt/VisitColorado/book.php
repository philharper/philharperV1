<html>
<head>
<style type='text/css'>
body { background-color: black; color: white }
</style>
</head> 
<body>
<?php

// This code is for question 8 of the EWT assignment

$id = $_GET["id"];
$name = $_GET["name"];

echo"Booking for $name
<form action='bookClient.php' method='post'>
Number of People: <input type='text' name='number'><br>
Date: <input type='text' name='date'>
<input type='hidden' value='$id' name='id'>
<input type='submit' value='Book it!'>
</form>";

?>
</body>
</html>