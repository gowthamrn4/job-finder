<?php
	include 'global_variables.php';
	include 'config.php';
	include 'service_config.php';
	include 'functions.php';
	$com_name = $_POST['select_post'];
	extract($_POST);
	echo "<br>";
	//echo $com_name;
	$qry="select * from $com_job_post where `com_name`='$com_name' and `post`='0'";
	//echo $qry;
	$res=mysql_query($qry);
	if($res){
			 $result=mysql_fetch_array($res);
			 $job_category=$result["job_cat"];
			 $job_title=$result["job_title"];
			 $com_name=$result["com_name"];
			 $vacancies=$result["vacancies"];
			 $job_des=$result["job_des"];
			 $job_nature=$result["job_nature"];
			 $edu_req=$result["edu_req"];
			 $exp_req=$result["exp_req"];
			 $addition_job_req=$result["addition_job_req"];
			 $edu_req=$result["edu_req"];
			 $job_location=$result["job_location"];
			 $salary=$result["salary"];
			 $other_benifit=$result["other_benifit"];
			 $salary=$result["salary"];
			 $deadline=$result["deadline"];
			 $com_address=$result["com_address"];
			 $cv_system=$result["cv_system"];
			 
			 echo "<fieldset disabled>
						<div class='form-group'>
							<label>Job Category</label>
								<input type='text' name='job_category' class='form-control' value='$job_category' id='job_category'>
						</div>
						</fieldset>
					
						<fieldset disabled>
						<div class='form-group'>
							<label >Job Title</label>
							<input type='text' name='job_title' class='form-control' value='$job_title' id='job_title'>
						</div>
						</fieldset>
						
						<fieldset disabled>
						<div class='form-group'>
							<label>Company Name</label>
							<input type='text' name='com_name' class='form-control' value='$com_name' id='com_name'>
						</div>
						</fieldset>
						
						<fieldset disabled>
						<div class='form-group'>
							<label>No. of Vacancies</label>
							<input type='text' name='vacancies' class='form-control' value='$vacancies' id='vacancies'>
						</div>
						</fieldset>
						
						<div class='form-group'>
							<label>Job Description / Responsibility</label>
							<textarea type='text' rows='2' name='job_des' class='form-control'  id='job_des'>$job_des </textarea>
						</div>
						
						<fieldset disabled>
						<div class='form-group'>
							<label>Job Nature</label>
							<input type='text' name='job_nature' class='form-control' value='$job_nature' id='job_nature'>
						</div>
						</fieldset>
						
						<div class='form-group'>
							<label>Educational Requirements</label>
							<textarea type='text' rows='2' name='edu_req' class='form-control'  id='edu_req'>$edu_req </textarea>
						</div>
						
						<div class='form-group'>
							<label>Experience Requirements</label>
							<textarea type='text' rows='2' name='exp_req' class='form-control'  id='exp_req'>$exp_req </textarea>
						</div>
						
					
						<div class='form-group'>
							<label>Additional Job Requirements</label>
							<textarea type='text' rows='2' name='addition_job_req' class='form-control'  id='addition_job_req'>$addition_job_req </textarea>
						</div>
						
						<div class='form-group'>
							<label>Job Location</label>
							<textarea type='text' rows='2' name='job_location' class='form-control'  id='job_location'>$job_location </textarea>
						</div>
						
						<fieldset disabled>
						<div class='form-group'>
							<label>Salary Range</label>
							<input type='text' name='salary' class='form-control' value='$salary' id='salary'>
						</div>
						</fieldset>
						
						<div class='form-group'>
							<label>Other Benfits</label>
							<textarea type='text' rows='2' name='other_benifit' class='form-control'  id='other_benifit'>$other_benifit </textarea>
						</div>
						
						<fieldset disabled>
						<div class='form-group'>
							<label>Application Deadline</label>
							<input type='text' name='deadline' class='form-control' value='$deadline' id='deadline'>
						</div>
						</fieldset>
						
						<fieldset disabled>
						<div class='form-group'>
							<label>Submit Application Company User Name</label>
							<input type='text' name='cv_system' class='form-control' value='$com_name' id='cv_system'>
						</div>
						</fieldset>
						<div class='form-group'>
							<button type='submit' class='btn btn-primary btn-lg' name='job_post'  value='job_post'>Job Post</button>
							<button type='submit' class='btn btn-primary btn-lg' name='post_cancel'  value='post_cancel'>Post Cancel</button>
						</div>" ;
		}
	else
		echo "Something Wrong,please Try Again";
?>