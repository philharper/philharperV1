<?php
	$allowedExts = array("jpg", "jpeg", "gif", "png");
	$extension = end(explode(".", $_FILES["file"]["name"]));
	if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/png")
	|| ($_FILES["file"]["type"] == "image/pjpeg"))
	&& ($_FILES["file"]["size"] < 200000)
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
	
	    	if (file_exists("images/" . $_FILES["file"]["name"]))
	    	{
	    		echo $_FILES["file"]["name"] . " already exists. ";
	    	}
	    	else
	    	{
	    		$conn = mysql_connect("database.philharper.co.uk", "philharper", "nickwhitelegg");
				mysql_select_db("philharper_db");

				$sql = mysql_query ("INSERT INTO User-Images (Image-Location) VALUES ('images/".$_FILES['file']['name']."');");
				$result = mysql_query($sql) or die (mysql_error().$sql);
				echo"$result";
				
	    	 	
	    	 	move_uploaded_file($_FILES["file"]["tmp_name"],
	    	  	"images/" . $_FILES["file"]["name"]);
	    	  	echo "Stored in: " . "images/" . $_FILES["file"]["name"];
   			}
    	}
  	}
	else
  	{
  		echo "Invalid file";
  	}
?>