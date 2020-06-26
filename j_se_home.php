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
			<!-- ********************* menu bar *********************** -->
			<!-- <?php include 'menu_user.php';?> -->
		<!-- --------------------- main body ---------------------->	
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div id="custom_list" class="col-md-3">
					<?php include 'j_se_left.php';?>
				</div>	
				<div id="" class="col-md-9">
				<!-- wall -->
					<div class="well well-sm">My Account Status</div>
				<table  class="table">
					<tbody>
					  <tr>
						<td>Number of online job application</td>
						<?php
							$where=" where `job_user_id`=$user_id and `continue`='1'";
							$online_application=cnt_single_row($conn,$cv_send,$where);
							//echo $online_application;
						?>
						<td><?php echo $online_application;?></td>
					  </tr>
					  <?php
							$where=" where `job_user_id`=$user_id and `view`='1'";
							$total_company_view=cnt_single_row($conn,$cv_send,$where);
							//echo $total_company_view;
						?>
					  <tr>
						<td>Total Number of Companies viewed my Resume</td>
						<td><?php echo $total_company_view;?></td>
					  </tr>
					  
					  <tr>
						<td>My view resume complete</td>
						<?php
						/*check $job_user_profile */
							$sql="select * from $job_user_profile where `user_id`='$user_id'";
							$res=mysql_query($sql);
							//echo $res;exit;
							$row=mysql_fetch_array($res);
							$complete="1";
							$last_update=$row['last_update'];
							if(strlen($row['father_name'])==0 || strlen($row['mother_name'])==0 || strlen($row['marital'])==0 || strlen($row['present_address'])==0 || strlen($row['permanent_address'])==0)
							{
								$complete="0";
							}
						?>
						<td><?php 
							if($complete=="0")
								echo "No";
							else
								echo "Yes";
						?></td>
					  </tr>
					  <tr>
						<td>Resume last update on</td>
						<td><?php echo $last_update; ?></td>
					  </tr>
					</tbody>
				</table>
			<!-- table end  -->
				</div>
			</div>
		</div>
		<?php include 'footer.php';?>
		</div
		<!-- js file start -->
			<script src="bootstrap/js/ie-emulation-modes-warning.js"></script>
			<script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
			
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>