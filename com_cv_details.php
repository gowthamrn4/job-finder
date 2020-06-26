<title>CV Details</title>
<?php
 include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
 include 'link_test.php'; 
 /* return name and id from $job_users table */
	$name=$_SESSION['user_name']; // $name= present user name
	$user_id1 = return_id($conn,"user_name",$name,$job_users); // return current user id
	//echo $name." ".$user_id1." current user name and id <br>";
 //return job user id
 $user_id=$_REQUEST['id'];
// echo $cv_user_id." id for cv view <br>";
 // start return for job post id 
 $job_id=$_REQUEST['job_id'];
 $qry="select `com_job_post_id` from $cv_send where `uniqu_gen`='$job_id' and `job_user_id`='$user_id' ";
 $res=mysql_query($qry);
	while($row=mysql_fetch_array($res))
		{
		$job_user_id=$row['com_job_post_id'];
	//echo $job_user_id." job id<br>";
		}
 // end return for job post id 
 $error=array();
		
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['send']) && $_POST['send'] == "send") )
		{
		extract($_POST);
		
			//echo $dob;
			// check all field insert
		 if(strlen($dob)==0 ||strlen($time)==0 )
		 {
			?>
			<script>
				alert('Insert all field');
			</script>
			<?php
		 }
		 //insert database and send email for interview time
		 else
		 {
			//$l=($new_location)?$new_location:$location;
			if($d_location=="d_location"){
			$sql1="select * from $job_users where `id`='$user_id1'";
			$res1=mysql_query($sql1);
			$row=mysql_fetch_array($res1);
			$location=$row['com_address'];
			$sql="insert into `user_notification` (`user_id`,`com_job_id`,`com_id`,`Date`,`Time`,`location`,`type`,`view`,`update`) values('$user_id','$job_user_id','$user_id1','$dob','$time','$location','interview','0',now())";
			}
			else
			{
				$sql="insert into `user_notification` (`user_id`,`com_job_id`,`com_id`,`Date`,`Time`,`location`,`type`,`view`,`update`) values('$user_id','$job_user_id','$user_id1','$dob','$time','$new_location','interview','0',now())";
				$location=$new_location;
			}
			$res=mysql_query($sql);
			if($res){
				$sql1="update  $cv_send set `view`='1' where `uniqu_gen`='$job_id' and `job_user_id`='$user_id'";
				$res1=mysql_query($sql1);
				$sql="select `user_email` from `job_users` where `id`='$user_id'";
				//echo $sql;
				$res=mysql_query($sql);
				$result=mysql_fetch_assoc($res);
				$email=$result['user_email'];
				//echo $email;
				//start email information send
				/*generate activation key*/
						$activation= md5(uniqid(rand(), true));
						$destination = $email;	 
                    $from = "admin@bubtjobs.com";
                  // $link = "http://bubtjobs.com/confirmSignupApp.php?email=".urlencode($destination)."&key=$activation";
                    // Send the email:
                    $message = "<br>Dear Applicant,<br><br>";
                    $message .="Thanks for your interest to <span style='font-weight: bold;'>".$name." Tech.</span>  we would like to invite you for viva in our office.<br >";
					$message .="The viva session will take place on ".$dob." at ".$time." and will held in following address:<br>
".$new_location.$location."<br>";
                    $message .="<br>Best Regards,<br>";
                    $message .=$name." Tech";
                    $headers .= 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= "From: $from \r\n" .
                            $headers .="Reply-To: $from \r\n";
                    $headers .="X-Mailer: PHP/" . phpversion();

                    // mail($destination, 'Registration Confirmation', $message, $headers);
                    mail($destination, 'Viva Date', wordwrap($message, 75, "\n", true), wordwrap($headers, 75, "\n", true));
				//end email information send
				?>
					<script>
						alert('sent interveiw data,time,location sucessfully');
					</script>
				<?php
			}
			else
			{
				?>
					<script>
						alert('Technical error,please contect with admin');
					</script>
				<?php
			}
		 }
		}
		//don't show
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['cen']) && $_POST['cen'] == "cen") )
		{
		extract($_POST);
		
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
		<script>
			function show(){
				//var x = document.getElementById("level_edu").value;
				//document.getElementById("show").innerHTML='test';
				 var vars = "select_level="+1;
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
					xmlhttp.open("POST","com_send_interview.php",true);
					xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					xmlhttp.send(vars); 

				
			}
			function show1(){
				//document.getElementById("new_location").innerHTML='test ok';
				//document.getElementById("demo").style.fontSize = "25px";
				//document.getElementById("new_location").style = "visible";
				//document.getElementById("major").style.display = 'visible';
				//document.getElementById("major").style.visibility = 'hidden';
				//var x = document.getElementById("level_edu").value;
				//document.getElementById("show").innerHTML='test';
				 var vars = "select_level="+1;
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
							document.getElementById("show1").innerHTML=xmlhttp.responseText;
						}
					}
					//document.getElementById("mydiv").innerHTML="jalil";
					xmlhttp.open("POST","com_send_interview1.php",true);
					xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					xmlhttp.send(vars); 
				
				
			}
		</script>
		
	</head>
	<body>
		<div class="container">
			<!-- ******************** start logo div ******************-->
				<?php include 'header_n.php';?>
				
			<!-- ******************** end logo div ******************-->
			<br>
			<!-- ********************* menu bar *********************** -->
			<?php include 'menu_com.php';?>
			
		<!-- --------------------- main body ---------------------->	
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div id="custom_list" class="col-md-3">
					<?php include 'com_left_2.php';?>
				</div>	
				<div class="col-md-9">
					<!-- button add -->
					<form  name="send_message" id="send_message" action="" method="post">
							<div id="show">
					</form>		
							
							</div>
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
											echo "<div style='font-size:14px;'>Adress: $address<br>";
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
											Religion<br>
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
												:Mst. $mother_name<br>
												:$dob<br>
												:$gender<br>
												:$marital<br>
												:$nationality<br>
												:Islam<br>
												:$permanent_address<br>
												:Dhaka<br>";
											?>
										</div>
										<?php
										echo "<br>";
										if(find_image($conn,"user_id",$signature,$user_id)){
											echo "<br><br><br><span style='color:olive;font-size:20px;'>Signatrue:</span><br>";
											echo "<img src='signature/$user_id.png' class='img-responsive' alt='signature' width='130' height='100'><br><hr><br>";
											}
										
									?>
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