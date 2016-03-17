<!DOCTYPE HTML>
<html>
	<head>
		<title>CABTransit | Consultancy</title>
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
				<h1 style="margin-left: 25px;">Consultancy</h1>
				<div id="conTextLeft">
					<p style="font-weight: bold;">Technologies are now available that make significant changes to the accepted ideas of what road transport can deliver. 
						Much of this is in Information technology, our specialism. </p>
					<p>Our team have detailed knowledge and experience of key technologies that can make a significant difference to the efficiencies of road transport business.</p>
					<p>The basis of all consultancy is to understand that it is the people who know what they want to do and technology that holds the necessary 
						information, yet sometimes creates the barriers to what we want to achieve unless restructured.</p>
				</div>
				<img src="images/image410.png" alt="Consultancy image"/>
				<div>
					<p style="font-weight: bold; margin-left: 25px;">CABTransit:</p>
					<ul style="margin-right: 25px;">
						<li>Work with managers and staff to understand the breadth of the requirement bringing the technical knowledge to translate ideas into plans. </li>
						<li>Utilise a number of analytical tools that help peel back the view of processes that may have been in use for years 
							hiding the reality of the flows of information and actual processes underpinning current or planned operations.</li>
					</ul>
				</div>
				<div id="conTextBottom" style="margin-left: 25px; margin-right: 25px;">
					<hr>
					<div style="height: auto; overflow: hidden; padding-bottom: 10px;">
						<img src="images/image460.jpg" alt="Image of a map" style="float: left; margin-right: 15px;"/>
						<p style="margin-top: 0px;">GIS has transformed the way that we can manage the data that relates to the world 
							around us, visually the maps of satellite views immediately informs us but GIS includes 
							layers of information that we can associate with buildings, roads or the activity in those streets.</p>
						<p>With a depth of knowledge of GIS we can utilise it to improve your commercial operations.</p>
					</div>
					<hr>
					<div style="height: auto; overflow: hidden;">
						<img src="images/image456.jpg" alt="Mobile phone" style="float: left; margin-right: 15px; "/>	
						<p style="margin-top: 0px;">The mobile phone network gives us an unparalleled communications network that has grown rapidly to cover the country and the quality and speed of signals has grown through
							GPRS,3G and now the emergene of 4G. This medium, which is capable of voice, text messaging and data, is becoming more and more open to integration with information systems.</p>
						<p>We can use this technology to help your business get the edge.</p>
					</div>
					<hr>
					<div style="margin-top: -11px;">
						<img src="images/image458.jpg" alt="Satelite orbiting earth" style="float: left; margin-right: 15px; "/>
						<p>SAT/NAV has become commonplace together with the technology to track the source device. For commercial operations the data that we can take from tracking the real-time signal and the data
							that we can gather from this has great potential.</p>
							<p>Coupled with GIS this is a powerful tool that we can harness for transport and business operations.</p>	
						<br/>
					</div>
				</div>
			</div>
			<?php footer() ?>
		</div>
	</body>
</html>