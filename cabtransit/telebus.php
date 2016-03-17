<!DOCTYPE HTML>
<html>
	<head>
		<title>CABTransit | Telebus System</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css" type="text/css" />
		<link rel="icon" type="image/png" href="favicon.ico">
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
			<span style="display: block; width: 70%; margin-left: auto; margin-right: auto; height: 100px;"><img src="images/CBT.png" alt="CAB Transit logo" style="width: 400px; left: 0px; top: 0px; position: relative;" /></span>
			<div id="content">
			   	<div id="navbar">
					<?php navigationbar(); ?>
				</div>
				<div id="tbText">
					<h1>Telebus System</h1>
					<p>The Telebus System has been designed to increase passenger numbers, remove time route planning as well as maximise efficiency through new technologies.</p>
					<p>A complete modular system it includes a range of additional products that centre on scheduling buses for any mix or DRT, fixed stops, cross country, area to area, semi flexible with pre-paid or payment on entry.</p>
					<p>Incorporating disability management so that it can be used for both social needs and non-emergency patient transport as well as servicing transport for the able bodied.</p>
					<p>GIS based The Telebus System provides mapping facilities to monitor and display the routes and the buses both for the managers who run the system and to incorporate into websites for general information to the public.</p>
					<h2>What does the Telebus Complete System do?</h2>
					<ul>
						<li>Easier and quicker to book meaning more time for the client</li>
						<li>Sets up accurate Schedules using every bus to the maximum capacity</li>
						<li>Manages the fleet, plotting the daily routes and tracking the buses</li>
						<li>Optimises the routing to get the shortest trip times, re-checking previous bookings</li>
						<li>Route time based on GIS and timings taken from your own buses</li>
						<li>Pre-Planned and Ad-Hoc groups managed for the most efficient pickup/drop off  sequence to get the most efficient point to point passenger trips and maximum use of the fleet</li>
					</ul>			
				</div>
				<div id="tbImage">
					<img src="images/image308.png" alt="Diagram of system" style="margin-top: 70px;"/>
				</div>
			</div>
			<?php footer() ?>
		</div>
	</body>
</html>