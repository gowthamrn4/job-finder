<?php 
 include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';	
 /*validation start */
 
 $error=array();
		
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['recovery']) && $_POST['recovery'] == "recovery") )
		{
			extract($_POST);
			/*echo "<pre>";
			print_r($_POST);
			exit();*/
			 $error[]=input_required_validation($email,"Email");
			 $error[]=input_required_validation($user_name,"User Name");
			$error=array_filter($error);// this function is for remove null array
			if(empty($error)){
			$sql="select * from $job_users where `user_name`='$user_name' and `user_email`='$email' and `type`='$type'";
			$res=mysql_query($sql);
			if($res){
				 	$row=mysql_fetch_array($res);
					/*echo $row['user_name'];
					echo $row['user_email'];
					echo $row['type'];
					echo "<br>".$user_name;
					echo $email;
					echo $type;*/
					if($row['user_name']==$user_name && $row['user_email']==$email && $row['type']==$type)
						{
						/*generate activation key*/
						/*$activation= md5(uniqid(rand(), true));
						$destination = $email;	 
                    $from = "admin@bubtjobs.com";
                  // $link = "http://bubtjobs.com/confirmSignupApp.php?email=".urlencode($destination)."&key=$activation";
                    // Send the email:
                    $message = "Dear user,<br>";
                    $message .="Your Email,User Name and Password is: <br>";
                   //$message .= "<a href='$link'> $link </a> ";
                  $message .="<br>Email:".$email;
                  $message .="<br>User Name:".$user_name;
                  $message .="<br>Password:".$row['user_password'];
                    $message .="<br>Best Regards,<br>";
                    $message .="Admin";
                    $headers .= 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= "From: $from \r\n" .
                            $headers .="Reply-To: $from \r\n";
                    $headers .="X-Mailer: PHP/" . phpversion();

                    // mail($destination, 'Registration Confirmation', $message, $headers);
                    mail($destination, 'Registration Confirmation', wordwrap($message, 75, "\n", true), wordwrap($headers, 75, "\n", true));
					*/
					?>
						<script>
							alert("Please try in server it is not possible in local host");
							//window.location = "index.php";
						</script>
						<?php

							//end mail system check
						}
					else
						{
						?>
						<script>
							alert("Insert Correct Information");
							//window.location = "index.php";
						</script>
						<?php
						}
			}
			else
				echo "no";
				}
			
		}
	$errorMsg=(isset($errorMsg))?$errorMsg:"";
	$successMsg=(isset($successMsg))?$successMsg:"";

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Password Recovery</title>
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
	    
		<?php include 'header_ac.php';?>
		<!--FORM-->
	<div class="container">
		   
		   
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="well well-sm" style="margin-top:10px;";>Password recovery</div>
			</div>
		</div>		
			
	  <div class="row">
			<form  name="recovery_page" id="recovery_page" action="password_recovery.php" method="post">
				<div class="col-md-10 col-md-offset-1">
					<h4>Terms and Conditions for recovery password</h4>
					<ol style="margin-left:20px;";>
					<li>Your Email must be same when you created account</li>
					<li>Your User Name and Type must be same when you created account</li>
					</ol>
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
                        } 
						echo "</div></div>";
                        ?>
				
					<div class="form-group">
						<label for="">Email</label>
						<input placeholder="Email" type="text" name="email" class="form-control" value="<?php ?>" id="email">
					</div>
					<div class="form-group">
						<label>User Name</label>
						<input placeholder="User Name" type="text" name="user_name" class="form-control" value="<?php ?>" id="user_name">
					</div>
					<div class="form-group">
						<label>Type</label>
						<select id="type" name="type" class="form-control" value="">
							<option  value="user">Job User</option>
							<option  value="company">Company</option>
						</select>
					</div>
					<div class="form-group">
					  <button type="submit" class="btn btn-primary" name="recovery"  value="recovery">Recovery Password</button>
					  <button type="submit" class="btn btn-primary" name="cancel"  value="cancel">Cancel</button>
					</div>
				</div>
					
				</div>	
			</form>	
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
			
			
			<!-- js file end -->
			

	</body>
</html>