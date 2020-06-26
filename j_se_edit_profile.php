<title>Job Loader</title>
<?php 
 include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
 /*validation start */
 $error=array();
 	if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['update']) && $_POST['update'] == "update") )
		{
		 extract($_POST);
			 
			 /*check email that previous email or new valid email*/
			 if(check_previous_email($conn,"user_email",$email,$_SESSION['user_name'],$job_users)==FALSE)
				{
					/* unique email address checking start */
					 if(check_unique_value($conn,"user_email",$email,$job_users))
					 {
						$error[]="Your Email address has been already used, please enter another email address";
					 }
				}
				/* DOB validation strat */
			
			$dob = date("Y-m-d", strtotime($dob));
			
			if(!str_validate_date($dob, "YYYY-MM-DD") || $dob=="1970-01-01")
			{
			 
             $error[]="Your Birth date is invalid, please enter valid DOB";
			}
			/* DOB validation End*/
				$error=array_filter($error);// this function is for remove null array
			/*save or update in data base */
				if(empty($error)){
			 /* return name and id from $job_users table*/
			$name=$_SESSION['user_name']; // $name= present user name
			$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id 
			/*check for update or insert value*/
			 /*update*/	
			if(exist_user($conn,"user_id",$user_id,$job_user_profile))
				{
					 
					$qry="update $job_user_profile set `father_name`='$father_name',`mother_name`='$mother_name',`marital`='$marital',`nationality`='$nationality',`present_address`='$present_address',`permanent_address`='$permanent_address',`last_update`=now() where `user_id`='$user_id'";
					$ins=mysql_query($qry);
					if($ins)
					{
						$succ_msg="Your account has been created successfully";
						$successMsg="Your account has been created successfully";
						$qry="update $job_users set `first_name`='$first_name',`last_name`='$last_name',`dob`='$dob',`gender`='$gender',`mobile`='$mobile',`user_email`='$email' where `id`='$user_id'";
						$ins1=mysql_query($qry);
						if($ins1)
						{
							
							
						}
						else
							$errorMsg="Something 2 is wrong";
					}
					else
					{
						
						$errorMsg="Something is wrong";
						
					}
	
					
				}
			else   			/*insert*/
				{
					$name=$_SESSION['user_name'];
					$qry="insert into $job_user_profile (`user_id`,`father_name`,`mother_name`,`marital`,`nationality`,`present_address`,`permanent_address`,`status`,`last_update`) values ('$user_id','$father_name','$mother_name','$marital','$nationality','$present_address','$permanent_address','Active',now())"; 
					$ins=mysql_query($qry);
					if($ins)
					{
						$succ_msg="Your account has been updated successfully";
						$successMsg="Your account has been updated successfully";
						$qry="update $job_users set `first_name`='$first_name',`last_name`='$last_name',`dob`='$dob',`gender`='$gender',`mobile`='$mobile',`user_email`='$email' where `id`='$user_id'";
						$ins1=mysql_query($qry);
						if($ins1)
						{
							
						}
						else
							$errorMsg="Something 2 is wrong";
					}
					else
					{
						
						$errorMsg="Something is wrong";
						
					}
				} 
				
			}
			 
			
				
		}
		/*data print iniatalize from job user data base*/
		/* return name and id from $job_users table*/
				$name=$_SESSION['user_name']; // $name= present user name
				$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
			if(exist_user($conn,"user_id",$user_id,$job_user_profile)) /*if data in job_user_profile table*/
			{
				$qry="select * from $job_users where id ='$user_id' limit 1";
				$res=mysql_query($qry);
				if($res)
					{
						if($row =  mysql_fetch_array($res,MYSQL_ASSOC))
						{
							$first_name=$row["first_name"];
							$last_name=$row["last_name"];
							$dob=$row["dob"];
							$gender=$row["gender"];
							$mobile=$row["mobile"];
							$email=$row["user_email"];
						}
			
				}
				$qry="select * from $job_user_profile where user_id ='$user_id' limit 1";
				$res=mysql_query($qry);
				if($res)
					{
						if($row =  mysql_fetch_array($res,MYSQL_ASSOC))
						{
							$father_name=$row["father_name"];
							$mother_name=$row["mother_name"];
							$marital=$row["marital"];
							$nationality=$row["nationality"];
							$present_address=$row["present_address"];
							$permanent_address=$row["permanent_address"];
							$permanent_address=$row["permanent_address"];
							
						}
			
				}
				
			}
			else /* else data in job_users table*/
			{	
				$name=$_SESSION["user_name"];
				$qry="select * from $job_users where user_name='$name' limit 1";
				$res=mysql_query($qry);
					if($res)
					{
						if($row =  mysql_fetch_array($res,MYSQL_ASSOC))
						{
							$first_name=$row["first_name"];
							$last_name=$row["last_name"];
							$dob=$row["dob"];
							$gender=$row["gender"];
							$mobile=$row["mobile"];
							$email=$row["user_email"];
						}
			
				}
			}
		
		$first_name=(isset($first_name))?$first_name:"";
		$last_name=(isset($last_name))?$last_name:"";
		$father_name=(isset($father_name))?$father_name:"";
		$mother_name=(isset($mother_name))?$mother_name:"";
		$dob=(isset($dob))?$dob:"";
		$gender=(isset($gender))?$gender:"";
		$marital=(isset($marital))?$marital:"";
		$nationality=(isset($nationality))?$nationality:"";
		$present_address=(isset($present_address))?$present_address:"";
		$permanent_address=(isset($permanent_address))?$permanent_address:"";
		$mobile=(isset($mobile))?$mobile:"";
		$email=(isset($email))?$email:"";	
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
		
	</head>
	<body>
	<?php include 'link_test.php';?>
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
				<div id="custom_right" class="col-md-9">
					<!-- menubar -->
					<div class="row">
						<div id="custom1-bootstrap-menu" class="navbar navbar-default " role="navigation">
							<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
									</button>
							</div>
							<div class="collapse navbar-collapse navbar-menubuilder">
								<ul class="nav navbar-nav navbar-center">
										<li class="active"><a href="">Personal Details</a></li>
										<li><a href="j_se_edit_edu.php">Education</a></li>
										<li><a href="j_se_edit_other.php">Others</a></li>
										<li><a href="j_se_edit_image.php">Photograph</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- errom message print -->
					<div>
					<?php
		                echo "<div class='row'>";
			             echo "<div class='col-md-10 col-md-offset-1'>";
                        if (!empty($error)) {
						

                            echo "<br/>We encountered the following errors:";

                            echo "<div class='alert alert-danger'>";
                            echo "<ui>";
                            foreach ($error as $message) {
                                echo "<li>" . $message . "</li>";
                            }
                            echo "</ui></div>";
                        }
						else if ($errorMsg) {
                            echo "<div class='alert alert-danger'>";
                            echo "<ui>";
                            echo "<li>" . $errorMsg . "</li>";
                            echo "</ui></div>";
                        } else if ($successMsg) {
                            echo "<div class='alert alert-success'>";
                            echo "<ui>";
                            echo "<li>" . $successMsg . "</li>";
							echo "</ui></div>";
                        }
						
						echo "</div></div>";
						if ($successMsg)
						{
						header('Refresh: 2;url=j_se_home.php');					
						}
                        ?>
						</div>
					<!--============ Form start =============-->
					<form  name="update" id="update" action="j_se_edit_profile.php" method="post">
						<div class="form-group">
							<label for="">First Name</label>
							<input placeholder="First name" type="text" name="first_name" class="form-control" value="<?php echo $first_name; ?>" id="first_name">
						</div>
						<div class="form-group">
							<label for="">Last Name</label>
							<input placeholder="Last Name" type="text" name="last_name" class="form-control" value="<?php echo $last_name; ?>" id="last_name">
						</div>
						<div class="form-group">
							<label for="">Father's Name</label>
							<input placeholder="Father Name" type="text" name="father_name" class="form-control" value="<?php echo $father_name; ?>" id="father_name">
						</div>
						<div class="form-group">
							<label for="">Mother's Name</label>
							<input placeholder="Mother Name" type="text" name="mother_name" class="form-control" value="<?php echo $mother_name; ?>" id="mother_name">
						</div>
						<div class="form-group">
							<label for="">Birth of Date</label>
							<div class="input-append date"  data-date="" data-date-format="dd-mm-yyyy">
								  <input id="dob" name="dob" class="form-control" type="text" value="<?php echo $dob; ?>" >
								  <span class="add-on"><i class="icon-th"></i></span>
							</div>
						</div>
						<div class="form-group">
							<label for="">Gender</label>
							<select id="gender" name="gender" class="form-control" value="<?php echo $gender; ?>">
								<option value="Male">Male</option>
								<option value="Femal">Female</option>
						  </select>
						</div>
						<div class="form-group">
							<label for="">Marital Status</label>
							<select id="marital" name="marital" class="form-control" value="<?php echo $marital; ?>">
								<option value="Single">Single</option>
								<option value="Unmarried">Unmarried</option>
								<option value="Married">Married</option>
								
						  </select>
						</div>
						<div class="form-group">
							<label for="">Nationality</label>
							<select id="nationality" name="nationality" class="form-control" value="<?php echo $nationality; ?>">
								<option value="Bangladesh">Bangladesh</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">Present Address</label>
							<textarea class="form-control" rows="2" name="present_address" id="present_address"><?php echo $present_address; ?></textarea>
						</div>
						<div class="form-group">
							<label for="">Permanent Address</label>
							<textarea class="form-control" rows="2" name="permanent_address"  id="permanent_address"><?php echo $permanent_address; ?></textarea>
						</div>
						<div class="form-group">
							<label for="">Mobile</label>
							<input  placeholder="Mobile...." type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $mobile; ?>" pattern="[0-9]{11}" title="Example: 01738696439">
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input placeholder=" Email" type="email" class="form-control" name="email" id="email" value="<?php echo $email; ?>">
						</div>
						<div class="form-group">
							
							  <button type="submit" class="btn btn-primary btn-lg" name="update"  value="update">Update Information</button>
							  <button type="button" class="btn btn-primary btn-lg" name="cancel"  value="cancel">Cancel</button>
							  
						</div>	
						
					</form>	  
				</div>
			</div>
		</div>
		
		</div
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