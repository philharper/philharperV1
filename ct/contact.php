<!DOCTYPE HTML>
<html>
	<head>
		<title>CABTransit | Contact</title>
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
				<div id="innerContent">
					<h1>Contact us</h1>
					<p><span style="font-weight: bold; width: 90px; display: block; float: left;">By phone: </span>01420 550292 </p>
					<p><span style="font-weight: bold; width: 90px; display: block; float: left;">By email: </span><a href="mailto:info@cabtransit.com">info@cabtransit.com</a></p>
					<p><span style="font-weight: bold; width: 90px; display: block; float: left;">By post: </span><span style="font-weight: bold;">CABTransit</span><span style="margin-left: 90px; display: block; position: relative; margin-top: -20px;"><br/>Blacknest House<br/>Blacknest Road<br/>Bentley Nr. Alton<br/>Hampshire GU34 4PX</span></p>
					<!--<p style="font-weight: bold;">Contact form:</p>
					<form action="email.php" method="post" style="margin-bottom: 25px;">
		    			<label>Your name</label>
		   				<input type="text" name="cf_name"><br/>
		    			<label>Your e-mail</label>
		    			<input type="text" name="cf_email"><br/>
		   				<label>Message</label>
		    			<textarea name="cf_message" rows="4" cols="50"></textarea><br/>
		    			<input type="submit" value="Send">
		    			<input type="reset" value="Clear">
					</form>-->
				</div>
			</div>
			<?php footer() ?>
		</div>
	</body>
</html>