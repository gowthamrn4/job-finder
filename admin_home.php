<?php 
 include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';	
 include 'link_test_admin.php';	
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <title>Admin Home</title>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/edit_profile.css">
		
	</head>
	<body>
		
		<div class="container">
			<!-- ******************** start logo div ******************-->
			<?php include 'header_admin.php';?>
			<!-- ******************** end logo div ******************-->
			<br>
			<!-- ********************* menu bar *********************** -->
<!--			--><?php //include 'admin_menu.php';?>
		<!-- --------------------- main body ---------------------->	
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
                    <div id="custom_list" class="col-md-3">
                        <?php include 'admin_left_menu.php';?>
                    </div>
                    <div id="" class="col-md-9">
                    <div style="height:400px;background:grey;">
					<center><h1>admin home page</h1></center>
					<div class="well well-sm">My Account Status</div>
					<table  class="table" style="background:#F5F5F5;">
						<tbody>
						  <tr>
							<td>Total number of Active job users</td>
							<?php
								$qry="select count(*) as count from $job_users where `type`='user' and `status`='Active'";
								$res=mysql_query($qry);
								$result=mysql_fetch_array($res);
								$total_active_job_users=$result['count'];
							?>
							<td><?php echo $total_active_job_users;?></td>
						  </tr>	
						  <tr>
							<td>Total number of Inactive job users</td>
							<?php
								$qry="select count(*) as count from $job_users where `type`='user' and `status`='Inactive'";
								$res=mysql_query($qry);
								$result=mysql_fetch_array($res);
								$total_inactive_job_users=$result['count'];
							?>
							<td><?php echo $total_inactive_job_users;?></td>
						  </tr>	
						  <tr>
							<td>Total number of Active company users</td>
							<?php
								$qry="select count(*) as count from $job_users where `type`='company' and `status`='Active'";
								$res=mysql_query($qry);
								$result=mysql_fetch_array($res);
								$total_active_com_users=$result['count'];
							?>
							<td><?php echo $total_active_com_users;?></td>
						  </tr>	
						  <tr>
							<td>Total number of Inactive company users</td>
							<?php
								$qry="select count(*) as count from $job_users where `type`='company' and `status`='Inactive'";
								$res=mysql_query($qry);
								$result=mysql_fetch_array($res);
								$total_inactive_com_users=$result['count'];
							?>
							<td><?php echo $total_inactive_com_users;?></td>
						  </tr>	
						  <tr>
							<td>Total number of secondary admin</td>
							<?php
								$qry="select count(*) as count from $job_users where `type`='admin' and `status`='Active'";
								$res=mysql_query($qry);
								$result=mysql_fetch_array($res);
								$total_admin=$result['count'];
							?>
							<td><?php echo $total_admin;?></td>
						  </tr>
						</tbody>
					</table>
					</div>
			
				</div>
				</div>
			</div>
		</div>
		<!-- js file start -->
			<script src="bootstrap/js/ie-emulation-modes-warning.js"></script>
			<script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
			
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="bootstrap/js/bootstrap.min.js"></script>
			<script src="js/bootstrap-datepicker.js"></script>
						<script>
			$('#dob').datepicker();
			</script>
	</body>
</html>