<!DOCTYPE HTML>
<html>
	<head>
		<title>CABTransit | Telebus Benefits</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css" type="text/css" />
		<link rel="icon" type="image/png" href="favicon.ico">
		<style type="text/css">
			#content img {width: 100%; position: relative; margin-top: 25px;}
			h1 {color: #00B0F0;}
			h3 {color: #00B0F0;}
			#innerContent li {margin-bottom: 10px;}
		</style>
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
				<div id="innerContent" style="float: left; width: 73%;">
					<h1>Telebus Benefits</h1>
					<h3>Increase passenger numbers</h3>
					<p>Telebus unique trips management algorithm quickly finds the quickest and most convenient trip for the client.</p>
					<h3>Save time route planning</h3>
					<p>Telebus saves time by quickly generating totally automatic schedules that are already fully optimised and by reducing the driver&#39;s time to get started or choose the best route for the time of day. </p>
					<h3>Maximisation</h3>
					<ul>
						<li>Telebus pre-books and schedules the trips in real time using GIS, then checks the schedules to maximise efficiency as the remaining requests comes in. Using time as the main criterion it creates the  most efficient schedules that maximise the number of trips.</li>
						<li>Disability management controls the extra factors needed for community services to make drivers aware of people&#39;s needs either to get into the bus, use a wheelchair, have an essential escort  or have information about a special need.</li>
						<li>AutoScheduler calculates the route and optimises the passenger load, particularly real-time calculation of group passengers lists, putting them in the best time order of collection and delivery.</li>
						<li>Pre-Planned group trips can be repeated daily, weekly or monthly and ad-hoc groups who phone in on the day can be kept together and integrated in to the running schedule</li>
						<li>Tracking and Road Speed monitors the position of every bus on the network and uses the average speeds to  improve the calculations in the AutoScheduler.</li>
						<li>The InCabUnit downloads the schedule and its changes during the day and monitors the passenger list while the integrated sat/nav gives directions from stop to stop for DRT.</li>
						<li> The Congestion Map uses Tracking plus the InCabUnit schedule to pick the trouble spots and faster than average sections of road to refine the road map even more.</li>
						<li>Manual options for bookings give complete flexibility to make special adjustments</li>
						<li>Cross Boundary trips between depot areas when operating in a multi-depot mode are made easy</li>
						<li>Special Trips scheduled when managing outings</li>
						<li>Special Configurations set up using the standard units but customised to users requirements.</li>
					</ul>
				</div>	
				<div style="float: right; width: 20%; margin-right: 10px; margin-top: 50px;">
					<img src="images/image340.jpg" alt="Routing map"/>
					<img src="images/image339.jpg" alt="Disabled passenger boarding bus" />
					<img src="images/image342.jpg" alt="System graph"/>
					<img src="images/terminal.jpg" alt="In cab SatNav"/>
				</div>		
			</div>
			<?php footer() ?>
		</div>
	</body>
</html>