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
		  /* return name and id from $job_users table*/
			$name=$_SESSION['user_name']; // $name= present user name
			$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
			//echo $name." ".$user_id;
			/*check for update or insert value*/
			/*update*/
			 if(exist_user($conn,"user_id",$user_id,$job_users_others)) // update
				{
						$qry="update $job_users_others set `special_quali`='$special_qualification',`specialization`='$specialization',`language`='$language',`com_name`='$company_name',`com_duration`='$company_duration',`experience`='$experience',`objectives`='$objects',`carreer_summary`='$carrer',`last_update`=now() where `user_id`='$user_id'";
						$ins1=mysql_query($qry);
						?>
							<script>
							alert("Update Sucessfull");
							window.location = "j_se_edit_profile.php";
							</script>
						<?php
				}
				else{
					//insert
					$name=$_SESSION['user_name'];
					$qry="insert into $job_users_others (`user_id`,`special_quali`,`specialization`,`language`,`com_name`,`com_duration`,`experience`,`objectives`,`carreer_summary`,`status`,`last_update`) values ('$user_id','$special_qualification','$specialization','$language','$company_name','$company_duration','$experience','$objects','$carrer','Active',now())";
					$ins=mysql_query($qry);
					if($ins)
					{
						$succ_msg="Your account has been created successfully";
						$successMsg="Your account has been created successfully";
						?>
							<script>
								alert("Update Sucessfull");
								window.location = "j_se_edit_profile.php";
							</script>
						<?php
					}
					else{
							$errorMsg="database conn problem";
							
							}
				
				}
				
		 
		 }
		 //=========== print date initial ==============
		 $name=$_SESSION['user_name']; // $name= present user name
		$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
		$qry="select * from $job_users_others where `user_id` ='$user_id' limit 1";
				$res=mysql_query($qry);
				if($res)
					{
						if($row =  mysql_fetch_array($res,MYSQL_ASSOC))
						{
							$special_qualification=$row["special_quali"];
							$specialization=$row["specialization"];
							$language=$row["language"];
							$company_name=$row["com_name"];
							$company_duration=$row["com_duration"];
							$experience=$row["experience"];
							$objects=$row["objectives"];
							$carrer=$row["carreer_summary"];
						}
						
			
				}
		 
 $special_qualification=(isset($special_qualification))?$special_qualification:"";
 $specialization=(isset($specialization))?$specialization:"";
 $language=(isset($language))?$language:"";
 $company_name=(isset($company_name))?$company_name:"";
 $company_duration=(isset($company_duration))?$company_duration:"";
 $experience=(isset($experience))?$experience:"";
 $objects=(isset($objects))?$objects:"";
 $carrer=(isset($carrer))?$carrer:"";
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
										<li ><a href="j_se_edit_profile.php">Personal Details</a></li>
										<li><a href="j_se_edit_edu.php">Education</a></li>
										<li class="active"><a href="j_se_edit_other.php">Others</a></li>
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
                        ?>
						</div>
					<!--============ Form start =============-->
					<form  name="edit_other" id="edit_other" action="j_se_edit_other.php" method="POST">
						<div class="form-group">
							<label for="">Special Qualification</label>
							<textarea class="form-control" rows="2" name="special_qualification"  id="special_qualification"><?php echo "$special_qualification"; ?></textarea>
						</div>
						<div class="form-group">
							<label for="">Specialization</label>
							<textarea class="form-control" rows="2" name="specialization"  id="specialization"><?php echo "$specialization"; ?></textarea>
						</div>
						<div class="form-group">
							<label for="">Language</label>
							<select id="language" name="language" class="form-control" value="<?php echo "$language"; ?>">
								<option value="bangla">Bangla</option>
								<option value="english">English</option>
								<option value="hindi">Hindi</option>
							</select>
						</div>
						<!--  -->
						<div class="form-group">
							<label style="font-size:20px;color:olive;">Employment History</label>
						</div>
						<div class="form-group">
							<label for="">Company Name</label>
							<input type="text" name="company_name" class="form-control" value="<?php echo "$company_name"; ?>" id="company_name">
						</div>
						<div class="form-group">
							<label for="">Duration</label>
							<input type="text" name="company_duration" class="form-control" value="<?php echo "$company_duration"; ?>" id="company_duration">
						</div>
						<div class="form-group">
							<label for="">Experience</label>
							<input type="text" name="experience" class="form-control" value="<?php echo "$experience"; ?>" id="experience">
						</div>
						<div class="form-group">
							<label style="font-size:20px;color:olive;">Career and Application</label>
						</div>
						<div class="form-group">
							<label for="">Objectives</label>
							<textarea class="form-control" rows="2" name="objects"  id="objects"><?php echo "$objects"; ?></textarea>
						</div>
						<div class="form-group">
							<label for="">Career Summary</label>
							<textarea class="form-control" rows="2" name="carrer"  id="carrer"><?php echo "$carrer"; ?></textarea>
						</div>
						<div class="form-group">
							<button class="btn btn-success btn-lg" type="submit" name="update" value="update">Update Information</button>
							<button class="btn btn-success btn-lg" type="submit" name="cancel"  value="cancel"id="">Cancel</button>
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
			<script src="js/bootstrap-datepicker.js"></script>
						<script>
			$('#dob').datepicker();
			</script>
	</body>
</html>