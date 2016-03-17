<!DOCTYPE HTML>
<html>
	<head>
		<title>CABTransit | Telebus Scheduling</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css" type="text/css" />
		<link rel="icon" type="image/png" href="favicon.ico">
		<style type="text/css">
			h1 {color: #00B0F0;}
			h3 {color: #00B0F0;}
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
					<h1>Telebus Scheduling</h1>
					<h3>New System New Levels of Efficiency</h3>
					<p>Telebus call centre scheduling makes your call centre more accurate and responsive enabling schedulers to give users the exact trip or the best choices that will get them to their destination on time.<br/><br/>
						This real-time booking and scheduling is automatic and includes consistent re-assessment of the schedule so that irrespective of when people phone in to book the trip Telebus delivers the best possible use of the buses.<br/><br/>
						The calculation is time based using the tracked times from the fleets own vehicles to create the most accurate schedules taking into account the seasonal changes in traffic for holidays as well as the days to the week and the rush-hour times.<br/><br/>
						Specially designed to manage transport for the elderly, disabled and schools, this system delivers precisely timed schedules with a wealth of tools to manage the multiple factors that are required.; These include the passenger’s disability, need for exclusive use, boarding times, essential escorts, wheelchairs, mobility aids and many more.<br/><br/>
						Telebus creates its schedules based on minimising the travel time;  so passengers get the shortest possible trip and pick-up & drop-offs are in the best possible sequence (ideal for schools).<br/><br/>
						Reporting tools clearly show the loadings for each day and the route maps of the schedules, including DRT, semi-fixed or flexible. Plus long term reports to strategically manage the service.</p>
				</div>	
				<img src="images/image324.jpg" alt="Call center and phone bookings" style="float: right; width: 22%; margin-top: 140px; margin-right: 10px;"/>
			</div>
			<?php footer() ?>
		</div>
	</body>
</html>