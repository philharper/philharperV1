<!DOCTYPE HTML>
<html>
	<head>
		<title>CABTransit | Home</title>
		<link rel="stylesheet" href="styles.css" type="text/css" />
		<link rel="icon" type="image/png" href="favicon.ico">
		
	</head>
	<body>
		<div id="wrapper">		
			<span style="display: block; width: 70%; margin-left: auto; margin-right: auto; height: 100px;"><img src="images/CBT.png" alt="CAB Transit logo" style="width: 400px; left: 0px; top: 0px; position: relative;" /></span>
			<div id="content">
				<div id="navbar">
					<?php
					include 'functions.php';
					navigationbar(); ?>
				</div>
				<div style="margin-top: 50px;">
					<form action="loginscript.php" method="post">
						<label>Username:</label> <input type="text" name="username"><br/>
						<label>Password:</label> <input type="password" name="password"><br/>
						<input type="submit" value="Login">
					</form>
				</div>
			</div>
			<?php footer() ?>
		</div>
	</body>
</html>
	
		
			