<title>CV Bank</title>
<?php
	include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
include 'link_test.php'; 
$error=array();
		/* return name and id from $job_users table*/
			$name=$_SESSION['user_name']; // $name= present user name
			//$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
			$com_name=return_com($conn,"user_name",$name,$job_users);
			//echo $com_name;
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
			
		<!-- --------------------- main body ---------------------->	
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div id="custom_list" class="col-md-3">
					<?php include 'com_left_menu.php';?>
				</div>	
				<div class="col-md-9">
						<?php
						echo "";
						?>
						<div class="row">
						<div class="well well-sm">CV Bank</div>
						 <form  name="" id="" action="" method="post">
							<div class="col-md-5">
								<!-- print data for select notification -->
								<?php 
									$unique_names=array();
									$where="where `com_name`='$com_name' and `view`='0' and `continue`='1'";
									$unique_names=distinct_value($conn,"uniqu_gen",$cv_send,$where);
								?>
							<!-- ============== end select job title ================-->
								<div class="dropdown" style="margin-bottom:20px;">
								  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Job Title
								  <span class="caret"></span></button>
								  <ul class="dropdown-menu">
									<?php
										foreach ($unique_names as $val)
										{
										// count
											$qry="select count(*) as count from `$cv_send` where `uniqu_gen`='$val' and `com_name`='$com_name' and `view`='0' and `continue`='1'";
											$res=mysql_query($qry);
											$result=mysql_fetch_array($res);
											$total=$result['count'];
											// com_job_post_id return
											echo "<li><a href='com_cv_search.php?id=$val'>$val <span style='font-size:20px;width: 20px;height: 20px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px; background:red'>$total</span></a></li>";
										}
									?>
								  </ul>
								</div>
							<!-- ============end select job title=============-->
							</div>
							<div class="col-md-8 col-md-offset-1">
								<div id="view_mess" style="background:#E7D7E9;font-style: oblique;font-weight: 900;"></div>
							</div>
							</form>
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
	</body>
</html>