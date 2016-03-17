<?php

function navigationbar() {
	echo"<div class='center' style='width: 75%; margin-left: auto; margin-right: auto; min-width: 940px; z-index: 2;'>
				<ul>
					<li><a class='navbutton' href='index.php' style='padding-left: 22px;'>Home</a></li>
					<li><a class='navbutton' href='telebus.php'>Telebus System</a>
						<ul style='z-index: 2;'>
							<li><a href='telebus_benefits.php'>Telebus Benifits</a></li>
							<li><a href='telebus_scheduling.php'>Telebus Scheduling</a></li>
							<li><a href='telebus_service.php'>Telebus Service</a></li>
						</ul>
					</li>	
					<li><a class='navbutton' href='consultancy.php'>Consultancy</a></li>
					<li><a class='navbutton' href='design.php'>Design & Build</a></li>
					<li><a class='navbutton' href='pricing.php'>Pricing & Promise</a></li>
					<li><a class='navbutton' href='contact.php'>Contact</a></li>
				</ul>
			</div>";
}

function adminbar() {
	if (!isset ($_SESSION["isAdmin"]))
	{
		$_SESSION["isAdmin"] = 0;
	}
	if ($_SESSION["isAdmin"] == 1)
	{
		echo"<div id='admin' style='height: 100px; width: 80px; background-color: #000; position: absolute;;'>";
		echo"<a href='admin.php'>Admin</a><br/>";
		echo"<a href='logout.php'>Log out!</a>";
		echo"<button onclick='changeContent(4)'>Save</button>";
		echo"</div>";
	}
}

function footer() {
	echo"<div id='footer'>
				<ul>
					<li><a href='legal.php'>Legal</a></li>
					<li><a href='contact.php'>Contact</a></li>
				</ul>
				<p>Copyright &copy; CABTransit</p>
			</div>";
}

function connectToDatabase() {
	$connect = mysql_connect("localhost", "tony", "blake1");
	mysql_select_db("CABTransit");
	return $connect;
}
?>