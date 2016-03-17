<!DOCTYPE HTML>
<html>
	<head>
		<title>CABTransit | Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="styles.css" type="text/css" />
		<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    	<link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
    	<link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
    	<link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
		<link rel="icon" type="image/png" href="favicon.ico">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="JS/jquery.nivo.slider.pack.js" type="text/javascript"></script>
		<script src="JS/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="JS/editContent.js" type="text/javascript"></script>
		<script src="JS/ajaxWrapper.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(window).load(function() {
   				$('#slider').nivoSlider();
			});
		</script>
		<script>
  			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  			ga('create', 'UA-41990759-1', 'cabtransit.com');
  			ga('send', 'pageview');
		</script>
	</head>
	<body>
	<?php
	include 'functions.php';
	
	session_start();
	adminbar();
	?>
	<div id="wrapper">
		<a href="index.php"><span style="display: block; width: 70%; margin-left: auto; margin-right: auto; height: 100px;"><img src="images/CBT.png" alt="CAB Transit logo" style="width: 400px; left: 0px; top: 0px; position: relative;" /></span></a>
		<div id="content" class="clear">
			<div id="navbar" style="text-align: center;">
				<?php navigationbar(); ?>
			</div>
			<div class="slider-wrapper">
	    		<div id="slider" class="nivoSlider">
	    			<?php
	    				$connect = connectToDatabase();
					
						$imageSql = mysql_query("SELECT * FROM sliderimages ORDER BY loopNumber") or die($imageSql);
						
						if (mysql_num_rows($imageSql) == 0)
						{
							echo"<img src='http://placehold.it/950x200'>";
						}
						else 
						{
							while ($array = mysql_fetch_array($imageSql))
							{
								echo"<img src='$array[url]' alt='Slider image' />";
							}
						}
	    	    	?>
	    		</div>
			</div>
			<div id="headtext">
				<p>Welcome to CABTransit, specialists in efficiency driven, integrated passenger scheduling systems for community transport, schools and commercial operations.</p>
			</div>
			<div style="float: right; margin-right: 25px; margin-top: 25px; width: 270px;">
				<span style="display: block;"><a href="mailto:info@cabtransit.com"><img style="float: left; margin-right: 5px;" src="images/image343.png" alt="Email icon" /></a></span>
				<h3 style="float: left; margin-top: 11px; margin-left: 2px;">info@cabtransit.com</h3>
				<span style="display: block;"><a href="tel://01420550292"><img style="float: left; margin-right: 5px;" src="images/image344.png" alt="Phone icon" /></a></span>
				<h3 style="float: left; margin-top: 13px; margin-left: 2px;">01420 550292</h3>
			</div>
			<hr style="height: 5px; width: 99%; float: left; margin-left: 3px;">
			<div id="news">
				<h2>News</h2>
				<?php					
					$sql = mysql_query("SELECT * FROM news ORDER BY ID DESC LIMIT 5") or die($sql);
							
					if ($_SESSION["isAdmin"] == 1)
					{
						echo"<form action='newPost.php' method='post'>";
						echo"New post<br/>";
						echo"<input type='text' name='title'>";
						echo"<textarea rows='4' cols='33' name='newPost'></textarea>";
						echo"<input type='submit' value='Save' />";
						echo"</form>";
					}
							
					while ($array = mysql_fetch_array($sql))
					{
						echo"<div class='newsPost'>";
						echo"<h3>$array[title]</h3>";
						echo"<img src='bullet.png' alt='Bullet point' style='float: left;'/><p style='top: 20px; left: 0px; position: relative; margin-left: 33px;'>$array[post]</p>";
						if ($_SESSION["isAdmin"] == 1)
						{
							echo"<br/><form action='deletePost.php' method='post'><input name='delete' type='hidden' value='$array[ID]' /><input type='submit' value='Delete' /></form>";
						}
						echo"<hr style='top: 20px; left: 0px; position: relative;'>";
						echo"</div>";
					}	
				?>
				</div>
				<div id="autoSchedulerBack">
						
				</div>
				<div id="autoScheduler">
					<p id="editContent" <?php if ($_SESSION["isAdmin"] == 1) { echo"contenteditable='true'"; } ?>><?php $sql = mysql_query("SELECT * FROM index_content WHERE ID = 4"); $result = mysql_fetch_array($sql); echo"$result[content]";?></p>
				</div>
				<div id="debug"></div>
				<div id="teleBus">
					<img src="images/CT4TB.png" style="width: 100%;" alt="Telebus logo"/>
					<p style="margin-right: 10px;">CABTransits range of telebus uses the latest in GIS integrated IT passenger scheduling for Community Transport</p>
					<ul>
						<li>Demand Responsive Transport (DRT)</li>
						<li>Flexible Bus Services</li>
						<li>Dial a Ride</li>
						<li>Fixed route services</li>
						<li>Special map/tracking applications</li>
						<li>Eco shceduling</li>
					</ul>
				</div>
			</div>
			<?php footer() ?>
		</div>
	</body>
</html>