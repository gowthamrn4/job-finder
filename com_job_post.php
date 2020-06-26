<title>Post Job</title>
<?php 
 include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';	
 /*validation start */
 /* return name and id from $job_users table*/
	$name=$_SESSION['user_name']; // $name= present user name
	$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
	//echo $name." ".$user_id;

	/*print data initialize*/
	$qry="select * from $job_users where `id` ='$user_id' limit 1";
	$res=mysql_query($qry);
				if($res)
					{
						if($row =  mysql_fetch_array($res,MYSQL_ASSOC))
						{
							$com_address=$row["com_address"];
							$com_name=$row["com_name"];
						}
					}
		// check previous job is post or not
	$ispost = one_col_value($conn,'com_name',$com_job_post,$com_name,'post');
		//echo $ispost;
 $error=array();
 	if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['job_post']) && $_POST['job_post'] == "job_post") )
		{
		 extract($_POST);
					//insert
					$name=$_SESSION['user_name'];
				/* DOB validation strat */
			
				$dob = date("Y-m-d", strtotime($dob));
			
				if(!str_validate_date($dob, "YYYY-MM-DD") || $dob=="1970-01-01")
				{
			 
				$error[]="Your Birth date is invalid, please enter valid DOB";
				}
				/* DOB validation End*/
				$error=array_filter($error);// this function is for remove null array
				/* save info in DB*/
	
		if(empty($error)){
					$qry="insert into $com_job_post (`user_id`,`job_cat`,`job_title`,`com_name`,`vacancies`,`job_des`,`job_nature`,`edu_req`,`exp_req`,`addition_job_req`,`job_location`,`salary`,`other_benifit`,`deadline`,`com_address`,`cv_system`,`post`,`last_update`) values ('$user_id','$cat','$job_title','$com_name','$no_vacancie','$job_description','$job_nature','$edu_requirement','$exp_requirement','$job_requirement','$job_location','$salary','$benfit','$dob','com_address','cv_system','0',now())";
					$ins=mysql_query($qry);
					if($ins)
					{
						$succ_msg="Your account has been created successfully";
						$successMsg="Your account has been created successfully";
						?>
							<script>
								alert("Your job post has been successfully \n and wait for Confirmation message");
								window.location="com_home.php";
							</script>
						<?php
					}
					else{
							$errorMsg="database conn problem";
							
							}
				
		}
		}
		 
	
	$com_name=(isset($com_name))?$com_name:"";
	$com_address=(isset($com_address))?$com_address:"";
	$errorMsg=(isset($errorMsg))?$errorMsg:"";
	$successMsg=(isset($successMsg))?$successMsg:"";
	
		
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/edit_profile.css">
		<link rel="stylesheet" href="css/create_account_job_seeker.css">
		<link rel="stylesheet" href="js/datepicker.css">
	</head>
	<body>
		<div class="container">
			<!-- ******************** start logo div ******************-->
			<?php include 'header_n.php';?>
			<!-- ******************** end logo div ******************-->
			<br>
			<!-- ********************* menu bar *********************** -->
		<!-- --------------------- main body ---------------------->	
			 <form  name="" id="" action="" method="post">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<!-- left side-->
						<div id="custom_list" class="col-md-3">
							<?php include 'com_left_menu.php';?>
						</div>	
						<!-- right side -->
					<div id="custom_right" class="col-md-9">
						<h5 style="background:olive;color:white;font-size:30px;"><center>New Job Post<center></h5>
						<div class="form-group">
							<label for="">Job Category</label>
							<select name="cat" class="form-control" id="cat">
								<option value="<?php ?>"> Select</option>
								<?php
									foreach ($cat_types as $key=>$val)
									{
										echo "<option  value='$key'>$val</option>";
									}
									?>
						   </select>
						</div>
					
						<div class="form-group">
							<label for="">Job Title</label>
							<input type="text" name="job_title" class="form-control" value="" id="job_title">
						</div>
						<fieldset disabled>
						<div class="form-group">
							<label for="">Company Name</label>
							<input type="text" name="com_name" class="form-control" value="<?php echo $com_name?>" id="com_name">
						</div>
						</fieldset>
						<div class="form-group">
							<label for="">No. of Vacancies</label>
							<input type="text" name="no_vacancie" class="form-control" value="" id="no_vacancie">
						</div>
						<div class="form-group">
							<label for="">Job Description / Responsibility</label>
							<textarea class="form-control" rows="3" name="job_description"  id="job_description"></textarea>
						</div>
						<div class="form-group">
							<label for="">Job Nature</label>
							<!-- <input type="text" name="job_nature" class="form-control" value="" id="job_nature"> -->
							<select id="job_nature" name="job_nature" class="form-control" value="<?php ?>">
								<option value="Full Time">Full Time</option>
								<option value="Part Time">Part Time</option>
						  </select>
						</div>
						<div class="form-group">
							<label for="">Educational Requirements</label>
							<textarea class="form-control" rows="2" name="edu_requirement"  id="edu_requirement"></textarea>
						</div>
						<div class="form-group">
							<label for="">Experience Requirements</label>
							<textarea class="form-control" rows="2" name="exp_requirement"  id="exp_requirement"></textarea>
						</div>
						<div class="form-group">
							<label for="">Additional Job Requirements</label>
							<textarea class="form-control" rows="2" name="job_requirement"  id="job_requirement"></textarea>
						</div>
						<div class="form-group">
							<label for="">Job Location</label>
							<input type="text" name="job_location" class="form-control" value="" id="job_location">
						</div>
						<div class="form-group">
							<label for="">Salary Range</label>
							<input type="text" name="salary" class="form-control" value="" id="salary">
						</div>
						<div class="form-group">
							<label for="">Other Benfits</label>
							<input type="text" name="benfit" class="form-control" value="" id="benfit">
						</div>
						<div class="form-group">
							<label for="">Application Deadline</label>
							<div class="input-append date"  data-date="" data-date-format="dd-mm-yyyy">
								<input id="dob" name="dob" placeholder="choose your data" class="form-control" type="text" value="<?php ?>" >
						   </div>
						</div>
						<fieldset disabled>
							<div class="form-group">
								<label for="">Company Address</label>
								<input type="text" name="com_address" class="form-control" value="<?php echo $com_address?>" id="com_address">
							</div>
							</fieldset>
							<div class="form-group">
								<label for="">How do you want to receive CV/Resume</label>
								<select id="cv_system" name="cv_system" class="form-control" value="<?php ?>">
								<option value="My bubtjobs Account">My bubtjobs Account</option>
						  </select>
							</div>
						
							
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg" name="job_post"  value="job_post">Job Post</button>
							<button type="submit" class="btn btn-primary btn-lg" name="post_cancel"  value="post_cancel">Post Cancel</button>
						</div>
					</div>
					</div>	
				</div>
			</form>	
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
			<script src="js/bootstrap-datepicker.js"></script>
						<script>
			$('#dob').datepicker();
			</script>
	</body>
</html>