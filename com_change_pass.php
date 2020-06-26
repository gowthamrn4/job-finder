<title>Change Password</title>
<?php 
 include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
 include 'link_test.php';
 /*validation start */
 /* return name and id from $job_users table*/
		$name=$_SESSION['user_name']; // $name= present user name
		$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
					
 $error=array();
 	if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['update']) && $_POST['update'] == "update") )
		{
			extract($_POST);
			/* check required fields start */
			  $error[]=input_required_validation($old_pass,"Old Password is required");
			  $error[]=input_required_validation($new_pass,"New Password is required");
			  $error[]=input_required_validation($con_pass,"Confirm Password is required");
			  /* this function is for remove null array */
			$error=array_filter($error);// this function is for remove null array
			if(empty($error)){
			/*check new password and confirm password is equal */
			   if(strcmp($new_pass,$con_pass))
			   $error[]="Incorrect Confirm Password";
			   else{
					
					/*check old pass is correct or incorrect*/
					if(!check_user_login($conn,$name,$old_pass,$job_users))
					$error[]="Invalid Old Password";
					/*update password */
					else{
						$qry="update $job_users set `user_password`='$con_pass' where `id`='$user_id'";
						$ins1=mysql_query($qry);
						if(!$ins1)
						$errorMsg="Something 2 is wrong";
						else
						{
							?>
									<script>
										alert("Password Update Sucessfull!!");
										window.location= "logout.php";
									</script>
								<?php
						}
					}
				}
				}
			
			
		}
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
	
		<div class="container">
			<!-- ******************** start logo div ******************-->
			<?php include 'header_n.php';?>
			<!-- ******************** end logo div ******************-->
			<br>
		<!-- --------------------- main body ---------------------->	
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div id="custom_list" class="col-md-3">
					<?php include 'com_left_menu.php';?>
				</div>	
				<div id="custom_right" class="col-md-9">
				
					<div class="well" style="color:white;background-color:#8D9194;"><strong>Change Password<strong></div>
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
							else
							{
								
							}
                        ?>
						</div>
					<!--============ Form start =============-->
					<div id="custom_right" class="col-md-12">
					<form  name="change_pass" id="change_pass" action="j_se_change_pass.php" method="post">
						<fieldset disabled>
							<div class="form-group">
								<label for="">User Name</label>
								<input type="text" id="disabledTextInput" name="user_name" value="<?php echo $name;?>" class="form-control" placeholder="jalil_cse">
							</div>
						</fieldset>
						
						<div class="form-group">
							<label for="">Old Password</label>
							<input placeholder="Old Password" type="password" name="old_pass" class="form-control" value="" id="old_pass">
						</div>
						<div class="form-group">
							<label for="">New Password</label>
							<input placeholder="New Password" type="password" name="new_pass" class="form-control" value="" id="new_pass">
						</div>
						<div class="form-group">
							<label for="">Confirm Password</label>
							<input placeholder="Confirm Password" type="password" name="con_pass" class="form-control" value="" id="con_pass">
						</div>
						<div class="form-group">
							  <button type="submit" class="btn btn-success btn-lg" name="update"  value="update">Update Information</button>
						</div>	
					</form>	
					</div>		
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