<?php

	include 'functions.php';

	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$extension = end(explode(".", $_FILES["file"]["name"]));
	if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/jpg")
		|| ($_FILES["file"]["type"] == "image/pjpeg")
		|| ($_FILES["file"]["type"] == "image/x-png")
		|| ($_FILES["file"]["type"] == "image/png"))
		&& in_array($extension, $allowedExts))
	  {
	  if ($_FILES["file"]["error"] > 0)
    	{
    		echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    	}
  		else
    	{
    		echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    		echo "Type: " . $_FILES["file"]["type"] . "<br>";
    		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    		echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
		
		    if (file_exists("sliderImages/" . $_FILES["file"]["name"]))
      		{
      			echo $_FILES["file"]["name"] . " already exists. ";
      		}
    		else
     		{
      			move_uploaded_file($_FILES["file"]["tmp_name"],
      			"sliderImages/" . $_FILES["file"]["name"]);
      			echo "Stored in: " . "sliderImages/" . $_FILES["file"]["name"];
      			
				$imageURL = "sliderImages/" . $_FILES["file"]["name"];
      			
				$connect = connectToDatabase();
				
				$sql = mysql_query("SELECT * FROM sliderimages ORDER BY loopNumber DESC LIMIT 1") or die(mysql_error());	
				$result = mysql_fetch_array($sql);
				
				$loopNumber = $result[loopNumber] + 1;
				
				mysql_query("INSERT INTO sliderimages(url, loopNumber) VALUES ('$imageURL', '$loopNumber')") or die($sql);
				
				header ("location: admin.php");
      		}
    	}
  	   }
	   else
  		{
  			echo "Invalid file";
  		}
?>