<?php
	$conn=mysql_connect($dbhost,$dbuser,$dbpass);
	if(!$conn){
		die('could not connect: '.mysql_error());
	}
  mysql_select_db("$dbName");
	session_start();
?>