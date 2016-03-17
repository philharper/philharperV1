<?php

 include 'functions.php';

 session_start();
 
 $ID = $_POST["delete"];

 $connect = connectToDatabase();
 
 mysql_query("DELETE FROM news WHERE ID='$ID'") or die($sql);
 
 header("location: index.php");
 
?>
