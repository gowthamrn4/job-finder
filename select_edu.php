<?php
	include 'global_variables.php';
	include 'config.php';
	include 'service_config.php';
	include 'functions.php';
	$level = $_POST['select_level'];
	echo "<br>";
	//============ edit
	/* return name and id from $job_users table*/
	$name=$_SESSION['user_name']; // $name= present user name
	$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
	$sql="select * from $job_edu_info where `user_id`='$user_id'";
	$res=mysql_query($sql);
	$row=mysql_fetch_array($res);
	
	//============end edit
	if($level=='secondary')
		{
		echo "<div class='form-group'>
			<label>Major</label>
			<select id='major' name='major' class='form-control' value=''>
			<option value='0'>Select</option>
			<option value='Science'>Science</option>
			<option value='Arts'>Arts</option>
			<option value='Commerce'>Commerce</option>
			<option value='Other'>Other</option>
			</select>";
		echo "<div class='form-group'>
			<label>School Name</label>
			<input type='text' name='institute' class='form-control' value='$row[s_institute]' id='institute'>
			</div>";
		echo "<div class='form-group'>
			<label>Result/GPA</label>
			<input type='text' name='result' class='form-control' value='$row[s_result]' id='result'>
			</div>";
		echo "<div class='form-group'>
			<label>Passing Year</label>
			<input type='text' name='year' class='form-control' value='$row[s_year]' id='year'>
			</div>";
		echo "<div class='form-group'>
			<button type='submit' class='btn btn-primary btn-lg' name='Update_secondary'  value='Update_secondary' id='Update'>Update Information</button>
			<button type='submit' name='cancel' class='btn btn-primary btn-lg' value='cancel' id='cancel'>Cancel</button>
			</div>";
		}
		/*higer*/
	else if($level=='higher'){
		echo "<div class='form-group'>
			<label>Major</label>
			<select id='major' name='major' class='form-control' value=''>
			<option value='0'>Select</option>
			<option value='Science'>Science</option>
			<option value='Arts'>Arts</option>
			<option value='Commerce'>Commerce</option>
			<option value='Other'>Other</option>
			</select>";
		echo "<div class='form-group'>
			<label>College Name</label>
			<input type='text' name='institute' class='form-control' value='$row[h_institute]' id='institute'>
			</div>";
		echo "<div class='form-group'>
			<label>Result/GPA</label>
			<input type='text' name='result' class='form-control' value='$row[h_result]' id='result'>
			</div>";
		echo "<div class='form-group'>
			<label>Passing Year</label>
			<input type='text' name='year' class='form-control' value='$row[h_year]' id='year'>
			</div>";
		echo "<div class='form-group'>
			<button type='submit' class='btn btn-primary btn-lg' name='Update_higher'  value='Update_higher' id='Update'>Update Information</button>
			<button type='submit' name='cancel' class='btn btn-primary btn-lg' value='cancel' id='cancel'>Cancel</button>
			</div>";
			
		}
		/*diploma*/
	else if($level=='diploma'){
		echo "<div class='form-group'>
			<label>Major</label>
			<select id='major' name='major' class='form-control' value=''>
			<option value='0'>Select</option>";
			foreach ($cat_types as $key=>$val)
			{
				echo "<option  value='$key'>$val</option>";
			}
		echo "</select>";
		echo "<div class='form-group'>
			<label>Institute Name</label>
			<input type='text' name='institute' class='form-control' value='$row[d_institute]' id='institute'>
			</div>";
		echo "<div class='form-group'>
			<label>Result/CGPA</label>
			<input type='text' name='result' class='form-control' value='$row[d_result]' id='result'>
			</div>";
		echo "<div class='form-group'>
			<label>Passing Year</label>
			<input type='text' name='year' class='form-control' value='$row[d_year]' id='year'>
			</div>";
		echo "<div class='form-group'>
			<button type='submit' class='btn btn-primary btn-lg' name='Update_diploma'  value='Update_diploma' id='Update'>Update Information</button>
			<button type='submit' name='cancel' class='btn btn-primary btn-lg' value='cancel' id='cancel'>Cancel</button>
			</div>";
			
		}
	/*bachelor*/
	else if($level=='bachelor'){
		echo "<div class='form-group'>
			<label>Major</label>
			<select id='major' name='major' class='form-control' value=''>
			<option value='0'>Select</option>";
			foreach ($cat_types as $key=>$val)
			{
				echo "<option  value='$key'>$val</option>";
			}
		echo "</select>";
		echo "<div class='form-group'>
			<label>Institute Name</label>
			<input type='text' name='institute' class='form-control' value='$row[b_institute]' id='institute'>
			</div>";
		echo "<div class='form-group'>
			<label>Result/CGPA</label>
			<input type='text' name='result' class='form-control' value='$row[b_result]' id='result'>
			</div>";
		echo "<div class='form-group'>
			<label>Passing Year</label>
			<input type='text' name='year' class='form-control' value='$row[b_year]' id='year'>
			</div>";
		echo "<div class='form-group'>
			<button type='submit' class='btn btn-primary btn-lg' name='Update_bachelor'  value='Update_bachelor' id='Update'>Update Information</button>
			<button type='submit' name='cancel' class='btn btn-primary btn-lg' value='cancel' id='cancel'>Cancel</button>
			</div>";
			
		}	
		
		else
			{
			echo "<div class='form-group'>
			<label>Major</label>
			<select id='major' name='major' class='form-control' value=''>
			<option value='0'>Select</option>";
			foreach ($cat_types as $key=>$val)
			{
				echo "<option  value='$key'>$val</option>";
			}
		echo "</select>";
		echo "<div class='form-group'>
			<label>Institute Name</label>
			<input type='text' name='institute' class='form-control' value='$row[m_institute]' id='institute'>
			</div>";
		echo "<div class='form-group'>
			<label>Result/CGPA</label>
			<input type='text' name='result' class='form-control' value='$row[m_result]' id='result'>
			</div>";
		echo "<div class='form-group'>
			<label>Passing Year</label>
			<input type='text' name='year' class='form-control' value='$row[m_year]' id='year'>
			</div>";
		echo "<div class='form-group'>
			<button type='submit' class='btn btn-primary btn-lg' name='Update'  value='Update' id='Update'>Update Information</button>
			<button type='submit' name='cancel' class='btn btn-primary btn-lg' value='cancel' id='cancel'>Cancel</button>
			</div>";
			
		}
		
?>