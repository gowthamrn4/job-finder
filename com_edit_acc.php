<title>Edit Account</title>
<?php
	include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
	$error=array();
		/* return name and id from $job_users table*/
			$name=$_SESSION['user_name']; // $name= present user name
			$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
			
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['update']) && $_POST['update'] == "update") )
		{
			extract($_POST);
			/* unique user name checking start */
			if(check_previous_email($conn,"user_name",$user_name,$_SESSION['user_name'],$job_users)==FALSE)
				{
			 if(check_unique_value($conn,"user_name",$user_name,$job_users) )
			 {
				$error[]="Your User Name has been already used, please enter another User Name";
			 }
			 }
			
			/* unique user name  checking end */
			 
			 /* unique email address checking start */
		     
			 if(check_previous_email($conn,"user_email",$email,$_SESSION['user_name'],$job_users)==FALSE)
				{
			 if(check_unique_value($conn,"user_email",$email,$job_users))
			 {
				$error[]="Your Email address has been already used, please enter another email address";
			 }
			 }
			 /* unique email address checking end */
			 
			 /*start check unique company name*/
			 if(check_previous_email($conn,"com_name",$com_name,$_SESSION['user_name'],$job_users)==FALSE)
				{
			 if(check_unique_value($conn,"com_name",$com_name,$job_users))
			 {
				$error[]="Your Company Name has been already used, please enter another Company Name";
			 }
			 }
			 /* end check unique company name */
			 
			 $error=array_filter($error);// this function is for remove null array
			 /* update info in DB*/
			  		if(empty($error))
					{
						$qry="update $job_users set `first_name`='$name1',`user_email`='$email',`user_name`='$user_name',`mobile`='$mobile',`com_name`='$com_name',`com_address`='$com_address',`country`='$country',`city`='$city',`industry_type`='$industry_type',`com_url`='$com_url',`last_update`=now() where `id`='$user_id'";
						$ins=mysql_query($qry);
						if($ins)
						{
							$succ_msg="Your account has been updated successfully";
							$successMsg="Your account has been updated successfully";
							?>
							<script>
							alert("Your account has been updated successfully");
							window.location="com_home.php";
							</script>
							<?php 
						}
						else
						{
							$errorMsg="Something is wrong";
						}
					}
		}
		$qry="select * from $job_users where id ='$user_id' limit 1";
				$res=mysql_query($qry);
				if($res)
				{
					if($row =  mysql_fetch_array($res,MYSQL_ASSOC))
					{
						$name1=$row["first_name"];
						$email=$row["user_email"];
						$user_name=$row["user_name"];
						$mobile=$row["mobile"];
						$com_name=$row["com_name"];
						$com_address=$row["com_address"];
						$country=$row["country"];
						$city=$row["city"];
						$industry_type=$row["industry_type"];
						$com_url=$row["com_url"];
						
					}
				
			    }
			$name1=(isset($name1))?$name1:"";	
			$email=(isset($email))?$email:"";	
			$user_name=(isset($user_name))?$user_name:"";	
			$mobile=(isset($mobile))?$mobile:"";	
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
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/test.css">
		
	</head>
	<body>
		<?php include 'link_test.php';?>
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
						
                        ?>
				<form  name="com_edit" id="com_edit" action="com_edit_acc.php" method="post">
					<p style="color:olive;font-size:20px;">Account Information</p>
					<div class="form-group">
						<label for="">Name</label>
						<input placeholder="Name" type="text" name="name1" class="form-control" value="<?php echo $name1 ?>" id="name1">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input placeholder=" Email" type="email" class="form-control" name="email" id="email" value="<?php echo $email ?>"title="a_cse@yahoo.com">
					</div>
					<div class="form-group">
						<label for="">User Name</label>
						<input placeholder="User Name" type="text" class="form-control" name="user_name" value="<?php echo $user_name ?>" id="user_name" readonly>
					</div>
					<div class="form-group">
						<label for="">Mobile</label>
						<input placeholder="Mobile..." name="mobile" id="mobile" class="form-control" value="<?php echo $mobile ?>" type="text">
					</div>
					<p style="color:olive;font-size:20px;">Company Details</p>
					<div class="form-group">
						<label for="">Company Name</label>
						<input placeholder="Company Name" type="text" name="com_name" class="form-control" value="<?php echo $com_name ?>" id="com_name" readonly>
					</div>
					<div class="form-group">
						<label for="">Company address</label>
						<input placeholder="Company Name" type="text" class="form-control" name="com_address" value="<?php echo $com_address ?>" id="com_address">
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
						<label for="">City</label>
						<input placeholder="City..." name="city" id="city" class="form-control" value="<?php echo $city ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Industry Type</label>
						<select id="industry_type" class="form-control" name="industry_type">
							<option value="<?php echo $industry_type ?>"> Select</option>
							<?php
							foreach ($business_types as $val)
							{
							echo "<option  value='$val'>$val</option>";
							}
							?>
				    	</select>
					</div>
					<div class="form-group">
						<label for="">Company URL/Website</label>
						<input placeholder="Company URL/Website..." name="com_url" id="com_url" class="form-control" value="<?php echo $com_url ?>" type="text">
					</div>
					<div class="form-group">
					<div>
					  <button class="btn btn-primary" name="update"  value="update" type="submit">Update</button>
					</div>
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
	</body>
</html>