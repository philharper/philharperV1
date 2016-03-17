<!DOCTYPE HTML>
<html>
	<head>
		<title>CABTransit | Telebus Service</title>
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
			if (!isset ($_SESSION["isAdmin"]))
			adminbar();
		?>
		<div id="wrapper">
			<span style="display: block; width: 70%; margin-left: auto; margin-right: auto; height: 100px;"><img src="images/CBT.png" alt="CAB Transit logo" style="width: 400px; left: 0px; top: 0px; position: relative;" /></span>
			<div id="content">
			   	<div id="navbar">
					<?php navigationbar(); ?>
				</div>
				<div id="innerContent" style="float: left; width: 73%;">
				<h1>Telebus Service</h1>
				<p>Telebus support is a whole life service. Users will receive all the upgrades to the system licences you purchase. This includes new functions and facilities that we might
					from time to time introduce as well as maintaining the usability of your system with a current level of the Microsoft environment. Users can implement updates at their 
					discretion and CABTransit will make the appropiate arrangements for each user either to receive changes.</p>
				<p>Our internet technical support service allows for 24/7 reporting for any problems, which we categorise to give levels of support from immediate to items to incorporate into
					the next release. direct contact is avaliable during prime shift (GMT/BST 9am-5pm Monday to Friday) if you need to speak to the technical or systems support.</p>
				<p>We supply every user with two databases because we expect users to have one for live and the other for training or, if they like, to develop and test alternative scenarions
					away from live running.</p>
				<p>Starting up your service under Telebus may will need to bring forward data and histories from your previous system. CABTransit provides a special take-on service to acquire the
					old data, convert its format, check it for erros, upload it into Telebus and then recheck for its correctness in its new environment. This is bespoke service and we shall quote
					exactly for your needs in each individual case.</p>
				</div>	
			</div>
			<?php footer() ?>
		</div>
	</body>
</html>