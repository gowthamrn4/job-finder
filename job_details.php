<?php
 include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
 include 'link_test.php';
 $id=$_REQUEST['id'];
 $qry = "SELECT * FROM `com_job_post` WHERE id=$id";
 $res= mysql_query($qry);
 $single_data=mysql_fetch_array($res);
 //echo $single_data['vacancies'];
 //echo $single_data['job_des'];
 //echo $single_data['vacancies'];
 /* return name and id from $job_users table*/
	$name=$_SESSION['user_name']; // $name= present user name
	$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
		//echo $name." ".$user_id;	
 $error=array();
 /* start operation for apply now */
 if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['apply']) && $_POST['apply'] == "apply") )
		{
			/*image found check*/
			$qry="select count(*) as count from $job_users_image where `user_id`='$user_id' limit 1";
			$res=mysql_query($qry);
			$result=mysql_fetch_array($res);
			$pic_found=$result['count'];
			$cv_ok="";
			if($pic_found==0){
			$cv_ok .='->please insert profile picture\n';
			}
			//echo $pic_found;
			/*others found check*/
			$qry="select father_name,mother_name,marital,nationality,present_address,permanent_address  from $job_user_profile where user_id='$user_id' limit 1";
			$res=mysql_query($qry);
			$result=mysql_fetch_assoc($res);
			$father_name=$result['father_name'];
			if(strlen($result['father_name'])==0 || strlen($result['mother_name'])==0 ||strlen($result['nationality'])==0 ||strlen($result['present_address'])==0 ||strlen($result['permanent_address'])==0)
				{
					$cv_ok .='->please insert personal details from Edit Profile->Personal Details for complete cv\n';
				}
				// print alert 
			if(strlen($cv_ok)>0){
				?>
				<script>
				var i = "<?php echo $cv_ok; ?>";
				alert(i);
				</script>
				<?php
			}
			//insert into cv_send table today
			else
			{
				/*echo "job_user_id = ".$user_id."<br>";
				echo "job_title = ".$single_data['job_title']."<br>";
				echo "com_name = ".$single_data['com_name']."<br>";
				echo "com_job_post_id = ".$single_data['id']."<br>";*/
				//start check for already apply
				$com_title=$single_data['job_title'];
				$company_name=$single_data['com_name'];
				//$single_data['id']=com_job_post->id
				$company_id=$single_data['id'];
				//echo $company_id;
				$qry="select count(*) as count from $cv_send where `com_job_post_id`='$company_id' and `job_user_id`='$user_id'"; 
				$res=mysql_query($qry);
				$result=mysql_fetch_array($res);
				$agin_post_check=$result['count'];
				if($agin_post_check>0){
					?>
						<script>
							alert('you have  already applied in this circular');
						</script>
					<?php
				}
				//end check for already apply
				else{
					$uniqu_gen=$com_title."_".$company_id;
				  $sql="insert into $cv_send (`job_user_id`,`job_title`,`com_name`,`com_job_post_id`,`uniqu_gen`,`view`,`continue`,`update`) values('$user_id','$com_title','$company_name','$company_id','$uniqu_gen','0','1',now())";
				//echo $sql;
				$res=mysql_query($sql);
				if($res)
				{
					?>
						<script>
							alert("applied Successfull");
							window.location="j_search.php";
						</script>
					<?php
				}
				else
				{
					?>
						<script>
							alert("Technical Error,please contact admin");
						</script>
					<?php
				}
				}
				
			}
			
		} 
 
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
			<?php include 'menu_user.php';?>
		<!-- --------------------- main body ---------------------->	
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div id="custom_list" class="col-md-3">
						<?php include 'j_se_left.php';?>
				</div>	
				<div  class="col-md-9" style="background:#EFEEEE;">
					<!-- job title-->
					<div class="form-group">
						<label style="color:#1457B5; font-size:20px;"><?php echo $single_data['job_title'];?></label>
					</div>
					<!-- company name-->
					<div class="form-group">
						<label style="color:#68AA47;font-size:20px;"><?php echo $single_data['com_name'];?></label>
					</div>
					<!-- No. of  Vacancies-->
					<div class="form-group">
						<label>No. of  Vacancies</label>
						<p style="margin-left:25px;";><?php echo $single_data['vacancies'];?></p>
					</div>
					<!-- Job Description / Responsibility-->
					<div class="form-group">
						<label>Job Description / Responsibility</label>
						<!-- <ul class="list-inline" style="margin-left:20px;">
						  <li>->iOS platform expert (including Objective-C, Xcode, etc..)</li>
						  <li>->Knowledge of swift; experience using Swift in a commercial application is preferred.</li>
						  <li>->Design patterns they should know MVC; bonus if they know MVVM.</li>
						  <li>->Should now how to write testable code.</li>
						</ul> -->
						<p style="margin-left:25px;";><?php echo $single_data['job_des'];?></p>
					</div>
					<!-- Job Nature-->
					<div class="form-group">
						<label>Job Nature</label>
						<p style="margin-left:25px;";><?php echo $single_data['job_nature'];?></p>
					</div>
					<!-- Educational Requirements-->
					<div class="form-group">
						<label>Educational Requirements</label>
						<p style="margin-left:25px;";><?php echo $single_data['edu_req'];?></p>
					</div>
					<!-- Experience Requirements-->
					<div class="form-group">
						<label>Experience Requirements</label>
						<p style="margin-left:25px;"><?php echo $single_data['exp_req'];?></p>
					</div>
					<!-- Additional Job Requirements-->
					<div class="form-group">
						<label>Additional Job Requirements</label>
						<p style="margin-left:25px;"><?php echo $single_data['addition_job_req'];?></p>
					</div>
					<!-- Job Location-->
					<div class="form-group">
						<label>Job Location</label>
						<p style="margin-left:25px;"><?php echo $single_data['job_location'];?></p>
					</div>
					<!-- Salary Range-->
					<div class="form-group">
						<label>Salary Range</label>
						<p style="margin-left:25px;"><?php echo $single_data['salary'];?></p>
					</div>
					<!-- Other Benefits-->
					<div class="form-group">
						<label>Other Benefits</label>
						<p style="margin-left:25px;"><?php echo $single_data['other_benifit'];?></p>
					</div>
					<!-- Application Deadline -->
					<div class="form-group">
						<label>Application Deadline </label>
						<p style="margin-left:25px;"><?php echo $single_data['deadline'];?></p>
					</div>
					<!--============ Form start =============-->
					<form  name="apply_now" id="apply_now" action="" method="post">
						<!-- Apply -->
						<div class="form-group col-md-offset-3">
							<button type="submit" class="btn btn-success btn-lg" name="apply"  value="apply" style="margin-left:25px;" onclick="return confirm('Are you sure for applying?');">Apply now</button>
						</div>
					</form>
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