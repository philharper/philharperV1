<!DOCTYPE HTML>
<html>
	<head>
		<title>CABTransit | Design & Build</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css" type="text/css" />
		<link rel="icon" type="image/png" href="favicon.ico">
		<style type="text/css">
			#list li {margin-bottom: 10px;}
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
				<div id="list" style="margin-left: 25px;">
					<h1>Design & Build</h1>
					<p>CABTransit provides a service to investigate, design and develop new software systems based on individual user requirements.</p>
					<ul>
						<li><span style="color: #00B0F0; font-weight: bold;">Using the latest development tools</span> we can deliver new systems at prices that would otherwise be unobtainable.</li>
						<li>We design and <span style="color: #00B0F0; font-weight: bold;">test software </span> through tools that can run continuous regression testing, to monitor how the parts
							fit together, without taking down the functionality that has already been built and tested.</li>
						<li>As a <span style="color: #00B0F0; font-weight: bold;">Microsoft development house</span> we specialise in using this mainstream of development tools that give us the widest spread of applications.</li>
					    <li>Because CABTransit <span style="color: #00B0F0; font-weight: bold;">designs and builds all our own applications</span> we can offer clients solutions based on the modules that we have in our library of applications. Reusing these modules provides the key 
					    	to building innovative systems at low cost to answer specific operator&#39;s requirements.</li>
					    <li>Our Design and Build skills include <span style="color: #00B0F0; font-weight: bold;">Sat/Nav, GIS, SMS, G3/GPRS, and Internet Messaging</span>. We can apply any or all of these techniques in building the system you require.</li>
						<li>The <span style="color: #00B0F0; font-weight: bold;">design process</span> uses the latest tools to structure the design in a clear and practical way so that the requirement is clear to the client and the development team, so there is no misunderstanding about the system.</li>
						<li>These software modules not only bind together into a single cohesive system, they provide routines that can form the building blocks for new applications.</li>
					</ul>
				</div>
			</div>
			<?php footer() ?>
		</div>
	</body>
</html>