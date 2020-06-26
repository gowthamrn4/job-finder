<?php
	include 'global_variables.php';
	include 'functions.php';
	session_start();
$conn=mysql_connect("localhost","job","job");
$c=mysql_select_db("job");
$name=$_SESSION['user_name'];
$user_id = return_id($conn,$name);
 ?>

<html>
	<head>
		<style>
				*{
				margin: 0;
				padding: 0;
				}

			body {
				font-family: Arial, Helvetica, sans-serif;
				background: #FFFFFF;
				}
			.wrapper {
				width:750px;
				margin: 0 auto;
				padding-left: 10px;
				padding-right: 10px;
				}
		</style>
	</head>
	<body>
		<div style="width:750px;margin: 0 auto;padding-left: 10px;padding-right: 10px;">
			<div  style="width:100%;padding-top: 30px;">
				<table border="0">
				<tr>
				<td style="width: 70%; text-align: left;float:left;">
					<?php
						$name = one_col_value($conn,"id",$job_users,$user_id,"first_name");
						$name1=one_col_value($conn,"id",$job_users,$user_id,"last_name");
						if(strlen($name)>0 || strlen($name1)>0)
							echo " <br><h4>$name $name1</h4><br>";
						$address=one_col_value($conn,"user_id",$job_user_profile,$user_id,"permanent_address");
						if(strlen($address)>0)
							echo "<div style='font-size:14px;'>Adress:House No: 26, Road No: 2/e Priyanka Housing, Mirpur-1, Dhaka-1216 <br>";
						$mobile=one_col_value($conn,"id",$job_users,$user_id,"mobile");
						if(strlen($mobile)>0)
							echo "Mobile : $mobile <br>";
						$email=	one_col_value($conn,"id",$job_users,$user_id,"user_email");
						if(strlen($email)>0)
							echo "e-mail : $email <br></div>";
					?>
				</td>
				<td style="width: 30%; text-align: right;float:right;">
				<!--<img src="jalilur.png" alt="Profile Image" width="130" height="135" style="float:right;"></td></tr> -->
					<?php
						if(find_image($conn,"user_id","$job_users_image",$user_id)){
						echo "<img src='profile_pic/$user_id.png' class='img-responsive' alt='profile_pic' width='130' height='135'>";
						}
					?>
				</table>
			</div>
			<!-- Career Objective-->
			<?php
				$objectives=one_col_value($conn,"user_id",$job_users_others,$user_id,"objectives");
					if(strlen($objectives)>0)
					echo "<div style='padding-top:20px;'>
							<div style='background:olive;height:40px;'>
								<p style='padding-top:10px;padding-left:5px;'>Career Objective</p>
							</div>
							<p style='font-size:15px;padding-top:10px;'>$objectives</p>
							</div>
							";
			?>
			<!-- Career Summary-->
			<?Php
				$carrer=one_col_value($conn,"user_id",$job_users_others,$user_id,"carreer_summary");
					if(strlen($carrer)>0)
					echo "<div style='padding-top:20px;'>
						<div style='background:olive;height:40px;'>
						<p style='padding-top:10px;padding-left:5px;'>Career Summary</p>
						</div>
						<p style='font-size:15px;padding-top:10px;'>$carrer</p>
						</div>";
			?>
			
			<!-- Special Qualification-->
			<?Php
				$Special=one_col_value($conn,"user_id",$job_users_others,$user_id,"special_quali");
					if(strlen($Special)>0)
					echo "<div style='padding-top:20px;'>
						<div style='background:olive;height:40px;'>
						<p style='padding-top:10px;padding-left:5px;'>Special Qualification</p>
						</div>
						<p style='font-size:15px;padding-top:10px;'>$Special</p>
						</div>";
			?>
			<!-- Experience-->
			<?Php
				$Experience=one_col_value($conn,"user_id",$job_users_others,$user_id,"experience");
					if(strlen($Experience)>0)
					echo "<div style='padding-top:20px;'>
						<div style='background:olive;height:40px;'>
						<p style='padding-top:10px;padding-left:5px;'>Experience</p>
						</div>
						<p style='font-size:15px;padding-top:10px;'>Total Year of Experience : $Experience Year(s)</p>
						</div>";
			?>
			<!-- Academic Qualification-->
			<?php
				$bsc=one_col_value($conn,"user_id",$job_edu_info,$user_id,"b_major");
				$hsc=one_col_value($conn,"user_id",$job_edu_info,$user_id,"h_major");
				$ssc=one_col_value($conn,"user_id",$job_edu_info,$user_id,"s_major");
				if(strlen($bsc)>0 || strlen($hsc)>0 || strlen($ssc)>0)
					{
					echo "<div style='padding-top:20px;'>
						<div style='background:olive;height:40px;'>
						<p style='padding-top:10px;padding-left:5px;'>Academic Qualification</p>
						</div>
						<table  border='1' style='font-size:15px;'>
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
			?>
			<!-- Specialization-->
			<?Php
				$special=one_col_value($conn,"user_id",$job_users_others,$user_id,"specialization");
					if(strlen($special)>0)
					echo "<div style='padding-top:20px;'>
						<div style='background:olive;height:40px;'>
						<p style='padding-top:10px;padding-left:5px;'>Specialization</p>
						</div>
						<p style='font-size:15px;padding-top:10px;'>$special</p>
						</div>";
			?>
			<!-- personal Details-->
			<div class="objective" style="padding-top:20px;">
				<div style="background:olive;height:40px;">
					<p style="padding-top:10px;padding-left:5px;">Personal Details</p>
				</div>
				<p style="font-size:15px;padding-top:10px;">
					Father's Name<span style="display:inline-block; width:50px;"></span>: MD. Ruhul Amin<br>
					Mother's Name   	:Mst. Jahanara Begum<br>
					Date of Birth		:November 05, 1992<br>
					Gender 				:Male<br>
					Marital Status		:Single<br>
					Nationality			:Bangladeshi<br>
					Religion			:Islam<br>
					Permanent Address 	:Vill: Senihary, Post: Ruhea, Thana: Ruhea, Dist.: Thakurgaon<br>
					Current Location	:Dhaka<br>
				</p>
			</div>
		</div>
	</body>
</html>