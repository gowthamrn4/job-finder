<title>Home</title>
<?php
 include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
 include 'link_test.php';	
 /* return name and id from $job_users table*/
		$name=$_SESSION['user_name']; // $name= present user name
		$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
		// com name return 
		$sql="select * from $job_users where `id`='$user_id'";
		$res=mysql_query($sql);
		$row=mysql_fetch_array($res);
		$com_name=$row['com_name'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/test.css">
		
	</head>
	<body>
		
		<div class="container">
			<!-- ******************** start logo div ******************-->
				<?php include 'header_n.php';?>
				
			<!-- ******************** end logo div ******************-->
			<br>
			<!-- *********************  *********************** -->
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
				<div class="well well-sm" style="background:olive;color:white;"><center>Home Page for Company</center></div>
				</div>
			</div>
		<!-- --------------------- main body ---------------------->	
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div id="custom_list" class="col-md-3">
					<?php include 'com_left_menu.php';?>
				</div>	
				<div id="" class="col-md-9">
					<div class="well well-sm">My Account Status</div>
					<table  class="table">
						<tbody>
						  <tr>
							<td>Total number of job post</td>
							<?php
								$where=" where `user_id`='$user_id' and `post`='1' and `accepted`='yes'";
								$total_job_post=cnt_single_row($conn,$com_job_post,$where);
								//exit;
								//echo $online_application;
							?>
							<td><?php echo $total_job_post;?></td>
						  </tr>	
						  <tr>
							<td>Total View CV</td>
							<?php
								$where=" where `com_name`='$com_name' and `view`='1'";
								$total_view_cv=cnt_single_row($conn,$cv_send,$where);
							?>
							<td><?php echo $total_view_cv;?></td>
						  </tr>	
						  <tr>
							<td>Total Unseen CV</td>
							<?php
								$where=" where `com_name`='$com_name' and `view`='0'";
								$total_unseen_cv=cnt_single_row($conn,$cv_send,$where);
							?>
							<td><?php echo $total_unseen_cv;?></td>
						  </tr>	
						  <tr>
							<td>Last update my account info</td>
							<?php
								$sql="select * from `job_users` where `id`='$user_id'";
								$res=mysql_query($sql);
								$row=mysql_fetch_array($res);
								$last_udpate=$row['last_update'];
							?>
							<td><?php echo $last_udpate;?></td>
						  </tr>	
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
		</div>
		<div class="container">
		<?php include 'footer.php';?>
		</div>
		<!-- js file start -->
			<script src="bootstrap/js/ie-emulation-modes-warning.js"></script>
			<script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
			
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>