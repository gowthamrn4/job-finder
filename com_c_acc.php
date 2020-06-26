<?php 
 include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';	
 /*validation start */
 
 $error=array();
		
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['com_submit']) && $_POST['com_submit'] == "com_submit") )
		{
			extract($_POST);
		 //echo "<pre>"; print_r($_POST);
		 /* check required fields start */
			 $error[]=input_required_validation($name,"Name ");
			 $error[]=input_required_validation($user_name,"User Name ");
			 $error[]=input_required_validation($email,"Email ");
			 $error[]=input_required_validation($mobile,"Mobile ");
			 $error[]=input_required_validation($pass,"Password ");
			 $error[]=input_required_validation($con_pass,"Confirm Password ");
			 $error[]=input_required_validation($com_name,"Company Name ");
			 $error[]=input_required_validation($con_pass,"Company Address ");
			 $error[]=input_required_validation($con_pass,"City Name ");
			 $error[]=input_required_validation($industry_type,"Industry type ");
			 
			 
			 /* unique user name checking start */
			 if(check_unique_value($conn,"user_name",$user_name,$job_users))
			 {
				
				$error[]="Your User Name has been already used, please enter another User Name";
			 }
			
			/* unique user name  checking end */
			 
			 /* unique email address checking start */
		     
			 
			 if(check_unique_value($conn,"user_email",$email,$job_users))
			 {
				/*$qry="select `type` from $job_users where `user_email`='$email' and status='Active'";
				$res=mysql_query($qry);
				$result=mysql_fetch_assoc($res);
				$type=$result['type'];
				//echo $type;
				if($type=='company')*/
				$error[]="Your Email address has been already used, please enter another email address";
			 }
			 /* unique email address checking end */
			 
			 /*start check unique company name*/
			 if(check_unique_value($conn,"com_name",$com_name,$job_users))
			 {
				$error[]="Your Company Name has been already used, please enter another Company Name";
			 }
			 /* end check unique company name */
			 
			 $error=array_filter($error);// this function is for remove null array
			  /* save info in DB*/
			  		if(empty($error))
					{
			
						$qry="insert into $job_users (`type`,`first_name`,`user_email`,`user_name`,`mobile`,`user_password`,`com_name`,`com_address`,
						`country`,`city`,`industry_type`,`com_url`,`status`,`reg_date`,`last_update`) values ('company','$name','$email','$user_name','$mobile','$pass','$com_name','$com_address','$country','$city','$industry_type','$com_url','Active',now(),now())";
						$ins=mysql_query($qry);
						//echo $qry;
						if($ins)
						{
							$succ_msg="Your account has been created successfully";
							$successMsg="Your account has been created successfully";
							/*?>
							<script>
							alert("Your account has been created successfully");
							</script>
							<?php */
						}
						else
						{
							$errorMsg="Something is wrong";
						}
					}
			 
		}
	
	$name=(isset($name))?$name:"";
	$user_name=(isset($user_name))?$user_name:"";
	$email=(isset($email))?$email:"";
	$mobile=(isset($mobile))?$mobile:"";
	$com_name=(isset($com_name))?$com_name:"";
	$com_address=(isset($com_address))?$com_address:"";
	$country=(isset($country))?$country:"";
	$city=(isset($city))?$city:"";
	$industry_type=(isset($industry_type))?$industry_type:"";
	$com_url=(isset($com_url))?$com_url:"";
	$errorMsg=(isset($errorMsg))?$errorMsg:"";
	$successMsg=(isset($successMsg))?$successMsg:"";

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Create Account For Job Seeker</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/create_account_job_seeker.css">
		<link rel="stylesheet" href="js/datepicker.css">	
       
	   
	</head>
	<body>
	    
		<?php include 'another_header.php';?>
		
		<!--FORM-->
	<div class="container">
		   
		  <?php include 'index_menu.php';?> 
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
			 <div class="main_body_title">
				<h4>Company Registration Form</h4>
			</div>
			</div>
		</div>
				<!--==============Error Print=============-->
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
                        } else if ($errorMsg) {
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
						header('Refresh: 2;url=index.php');					
						}
						
                        ?>		
			
	  <div class="row">
			 
			<form  name="com_c_acc" id="com_c_acc" action="com_c_acc.php" method="post">
				<div class="col-md-10 col-md-offset-1">
				<p style="color:olive;font-size:20px;">Account Information</p>
				</div>
				<div class="col-md-4 col-md-offset-1 left_color">
					<div class="form-group">
						<label for="">Name</label>
						<input placeholder="Name" type="text" name="name" class="form-control" value="<?php echo $name ?>" id="name">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input placeholder=" Email" type="email" class="form-control" name="email" id="email" value="<?php echo $email ?>"title="a_cse@yahoo.com">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input placeholder=" password" type="password"  class="form-control" name="pass" id="pass"
						 onchange="form.con_pass.pattern = this.value;">
					</div>
				</div>
				<div class="col-md-4 col-md-offset-1 right_color">
					<div class="form-group">
						<label for="">User Name</label>
						<input placeholder="User Name" type="text" class="form-control" name="user_name" value="<?php echo $user_name?>" id="user_name">
					</div>
					<div class="form-group">
						<label for="">Mobile</label>
						<input placeholder="Mobile..." name="mobile" id="mobile" class="form-control" value="<?php echo $mobile ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Confirm Password</label>
						<input placeholder=" confirm password" type="password" class="form-control"   name="con_pass" id="con_pass" onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');">
					</div>
				</div>
				<!-- ===============company details====================-->
				<div class="col-md-10 col-md-offset-1">
				<p style="color:olive;font-size:20px;">Company Details</p>
				</div>
				<div class="col-md-4 col-md-offset-1 left_color">
					<div class="form-group">
						<label for="">Company Name</label>
						<input placeholder="Company Name" type="text" name="com_name" class="form-control" value="<?php echo $com_name ?>" id="com_name">
					</div>
					<div class="form-group">
						<label for="">Country</label>
						<select id="country" class="form-control" name="country">
							<option value="<?php echo $country ?>"> Select</option>
							<?php
							foreach ($country_types as $key=>$val)
							{
							echo "<option  value='$key'>$val</option>";
							}
							?>
				    	</select>
					</div>
					<div class="form-group">
						<label for="">Industry Type</label>
						<select id="industry_type" class="form-control" name="industry_type">
							<option value="<?php echo $industry_type?>"> Select</option>
							<?php
							foreach ($business_types as $val)
							{
							echo "<option  value='$val'>$val</option>";
							}
							?>
				    	</select>
					</div>
				</div>
				<div class="col-md-4 col-md-offset-1 right_color">
					<div class="form-group">
						<label for="">Company address</label>
						<input placeholder="Company Name" type="text" class="form-control" name="com_address" value="<?php echo $com_address ?>" id="com_address">
					</div>
					<div class="form-group">
						<label for="">City</label>
						<input placeholder="City..." name="city" id="city" class="form-control" value="<?php echo $city ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Company URL/Website</label>
						<input placeholder="Company URL/Website..." name="com_url" id="com_url" class="form-control" value="<?php echo $com_url ?>" type="text">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4 col-md-offset-1">
					  <button class="submit" name="com_submit"  value="com_submit" type="submit">Submit Form</button>
					</div>
				</div>
			</form>	
	  </div>
			
			<?php include 'footer.php';?>
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
			
			
			<!-- js file end -->
			

	</body>
</html>