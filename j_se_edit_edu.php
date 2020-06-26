<title>Education</title>
<?php 
 include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
 /*validation start */
 $error=array();
 /* start operation for secondary */
 if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['Update_secondary']) && $_POST['Update_secondary'] == "Update_secondary") )
		{
		extract($_POST);
		// ======= start check for ki ki aslo=========
		//echo "<pre>";
		//print_r($_POST);
		// ======= end check for ki ki aslo===========
		//echo $_POST['institute']; exit;
		
			 /* return name and id from $job_users table*/
			$name=$_SESSION['user_name']; // $name= present user name
			$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
			//echo $name." ".$user_id;
			/*check for update or insert value*/
			 /*update*/
			 if(exist_user($conn,"user_id",$user_id,$job_edu_info)) // update
				{
						$qry="update $job_edu_info set `s_major`='$major',`s_institute`='$institute',`s_result`='$result',`s_year`='$year' where `user_id`='$user_id'";
						$ins1=mysql_query($qry);
									?>
			<script>
			alert("Updated successfully!!!");
			</script>
		<?php
				}
			else{  //insert
					$name=$_SESSION['user_name'];
					$qry="insert into $job_edu_info (`user_id`,`s_major`,`s_institute`,`s_result`,`s_year`,`status`,`last_update`) values ('$user_id','$major','$institute','$result','$year','Active',now())";
					$ins=mysql_query($qry);
					if($ins)
					{
						$succ_msg="Updated successfully!!!";
						$successMsg="Updated successfully!!!";
						?>
			<script>
			alert("Update successfully!!!");
			</script>
		<?php
					}
					else
							$errorMsg="Something 2 is wrong";
				}
		}
		/* start operation for Higher secondary */
		else if($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['Update_higher']) && $_POST['Update_higher'] == "Update_higher") )
		{
		extract($_POST);
			 /* return name and id from $job_users table*/
			$name=$_SESSION['user_name']; // $name= present user name
			$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
			//echo $name." ".$user_id;
			/*check for update or insert value*/
			 /*update*/
			 if(exist_user($conn,"user_id",$user_id,$job_edu_info)) // update
				{
						$qry="update $job_edu_info set `h_major`='$major',`h_institute`='$institute',`h_result`='$result',`h_year`='$year' where `user_id`='$user_id'";
						$ins1=mysql_query($qry);
						?>
			<script>
			alert("Update successfully!!!");
			</script>
		<?php
				}
			else{  //insert
					$name=$_SESSION['user_name'];
					$qry="insert into $job_edu_info (`user_id`,`h_major`,`h_institute`,`h_result`,`h_year`,`status`,`last_update`) values ('$user_id','$major','$institute','$result','$year','Active',now())";
					$ins=mysql_query($qry);
					if($ins)
					{
						$succ_msg="Updated successfully!!!";
						$successMsg="Updated successfully!!!";
						?>
			<script>
			alert("Updated successfully!!!");
			</script>
		<?php
					}
					else
							$errorMsg="Something 2 is wrong";
				}
		}
		/* start operation for Diploma */
		else if($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['Update_diploma']) && $_POST['Update_diploma'] == "Update_diploma") )
		{
		extract($_POST);
			 /* return name and id from $job_users table*/
			$name=$_SESSION['user_name']; // $name= present user name
			$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
			//echo $name." ".$user_id;
			/*check for update or insert value*/
			 /*update*/
			 if(exist_user($conn,"user_id",$user_id,$job_edu_info)) // update
				{
						$qry="update $job_edu_info set `d_major`='$major',`d_institute`='$institute',`d_result`='$result',`d_year`='$year' where `user_id`='$user_id'";
						$ins1=mysql_query($qry);
						?>
			<script>
			alert("Updated successfully!!!");
			</script>
		<?php
				}
			else{  //insert
					$name=$_SESSION['user_name'];
					$qry="insert into $job_edu_info (`user_id`,`d_major`,`d_institute`,`d_result`,`d_year`,`status`,`last_update`) values ('$user_id','$major','$institute','$result','$year','Active',now())";
					$ins=mysql_query($qry);
					if($ins)
					{
						$succ_msg="Your account has been created successfully";
						$successMsg="Your account has been created successfully";
						?>
			<script>
			alert("Updated successfully!!!");
			</script>
		<?php
					}
					else
							$errorMsg="Something 2 is wrong";
				}
		}
		/* start operation for honors */
		else if($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['Update_bachelor']) && $_POST['Update_bachelor'] == "Update_bachelor") )
		{
		extract($_POST);
			 /* return name and id from $job_users table*/
			$name=$_SESSION['user_name']; // $name= present user name
			$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
			//echo $name." ".$user_id;
			/*check for update or insert value*/
			 /*update*/
			 if(exist_user($conn,"user_id",$user_id,$job_edu_info)) // update
				{
						$qry="update $job_edu_info set `b_major`='$major',`b_institute`='$institute',`b_result`='$result',`b_year`='$year' where `user_id`='$user_id'";
						$ins1=mysql_query($qry);
						?>
			<script>
			alert("Update successfully!!!");
			</script>
		<?php
				}
			else{  //insert
					$name=$_SESSION['user_name'];
					$qry="insert into $job_edu_info (`user_id`,`b_major`,`b_institute`,`b_result`,`b_year`,`status`,`last_update`) values ('$user_id','$major','$institute','$result','$year','Active',now())";
					$ins=mysql_query($qry);
					if($ins)
					{
						$succ_msg="Your account has been created successfully";
						$successMsg="Your account has been created successfully";
						?>
			<script>
			alert("Updated successfully!!!");
			</script>
		<?php
					}
					else
							$errorMsg="Something 2 is wrong";
				}
		}
		/* start operation for master */
		else if($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['Update']) && $_POST['Update'] == "Update"))
		{
		extract($_POST);
			 /* return name and id from $job_users table*/
			$name=$_SESSION['user_name']; // $name= present user name
			$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
			//echo $name." ".$user_id;
			/*check for update or insert value*/
			 /*update*/
			 if(exist_user($conn,"user_id",$user_id,$job_edu_info)) // update
				{
						$qry="update $job_edu_info set `m_major`='$major',`m_institute`='$institute',`m_result`='$result',`m_year`='$year' where `user_id`='$user_id'";
						$ins1=mysql_query($qry);
						?>
			<script>
			alert("Update successfully!!!");
			</script>
		<?php
			
				}
			else{  //insert
					$name=$_SESSION['user_name'];
					$qry="insert into $job_edu_info (`user_id`,`m_major`,`m_institute`,`m_result`,`m_year`,`status`,`last_update`) values ('$user_id','$major','$institute','$result','$year','Active',now())";
					$ins=mysql_query($qry);
					if($ins)
					{
						$succ_msg="Your account has been created successfully";
						$successMsg="Your account has been created successfully";
						?>
							<script>
								alert('updated successfull!!!');
							</script>
						<?php
					}
					else
							$errorMsg="Something 2 is wrong";
				}
		}

		
		/* $major=(isset($major))?$major:""; */
/* end operation for secondary */		
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
		<script>
			function show(){
				var x = document.getElementById("level_edu").value;
				//document.getElementById("show").innerHTML=x;
				 var vars = "select_level="+x;
					var xmlhttp;
					if(window.XMLHttpRequest)
					{
					  xmlhttp=new XMLHttpRequest();
					}
					else if(window.XMLHttpRequest)
					{
						xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange=function(){
						if(xmlhttp.readyState==4 && xmlhttp.status==200){
							document.getElementById("show").innerHTML=xmlhttp.responseText;
						}
					}
					//document.getElementById("mydiv").innerHTML="jalil";
					xmlhttp.open("POST","select_edu.php",true);
					xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					xmlhttp.send(vars);

				
			}
		</script>
		
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
										<li><a href="j_se_edit_profile.php">Personal Details</a></li>
										<li class="active"><a href="j_se_edit_edu.php">Education</a></li>
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
							else
							{
								
							}
                        ?>
						</div>
					<!--============ Form start =============-->
					<form  name="update" id="update" action="j_se_edit_edu.php" method="post">
						<div class="form-group">
							<label for="">Level of Eduction</label>
							<select id="level_edu" name="level_edu" class="form-control" value="" onchange="show()">
								<option value="0">Select</option>
								<option value="secondary">Secondary</option>
								<option value="higher">Higher Secondary</option>
								<option value="diploma">Diploma</option>
								<option value="bachelor">Bachelor/Honors</option>
								<option value="masters">Masters</option>
								
						  </select>
						  <div id="show"></div>
						</div>
					</form>	  
				</div>
			</div>
		</div>
		
		</div
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