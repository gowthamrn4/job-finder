<?php
	include 'global_variables.php';
	include 'config.php';
	include 'service_config.php';
	include 'functions.php';
	extract($_POST);
	$id = $_POST['select_post'];
	//echo $id;
	$qry="select * from $user_notification where `id`='$id'";
	$res=mysql_query($qry);
	$row=mysql_fetch_array($res);
	
	$job_user_id=$row['com_id'];
	$Date=$row['Date'];
	$Time=$row['Time'];
	$location=$row['location'];
	//echo $job_user_id."<br>".$Date."<br>".$Time."<br>".$location;
	// print user name
	$name=$_SESSION['user_name']; // $name= present user name
	$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
	$qry="select * from $job_users where `id`='$user_id'";
	$res=mysql_query($qry);
	$row=mysql_fetch_array($res);
	$name_print=$row['first_name']." ".$row['last_name'];
	$message="Dear ".$name_print.",<br><br>We are selected your for interview.<br>Date: ".$Date."<br>Time: ".$Time."<br>Location: ".$location;
	// print compay name;
	$qry="select `com_name` from $job_users where `id`='$job_user_id'";
	$res=mysql_query($qry);
	$row=mysql_fetch_array($res);
	$message .="<br><br>Best Regards,<br>".$row['com_name'];
	echo $message;
		echo "<input type='hidden' name='id' class='form-control' value='$id' id='$id'>";
	echo "<br><br><div class='form-group' style='margin-left:10px;'>
			<button type='submit' name='view' class='btn btn-primary btn-lg' value='view' id='view'>View</button>
			</div>";
	
?>