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
				<a href="index.php"  id="logo"><img src="Images/header.png"/></a>
				<div id="navFull">
					<?php navbar2(); ?>
				</div>	
				<img src="Images/aboutheader.jpg" alt="Weaver Demolition" width="100%" style="margin-top:-1px;"/>
				<div id="aboutNav">
					<div style="width: 50%; float: left;">
						<div id="waste" class='aboutButton' style="float: right;">Waste Management</div>
					</div>
					<div style="width: 50%; float: right;">	
						<div id="recycling" class='aboutButton' style="float: left;">Recycling</div>
					</div>
				</div>
				<h1 id="aboutTitle">Waste Management</h1>
				<div id="content">
					Current environmental issues place increasing responsibility on industry to re-cycle waste materials.  Weaver Demolition salvage and recycle materials from all projects wherever possible.  Concrete and masonry can be crushed on location using our mobile plant either for re-use on the site or for resale.  Wherever feasible, all other materials are also recycled for re-use.<br/><br/>We are able to offer advice and clearance of contaminated sites with a roll on/off skip and muck-away service.
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