<title>View Resume</title>
<?php
	error_reporting(0);
	include 'global_variables.php';
	include 'config.php';
	include 'service_config.php';
	include 'functions.php';
	include 'link_test.php';
	/* return name and id from $job_users table*/
			$name=$_SESSION['user_name']; // $name= present user name
			$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
			$cv_link="mpdf60/test.php?u=$name";
			/*check $job_user_profile */
	$sql="select * from $job_user_profile where `user_id`='$user_id'";
	$res=mysql_query($sql);
	//echo $res;exit;
	$row=mysql_fetch_array($res);
	if(strlen($row['father_name'])==0 || strlen($row['mother_name'])==0 || strlen($row['marital'])==0 || strlen($row['present_address'])==0 || strlen($row['permanent_address'])==0)
	{
		?>
		<script>
			alert('please insert your personal information');
			window.location="j_se_home.php";
		</script>
		exit;
		<?php
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
			<!-- <?php include 'menu_user.php';?> -->
		<!-- --------------------- main body ---------------------->	
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div id="custom_list" class="col-md-3">
					<?php include 'j_se_left.php';?>
				</div>	
				<div id="custom_right3" class="col-md-9">
					<div class="row">
						<div class="well well-sm">View Resume</div>
						<a style="text-decoration:none;" href="<?php echo $cv_link;?>">DOWNLOAD RESUME</a>
							<!-- address print -->
							<div class="row">
								<div class="col-md-9" style="">
									<address>
									<?php
										$name = one_col_value($conn,"id",$job_users,$user_id,"first_name");
										$name1=one_col_value($conn,"id",$job_users,$user_id,"last_name");
										if(strlen($name)>0 || strlen($name1)>0)
											echo " <br><h4>$name $name1</h4><br>";
										$address=one_col_value($conn,"user_id",$job_user_profile,$user_id,"present_address");
										if(strlen($address)>0)
											echo "<div style='font-size:14px;'> $address<br>";
										$mobile=one_col_value($conn,"id",$job_users,$user_id,"mobile");
										if(strlen($mobile)>0)
											echo "Mobile : $mobile <br>";
										$email=	one_col_value($conn,"id",$job_users,$user_id,"user_email");
										if(strlen($email)>0)
											echo "e-mail : $email <br>";
									?>	
									</address>
								</div>
								<div class="col-md-3" style="">
									<!--<img src="jalilur.png" class="img-responsive" alt="Cinque Terre" width="130" height="135"> -->
									<?php
										if(find_image($conn,"user_id","$job_users_image",$user_id)){
											echo "<img src='profile_pic/$user_id.png' class='img-responsive' alt='profile_pic' width='130' height='135'>";
											}
										
									?>
								</div>
							</div>
							<!-- ----------drawline-------- -->
							<hr><br>
							<!-- --------------Career Objective------------- -->
							<?php
								$objectives=one_col_value($conn,"user_id",$job_users_others,$user_id,"objectives");
								if(strlen($objectives)>0)
								echo "<div class='well well-sm' style='background:olive;'>Career Objective</div>
								<p>$objectives</p>";
								// carrer summary
								$carrer=one_col_value($conn,"user_id",$job_users_others,$user_id,"carreer_summary");
								if(strlen($carrer)>0)
								echo "<div class='well well-sm' style='background:olive;'>Career Summary</div>
								<p>$carrer</p>";
								//<!-- -------Special Qualification-------- -->
								$Special=one_col_value($conn,"user_id",$job_users_others,$user_id,"special_quali");
								if(strlen($Special)>0)
								echo "<div class='well well-sm' style='background:olive;'>Special Qualification</div>
								<p>$Special</p>";
								//<!-- -------Experence-------- -->
								$Experience=one_col_value($conn,"user_id",$job_users_others,$user_id,"experience");
								if(strlen($Experience)>0)
								echo "<div class='well well-sm' style='background:olive;'>Experience</div>
								<p>Total Year of Experience : $Experience Year(s)</p>";
								//<!-- Academic Qualification -->
								$bsc=one_col_value($conn,"user_id",$job_edu_info,$user_id,"b_major");
								$hsc=one_col_value($conn,"user_id",$job_edu_info,$user_id,"h_major");
								$ssc=one_col_value($conn,"user_id",$job_edu_info,$user_id,"s_major");
								if(strlen($bsc)>0 || strlen($hsc)>0 || strlen($ssc)>0)
								{
									echo "<div class='well well-sm' style='background:olive;'>Academic Qualification</div>";
									echo "<table class='table table-bordered'>
									<thead>
									  <tr>
										<th>Exam Title</th>
										<th>Concentration/Major</th>
										<th>Institute</th>
										<th>Result</th>
										<th>Pas.Year</th>
									  </tr>
									</thead>
									<tbody>
									<!-- versity-->
									  <tr>";
									  if(strlen($bsc)>0){
									  $bsc_i=one_col_value($conn,"user_id",$job_edu_info,$user_id,"b_institute");
									  $bsc_r=one_col_value($conn,"user_id",$job_edu_info,$user_id,"b_result");
									  $bsc_y=one_col_value($conn,"user_id",$job_edu_info,$user_id,"b_year");
										echo "<td>B.Sc. in cse </td>
										<td>$bsc</td>
										<td>$bsc_i</td>
										<td>CGPA: $bsc_r</td>
										<td>$bsc_y</td>
									  </tr>";
									  
									  }
									 // <!-- college-->
									 if(strlen($hsc)>0){
									  $bsc_i=one_col_value($conn,"user_id",$job_edu_info,$user_id,"h_institute");
									  $bsc_r=one_col_value($conn,"user_id",$job_edu_info,$user_id,"h_result");
									  $bsc_y=one_col_value($conn,"user_id",$job_edu_info,$user_id,"h_year");
										echo "<td>HSC</td>
										<td>$hsc</td>
										<td>$bsc_i</td>
										<td>CGPA: $bsc_r</td>
										<td>$bsc_y</td>
									  </tr>";
									  
									  }
									//  <!-- school-->
									 if(strlen($ssc)>0){
									  $bsc_i=one_col_value($conn,"user_id",$job_edu_info,$user_id,"s_institute");
									  $bsc_r=one_col_value($conn,"user_id",$job_edu_info,$user_id,"s_result");
									  $bsc_y=one_col_value($conn,"user_id",$job_edu_info,$user_id,"s_year");
										echo "<td>SSC</td>
										<td>$hsc</td>
										<td>$bsc_i</td>
										<td>CGPA: $bsc_r</td>
										<td>$bsc_y</td>
									  </tr>";
									  }
									echo "</tbody>
								  </table>";
								}
								//<!-- Specialization: -->
								$special=one_col_value($conn,"user_id",$job_users_others,$user_id,"specialization");
								if(strlen($special)>0)
								echo "<div class='well well-sm' style='background:olive;'>Specialization</div>
								<p>$special</p>";
								
							?>
							<!-- Personal Details : -->
								<div class="well well-sm" style="background:olive;">Personal Details</div>	
									<class="row">
										<div class="col-md-3">
											Father's Name<br>
											Mother's Name<br>
											Date of Birth<br>
											Gender<br>
											Marital Status<br>
											Nationality<br>
											Permanent Address<br>
											Current Location<br>
										</div>
										<div class="col-md-9">
											<?php
												$father_name = one_col_value($conn,"user_id",$job_user_profile,$user_id,"father_name");
												$mother_name = one_col_value($conn,"user_id",$job_user_profile,$user_id,"mother_name");
												$dob = one_col_value($conn,"id",$job_users,$user_id,"dob");
												$gender = one_col_value($conn,"id",$job_users,$user_id,"gender");
												$marital = one_col_value($conn,"user_id",$job_user_profile,$user_id,"marital");
												$nationality = one_col_value($conn,"user_id",$job_user_profile,$user_id,"nationality");
												$permanent_address = one_col_value($conn,"user_id",$job_user_profile,$user_id,"permanent_address");
												echo ": $father_name<br>
												: $mother_name<br>
												:$dob<br>
												:$gender<br>
												:$marital<br>
												:$nationality<br>
												:$permanent_address<br>
												:Dhaka<br>";
											?>
										</div>
									</div>
										<br>
										<hr><br>
										<?php
										if(find_image($conn,"user_id",$signature,$user_id)){
											echo "<span style='color:olive;'>Signatrue:</span><br>";
											echo "<img src='signature/$user_id.png' class='img-responsive' alt='signature' width='130' height='100'><br><hr><br>";
											}
										
									?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
		<?php include 'footer.php';?>
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