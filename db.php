<?php
	$dbuser="root";
	$dbpass="";
	$dbhost="localhost";
	// connection database
	$conn=mysql_connect($dbhost,$dbuser,$dbpass);
	if(!$conn){
		die('could not connect: '.mysql_error());
	}
	echo "sucessfull!!<br >";
	mysql_close($conn);

?>