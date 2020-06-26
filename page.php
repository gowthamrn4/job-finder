<?php 
session_start();
$conn=mysql_connect("localhost","job","job");
$c=mysql_select_db("job");
$name=$_SESSION['user_name'];
$user_id = return_id($conn,$name);
function return_id($conn,$name)
	{
		$qry="select * from job_users where user_name='$name'";
		$res=mysql_query($qry);
		if($res){
			 $result=mysql_fetch_array($res);
			 return $result['id'];
		}
		else
			return "error";
	}
?>

	<?php
	function one_col_value($col_name,$table_name,$user_id,$return_col)
	{
		$qry="select * from $table_name where $col_name='$user_id'";
		$res=mysql_query($qry);
		if($res){
			 $result=mysql_fetch_array($res);
			 return $result[$return_col];
		}
		else
			return "0";
	
	}
	function find_image($column_name,$table_name,$column_value)
	{
		$qry="select count(*) as count from $table_name where $column_name='$column_value'";
		$res=mysql_query($qry);
	    $result=mysql_fetch_array($res);
	    $email_count=$result['count'];
			if($email_count>0)
				return TRUE;
			else
				return FALSE;
	}
	/*echo "oh please <br>";
		echo "<img src='jalilur.png' class='img-responsive' alt='profile_pic' width='130' height='135'>";
		echo "no"; */
		echo "<div style='width:750px;margin: 0 auto;padding-left: 10px;padding-right: 10px;'>
			<div  style='width:100%;padding-top: 30px;'>
				<table border='0'>
				<tr>
				<td style='width: 70%; text-align: left;float:left;'>";
						$name = one_col_value("id","job_users",$user_id,"first_name");
						$name1=one_col_value("id","job_users",$user_id,"last_name");
						if(strlen($name)>0 || strlen($name1)>0)
							echo " <br><h4>$name $name1</h4><br>";
						$address=one_col_value("user_id","job_user_profile",$user_id,"present_address");
						if(strlen($address)>0)
							echo "<div style='font-size:14px;'>Adress: $address<br>";
						$mobile=one_col_value("id","job_users",$user_id,"mobile");
						if(strlen($mobile)>0)
							echo "Mobile : $mobile <br>";
						$email=	one_col_value("id","job_users",$user_id,"user_email");
						if(strlen($email)>0)
							echo "e-mail : $email <br></div>";
			echo "</td>
				<td style='width: 30%; text-align: right;float:right;'>";
						if(find_image("user_id","job_users_image",$user_id)){
						$image_name="../profile_pic/".$user_id.".png";
						echo "<img src='$image_name' class='img-responsive' alt='profile_pic' width='130' height='135'>";
						}
				
			echo 	"</table>
			</div>";
			// Career Objective
				$objectives=one_col_value("user_id","job_users_others",$user_id,"objectives");
					if(strlen($objectives)>0)
					echo "<div style='padding-top:20px;'>
							<div style='background:olive;height:40px;'>
								<p style='padding-top:10px;padding-left:5px;'>Career Objective</p>
							</div>
							<p style='font-size:15px;padding-top:10px;'>$objectives</p>
							</div>
							";
			//<!-- Career Summary-->
				$carrer=one_col_value("user_id","job_users_others",$user_id,"carreer_summary");
					if(strlen($carrer)>0)
					echo "<div style='padding-top:20px;'>
						<div style='background:olive;height:40px;'>
						<p style='padding-top:10px;padding-left:5px;'>Career Summary</p>
						</div>
						<p style='font-size:15px;padding-top:10px;'>$carrer</p>
						</div>";	
			//<!-- Special Qualification-->
				$Special=one_col_value("user_id","job_users_others",$user_id,"special_quali");
					if(strlen($Special)>0)
					echo "<div style='padding-top:20px;'>
						<div style='background:olive;height:40px;'>
						<p style='padding-top:10px;padding-left:5px;'>Special Qualification</p>
						</div>
						<p style='font-size:15px;padding-top:10px;'>$Special</p>
						</div>";	
			//<!-- Experience-->
				$Experience=one_col_value("user_id","job_users_others",$user_id,"experience");
					if(strlen($Experience)>0)
					echo "<div style='padding-top:20px;'>
						<div style='background:olive;height:40px;'>
						<p style='padding-top:10px;padding-left:5px;'>Experience</p>
						</div>
						<p style='font-size:15px;padding-top:10px;'>Total Year of Experience : $Experience Year(s)</p>
						</div>";
			//<!-- Academic Qualification-->
				$bsc=one_col_value("user_id","job_edu_info",$user_id,"b_major");
				$hsc=one_col_value("user_id","job_edu_info",$user_id,"h_major");
				$ssc=one_col_value("user_id","job_edu_info",$user_id,"s_major");
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
									  $bsc_i=one_col_value("user_id","job_edu_info",$user_id,"b_institute");
									  $bsc_r=one_col_value("user_id","job_edu_info",$user_id,"b_result");
									  $bsc_y=one_col_value("user_id","job_edu_info",$user_id,"b_year");
										echo "
										<tr>
										<td>B.Sc. in cse </td>
										<td>$bsc</td>
										<td>$bsc_i</td>
										<td>CGPA: $bsc_r</td>
										<td>$bsc_y</td>
									  </tr>";
									  
									  }
									 // <!-- college-->
									 if(strlen($hsc)>0){
									  $bsc_i=one_col_value("user_id","job_edu_info",$user_id,"h_institute");
									  $bsc_r=one_col_value("user_id","job_edu_info",$user_id,"h_result");
									  $bsc_y=one_col_value("user_id","job_edu_info",$user_id,"h_year");
										echo "
										<tr>
										<td>HSC</td>
										<td>$hsc</td>
										<td>$bsc_i</td>
										<td>CGPA: $bsc_r</td>
										<td>$bsc_y</td>
									  </tr>";
									  
									  }
									//  <!-- school-->
									 if(strlen($ssc)>0){
									  $bsc_i=one_col_value("user_id","job_edu_info",$user_id,"s_institute");
									  $bsc_r=one_col_value("user_id","job_edu_info",$user_id,"s_result");
									  $bsc_y=one_col_value("user_id","job_edu_info",$user_id,"s_year");
										echo "
										<tr>
										<td>SSC</td>
										<td>$hsc</td>
										<td>$bsc_i</td>
										<td>CGPA: $bsc_r</td>
										<td>$bsc_y</td>
									  </tr>";
									  }
									echo "</tbody>
								  </table>";
					}
				//<!-- Specialization-->
				$special=one_col_value("user_id","job_users_others",$user_id,"specialization");
					if(strlen($special)>0)
					echo "<div style='padding-top:20px;'>
						<div style='background:olive;height:40px;'>
						<p style='padding-top:10px;padding-left:5px;'>Specialization</p>
						</div>
						<p style='font-size:15px;padding-top:10px;'>$special</p>
						</div>";
						
					echo "</div>";	
					// personal information
					echo "<div style='padding-top:20px;'>
						<div style='background:olive;height:40px;'>
						<p style='padding-top:10px;padding-left:5px;'>Personal Personal Details</p>
						</div>";
					$father_name=one_col_value("user_id","job_user_profile",$user_id,"father_name");
					echo "<br>Father's Name : ".$father_name."<br>";
					$mother_name=one_col_value("user_id","job_user_profile",$user_id,"mother_name");
					echo "Mother's Name : ".$mother_name."<br>";
					$dob=one_col_value("id","job_users",$user_id,"dob");
					echo "Date of Birth : ".$dob."<br>";
					$Gender=one_col_value("id","job_users",$user_id,"gender");
					echo "Gender : ".$Gender."<br>";
					$Marital=one_col_value("id","job_user_profile",$user_id,"marital");
					echo "Marital Status : ".$Marital."<br>";
					$Nationality=one_col_value("id","job_user_profile",$user_id,"nationality");
					echo "Nationality : ".$Nationality."<br>";
					$Permanent=one_col_value("user_id","job_user_profile",$user_id,"present_address");
					echo "Permanent Address : ".$Permanent."<br>";
					$Current=one_col_value("user_id","job_user_profile",$user_id,"permanent_address");
					echo "Current Location : ".$Current."<br>";
						
					// signature
				if(find_image("user_id","signature",$user_id)){
						$image_name="../signature/".$user_id.".png";
						echo "<div style='padding-top:20px;'>
						<div style='background:olive;height:40px;'>
						<p style='padding-top:10px;padding-left:5px;'>Signature</p>
						</div>
						</div><br>";
						echo "<img src='$image_name' class='img-responsive' alt='profile_pic' width='130' height='100'>";
						}
	?>
		