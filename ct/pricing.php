<!DOCTYPE HTML>
<html>
	<head>
		<title>CABTransit | Pricing & Promise</title>
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
				<div id="innerContent" style="margin-right: 25px;">
					<h2>Pricing & Promise</h2>
					<p>Users can pay for using Telebus in a way that suits them and their organisation. Whichever way you decide to pay then our service promise remains the 
						same and the software is the same standard version</p>
					<p>Users will get all the upgrades for the configuration they have requested as part of the service.</p>
					<p>Users can always add more functions as time goes on.</p>
					<p>If you need special functions just for your own operation then talk to us about your requirement, if it is a common request that everyone could use then we
						shall issue it as an upgrade or as a new function. If it relates to your system alone then the add-on will be a special but will always be able to work with
						the standard system and any upgrades that come along.</p>
					<p>Over the lifetime of the system there are three choices for paying of Telebus,</p>
					<ul>
						<li>License Purchase plus maintenance for those who want to pay up front and then the minimal maintenance charge thereafter</li>
						<li>Rental which spreads the license cost and includes the maintenance on a regular monthly basis</li>
						<li>Per trip charging with a small fixed fee per month. Trips are bought for a few pence each and users can "Top-Up" at any time. An "overdraft" facility
							can be arranged for a small charge to cover the case of running out of credit.</li>
					</ul>
					<hr>
					<p>Maps and PAF codes are extra and can be purchased to cover only the area where the service operates. Users can choose to have annual or six monthly updates.</p>
					<p>Communication costs are charged monthly and are based on the number of buses on the road, these only apply to systems that incorporate Tracking, InCabUnits & Congestion Map or TeleBusRoute</p>
				</div>
			</div>
			<?php footer() ?>
		</div>
	</body>
</html>