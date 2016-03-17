<!DOCTYPE HTMl>
	<?php
		include ('phpFunctions.php');
	?>
<html>
	<head>
		<link rel="stylesheet" href="wrStyles.css" type="text/css" />
		<title>IDPM Interior Design | Project Management</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
		<meta name="description" content="Welcome to my website. Please have a look around my website, I hope you find everything you are looking for.">
		<meta name="keywords" content="william, reed, winchester, project, management, design, cost, services, environment, health, safety, professional, projects, interior, design, designer">
		<meta name="author" content="Philip Harper">
		<meta charset="UTF-8">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="jsFunctions.js"></script>
		<script type="text/javascript">
			var windowWidth = $(window).width();
    		$('nav a').css({'width':windowWidth});
		</script>
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
			<div id="twitterFeed">
				<a class="twitter-timeline" href="https://twitter.com/solentofficial" data-widget-id="322495562307997696">Tweets by @solentofficial</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
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