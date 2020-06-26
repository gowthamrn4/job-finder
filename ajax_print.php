<?php
include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
 
$user_name = $_POST['user_name'];
//echo $user_name;
	$qry="select * from job_users where user_name='$user_name' limit 1";
	$res=mysql_query($qry);
	if($res){
			if($row =  mysql_fetch_array($res,MYSQL_ASSOC))
			echo "First Name: ".$row["first_name"]."<br>".
				 "Last Name: ".$row["last_name"]."<br>".
				 "User Name: ".$row["user_name"]."<br>".
				 "User_email: ".$row["user_email"]."<br>".
				 "Mobile: ".$row["mobile"]."<br>";
			}
			
			echo "<form> <input type='text' name='n'></form>";
?>

