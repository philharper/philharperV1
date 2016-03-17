<html>
<head>
<style type='text/css'>
body { background-color: black; color: white }
</style>
</head 
<body>
<?php

// This code is the answer to question 5 of the EWT assignment

//read from form 
$a = $_POST["type"];

// Connect to web service using cURL
$conn = curl_init();

curl_setopt($conn, CURLOPT_URL, "http://localhost/~philipharper/ewt/Assignment/PlacesToStay/search.php?type=$a" );
curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($conn, CURLOPT_HEADER, 0);

$response = curl_exec($conn);

$xml = simplexml_load_string($response);
for($index=0; $index < count($xml->places); $index++)
{
	$id = $xml->places[$index]->id;
	$name = $xml->places[$index]->name;
	echo $xml->places[$index]->id . " ";
	echo $xml->places[$index]->name . " ";
	echo $xml->places[$index]->location . " ";
	echo $xml->places[$index]->longitude . " ";
	echo $xml->places[$index]->latitude . " ";
	echo"<a href='book.php?id=$id&name=$name'>Click to book!</a><br/>";
}
?>
</body>
</html>

