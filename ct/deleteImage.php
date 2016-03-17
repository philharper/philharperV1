<?php

 include 'functions.php';

 session_start();

 $ID = $_POST["delete"];

 $connect = connectToDatabase();
 
 $deleteSQL = mysql_query("SELECT * FROM sliderimages WHERE id='$ID'") or die($deleteSQL);
 
 $array = mysql_fetch_array($deleteSQL);
 
 unlink("$array[url]");
 
 $sql = mysql_query("DELETE FROM sliderimages WHERE id='$ID'") or die($sql);

 header("location: admin.php");
 
?>