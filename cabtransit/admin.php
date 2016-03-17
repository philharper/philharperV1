<!DOCTYPE HTML>
<html>
	<head>
		<title>CABTransit | Home</title>
		<link rel="stylesheet" href="styles.css" type="text/css" />
		<link rel="icon" type="image/png" href="favicon.ico">
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	</head>
	<body>
		<div id="content">
			<img src="images/CBT.png" alt="CAB Transit logo" style="width: 400px; left: 0px; top: 0px; position: relative;" />
			<div id="navbar">
				<?php
					include 'functions.php';
					navigationbar(); 
					
					session_start();
					if (!isset ($_SESSION["isAdmin"]))
					{
						header("location: index.php");
					}
					if($_SESSION["isAdmin"] == 0)
					{
						header("location: index.php");
					}
				?>
			</div>
			<div style="margin-top: 50px;">
				<h2>Upload new slider Image</h2>
				<p>Please upload 950x200pixel images for the slider, if you dont the slider will look weird and possibly alter the page.</p>
				<form action="imageUpload.php" method="post" enctype="multipart/form-data">
					<label for="file">Filename:</label>
					<input type="file" name="file" id="file"><br>
					<input type="submit" name="submit" value="Submit">
				</form>
				<h2>Slider Images</h2>
				<?php
				$connect = connectToDatabase();
				
				$sql = mysql_query("SELECT * FROM sliderimages ORDER BY loopNumber") or die($sql);	
				
				while ($array = mysql_fetch_array($sql))	 		
				{
					echo"<h3>$array[loopNumber]</h3><p>$array[url]</p><img src='$array[url]' style='height: 150px; width: 712.5px;'/>
					<a href='movePictureUp.php?ln=$array[loopNumber]'><i class='icon-long-arrow-up' style='font-size: 30px; margin-left: 10px; top: -20px; position: relative; text-decoration: none;'></i></a>
					<a href='movePictureDown.php?ln=$array[loopNumber]'><i class='icon-long-arrow-down' style='font-size: 30px; margin-left: 10px; top: 20px; left: -26.5px; position: relative; text-decoration: none;'></i></a>";
					echo"<form action='deleteImage.php' method='post'><input name='delete' type='hidden' value='$array[id]' /><input type='submit' value='Delete' /></form>";
					echo"<br/>";
				}
				?>
			</div>
		</div>
	</body>
</html>
	