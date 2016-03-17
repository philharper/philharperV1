<!DOCTYPE HTMl>
	<?php
		include ('phpFunctions.php');
	?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
		<link rel="stylesheet" href="wrStyles.css" type="text/css" />
		<title>IDPM Interior Design | Project Management</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="jsFunctions.js"></script>
	</head>
	<body>
		<div id="container">
			<div id="navbar">
					
			</div>
			<div id="navLinks">
				<?php navbar(); ?>
			</div>
			<div id="serviceSub">
				<? serNav(); ?>
			</div>
			<div id="footer">
					
			</div>
			<div id="footerPlus">
				<img src="images/RICS.png" style="height: 100%; float: left;"/>
				<div id="contact">
					<p>Contact: 07595927169</p>
				</div>	
			</div>
		</div>	
	</body>
</html>