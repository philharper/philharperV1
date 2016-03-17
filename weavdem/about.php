<!DOCTYPE html>
<?php
include ('Scripts/functions.php');
?>
<html>
	<head>
		<title>Weaver Demolition</title>
		<link rel="stylesheet" href="Styles/WDstyles.css" type="text/css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript" src="Scripts/imageFade.js"></script>
		<script type="text/javascript" src="Scripts/functions.js"></script>
	</head>
	<body>
		<div id="container">
				<a href="index.php" id="logo"><img src="Images/header.png"/></a>
				<div id="navFull">
					<?php navbar2(); ?>
				</div>	
				<img src="Images/aboutheader.jpg" alt="Weaver Demolition" width="100%" style="margin-top:-1px;"/>
				<div id="aboutNav">
					<div style="width: 50%; float: left;">
						<div id="CP" class='aboutButton' style="float: right;">Company Profile</div>
					</div>
					<div style="width: 50%; float: right;">	
						<div id="Accredidation" class='aboutButton' style="float: left;">Accrediation</div>
					</div>
				</div>
				<h1 id="aboutTitle">Company Profile</h1>
				<div id="content">
					Our Company was established as Weaver Plant Ltd in 1968 and is a family company with a capable and experienced workforce.<br/><br/> The name was changed to Weaver Demolition Ltd in 2004 to reflect our main business activities.<br/><br/> We are Demolition and Dismantling specialists, we also deal with sales of railway sleepers, salvaged building materials, crushed concrete and other recycled materials. Whatever your requirements are, we will be pleased to discuss them with you. We can offer professional advice and will provide a comprehensive quotation for all prospective work."
				</div>
				<div id="contentImg"></div>
				<div id="acred">
					<img class="logo" src="Images/logos/logo1.jpg" />
					<img class="logo" src="Images/logos/logo2.jpg" />
					<img class="logo" src="Images/logos/logo3.jpg" />
					<img class="logo" src="Images/logos/logo4.jpg" />
					<img class="logo" src="Images/logos/logo5.jpg" />
					<img class="logo" src="Images/logos/logo6.png" />
				</div>	
			</div>		
		</div>	
	</body>
</html>