<?php
	$dbuser = "root";
	$dbpass = "";
	$dbhost = "localhost";

	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
		{
		  die('Could not connect: ' . mysql_error());
		}
		else
			echo "successfully <br >";


	$sql = "INSERT INTO test (name,email) VALUES ('jalil','jalil_cse')";
	mysql_select_db('jalil');
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
		{
			die('Could not enter data: ' . mysql_error());
		}
		echo "\nEntered data successfully <br >";

	// getting data / print data
	$sql="select * from test";
	$retval=mysql_query($sql,$conn);
	if(!$retval)
		die('Could not get data: ' . mysql_error());
	while($row =  mysql_fetch_array($retval,MYSQL_ASSOC))
	{
		echo "Id: {$row['id']} <br >".
			"name: {$row['name']} <br >".
			"email: {$row['email']} <br >".
			"..................... <br >";
			if(strcmp($row['name'],'jalil')==0)
			echo "yes";
			else
				echo "no";
	}
	echo "fatched data sucessfully";

	//delete
	/* $sql="Truncate table job_users";
	$res=mysql_query($sql,$conn);
	if(!$res)
		die(' not'.mysql_error());
	echo "yes";  */
	mysql_close($conn);
?>