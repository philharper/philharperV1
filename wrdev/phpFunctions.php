<?php
	function navbar() {
		echo"<nav id='shrink'><a href='index.php' class='fadeButton'>Home</a><div style='height: 100%; width: 4px; background-color: #fff; float: left;'></div>
		<a href='about.php' class='fadeButton'>About</a><div style='height: 100%; width: 4px; background-color: #fff; float: left;'></div>
		<a href='services.php' id='serNavButton' class='fadeButton'>Services</a><div style='height: 100%; width: 4px; background-color: #fff; float: left;'></div>
		<a href='projects.php' class='fadeButton'>Projects</a><div style='height: 100%; width: 4px; background-color: #fff; float: left;'></div>
		<a href='contacts.php' class='fadeButton'>Contact</a><div style='height: 100%; width: 4px; background-color: #fff; float: left;'></div><a href='#' id='pull'>Menu/Close</a></nav>";
	}
	
	function serNav() {
		echo"<div class='serNavBar'>Project Management</div><div style='height: 100%; width: 4px; background-color: #fff; float: left;'></div>
		<div class='serNavBar'>Design</div><div style='height: 100%; width: 4px; background-color: #fff; float: left;'></div>
		<div class='serNavBar'>Cost</div><div style='height: 100%; width: 4px; background-color: #fff; float: left;'></div>
		<div class='serNavBar'>Environment</div><div style='height: 100%; width: 4px; background-color: #fff; float: left;'></div>
		<div class='serNavBar'>Health & Safety</div><div style='height: 100%; width: 4px; background-color: #fff; float: left;'></div>
		<div class='serNavBar'>Professional</div>";
	}
?>