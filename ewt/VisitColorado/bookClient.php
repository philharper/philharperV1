<html>
<head>
<style type='text/css'>
body { background-color: black; color: white }
</style>
</head> 
<body>
<?php

// This code is the answer to question 8 of the EWT assignment

//read from form 
$id = $_POST["id"];
$username = "visitColoradoUsa";
$no = $_POST["number"];
$date = $_POST["date"];

// Connect to web service using cURL
$conn = curl_init();

curl_setopt($conn, CURLOPT_URL, "http://localhost/~philipharper/ewt/Assignment/PlacesToStay/book.php?id=$id&user=$username&n=$no&date=$date" );
curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($conn, CURLOPT_HEADER, 0);

$response = curl_exec($conn);

$xml = simplexml_load_string($response);
for($index=0; $index < count($xml->confirmation); $index++)
{
	echo $xml->confirmation[$index]->message . " ";
}
?>
</body>
</html>

