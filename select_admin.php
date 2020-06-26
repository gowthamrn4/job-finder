<?php
	include 'global_variables.php';
	include 'config.php';
	include 'service_config.php';
	include 'functions.php';
	$level = $_POST['select_admin'];
	echo "<br>";
	
	/*ok*/
	/*echo  "<div class='form-group'>
	<label id='institute_t'></label>
	<input type='text' name='institute' class='form-control' value='' id='institute'>
	</div>";*/
			/*edit */
	/*	echo "<div class='col-md-4 col-md-offset-1 left_color'>
					<div class='form-group'>
						<label for=''>First Name</label>
						<input type='text' name='first_name' class='form-control' value='' id='first_name' >
					</div>
					<div class='form-group'>
						<label for=''>Email</label>
						<input  type='email' class='form-control' name='email' id='email' value='' title='a@yahoo.com'>
					</div>
					<div class='form-group'>
						<label for=''>Mobile</label>
						<input  type='text' class='form-control' name='mobile' id='mobile' value='' pattern='[0-9]{11}' title='Example: 01xxxxxxxxx'>
					</div>
					<div class='form-group'>
						<label for=''>Gender</label>
						<select id='gender' name='gender' class='form-control' value=''>
                    <option value='Male'>Male</option>
                    <option value='Female'>Female</option>
                  </select>
					</div>
					<div class='form-group'>
						<label for=''>Password</label>
						<input  type='password'  class='form-control' name='pass' id='pass'
						 onchange='form.con_pass.pattern = this.value;'>
					</div>
				</div> "; */
				/*left side*/
	/*	echo	"<div class='col-md-4 col-md-offset-1 right_color'>
					<div class='form-group'>
						<label for=''>Last Name</label>
						<input type='text' class='form-control' name='last_name' value='' id='last_name'>
					</div>
					<div class='form-group'>
						<label for=''>User Name</label>
						<input name='user_name' id='user_name' class='form-control' value='' type='text'>
					</div>
					
					<div class='form-group'>
							<label for=''>Birth of Date</label>
							<div class='input-append date'  data-date='' data-date-format='dd-mm-yyyy'>
								  <input id='dob' name='dob' class='form-control' type='text' value='' >
							</div>
						</div>
						
					<div class='form-group'>
						<label for=''>Address</label>
						<textarea class='form-control' rows='1' name='present_address' id='present_address'></textarea>
						
					</div>
					<div class='form-group'>
						<label for=''>Confirm Password</label>
						<input type='password' class='form-control'   name='con_pass' id='con_pass' onchange='this.setCustomValidity(this.validity.patternMismatch ? this.title : '');'>
					</div>
				</div>";*/
		echo	"<div class='form-group'>
					<div class='col-md-10 col-md-offset-1'>
					  <button class='submit' name='remove'  value='remove' type='submit'>Remove Admin</button>
					  <button class='submit' name='add'  value='add' type='submit'>Add Admin</button>
					</div>
				</div>";	
?>