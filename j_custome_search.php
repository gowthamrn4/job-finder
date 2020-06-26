
<title>Custome Search</title>
<?php
	include 'global_variables.php';
	include 'config.php';
	include 'service_config.php';
	include 'functions.php';
	error_reporting(0);
	
							echo "<div class='row'>
							<div class='col-xs-6 col-md-3'>
								<div class='form-group'>
									<label>Major</label>
									<select id='cat' class='form-control' name='cat'>
										<option value=''> Select</option>";
										foreach ($cat_types as $key=>$val)
										{
										echo "<option  value='$key'>$val</option>";
										}
									echo "</select>
								</div>
							</div>
							
							
							<div class='col-xs-6 col-md-3'>
								
								<div class='form-group'>
									<label>Job Type</label>
									<select id='type' class='form-control' name='type'>
										<option value=''>Select</option>;
										<option value='Full Time'>Full Time</option>;
										<option value='Part Time'>Part Time</option>;
										<option value='Both'>Both</option>;
									</select>
								</div>
							</div>
							
							
							<div class='col-xs-6 col-md-3'>
							
							<div class='form-group'>
									<label>Min Salary</label>
									<input type='number' id='salary' name='salary' value='' class='form-control' placeholder=''>
								</div>
							
							</div>
							
							
							<div class='col-xs-6 col-md-3'>
							
							<div class='form-group'>
									<label>Experience</label>
									<input type='text' id='experience' name='experience' value='' class='form-control' placeholder=''>
								</div>
							
							</div>
							</div>";
							echo "<div class='row'>
									<div class='form-group col-md-4 col-md-offset-5'>
									 <button type='submit' class='btn btn-success' name='search'  value='search'>Search</button>
								</div>
									</div>
							";
							
	
	?>