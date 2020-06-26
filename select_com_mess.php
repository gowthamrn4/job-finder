<?php
	include 'global_variables.php';
	include 'config.php';
	include 'service_config.php';
	include 'functions.php';
	$mess_type = $_POST['select_post'];
	//user name;
	$name=$_SESSION['user_name']; // $name= present user name
	
	/*return come name*/
	$com_name=return_com($conn,"user_name",$name,$job_users);
	
	//echo $mess_type;
	//echo $name;
	//echo $com_name;
	extract($_POST);
	//echo "<br>";
	//echo $com_name;
	$qry="select * from $com_nofitication where `com_name`='$com_name' and `view`='0' and `send_by`='$mess_type'";
	//echo $qry;
	$res=mysql_query($qry);
	if($res){
			 $result=mysql_fetch_array($res);
			 $message=$result["message"];
			 $date_time=$result["Date"];
			 echo $message."<br>Best Regards,<br>Admin<br>".$date_time."<br><br>";
			 echo "<div class='form-group'>
					<button type='submit' class='btn btn-primary btn-lg' name='view'  value='view'>view</button>
					</div>";
			echo "<div name='type' value=''>";		
			 //update message view=0
			 //$qry="update $com_nofitication set `view`='1' where `com_name`='$com_name' and `send_by`='$mess_type'";
			// $ins=mysql_query($qry);
			 
		}
	else
		echo "Something Wrong,please Try Again";
?>