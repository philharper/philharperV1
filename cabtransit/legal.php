<!DOCTYPE HTML>
<html>
	<head>
		<title>CABTransit | Legal</title>
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
				<h1>Copyright</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas euismod in diam sed posuere. Nunc faucibus ornare nisl, ut lobortis risus mattis et. Pellentesque varius nunc sed congue tempus. Quisque id nisl non justo venenatis ultrices. Suspendisse condimentum, justo ac volutpat aliquam, tellus eros scelerisque massa, vitae aliquet nisi erat vitae justo. Suspendisse in nibh sodales, fringilla quam vel, commodo tellus. Fusce iaculis elit mollis augue bibendum ultrices.</p>
				<h1>Trademark</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas euismod in diam sed posuere. Nunc faucibus ornare nisl, ut lobortis risus mattis et. Pellentesque varius nunc sed congue tempus. Quisque id nisl non justo venenatis ultrices. Suspendisse condimentum, justo ac volutpat aliquam, tellus eros scelerisque massa, vitae aliquet nisi erat vitae justo. Suspendisse in nibh sodales, fringilla quam vel, commodo tellus. Fusce iaculis elit mollis augue bibendum ultrices.</p>
				</div>
			</div>
			<?php footer() ?>
		</div>
	</body>
</html>