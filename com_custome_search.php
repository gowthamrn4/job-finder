<title>Search</title>
<?php
	include 'global_variables.php';
	include 'config.php';
	include 'service_config.php';
	include 'functions.php';
	//$com_name = $_POST['select_level'];
	//echo "ok";
	//extract($_POST);
	echo "<center><p style='background:olive;font-size:20px;'>Filtering</p></center>
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
								<div class='form-group'>
									<label>Experience</label>
									<input type='number' id='experience' name='experience' value='' class='form-control' placeholder=''>
								</div>
								<div class='form-group'>
									<label >B.sc Result</label>
									<input type='number' step='0.01' id='b_result' name='b_result' value='' class='form-control' placeholder=''>
								</div>
								<div class='form-group'>
									<label>HSC Result</label>
									<input type='number' step='0.01' id='h_result' name='h_result' value='' class='form-control' placeholder=''>
								</div>
								<div class='form-group'>
									<label >SSC Result</label>
									<input type='number' step='0.01' id='s_result' name='s_result' value='' class='form-control' placeholder=''>
								</div>
								<div class='form-group'>
									 <button type='submit' class='btn btn-success btn-lg' name='search'  value='search'>Search</button>
									 <button type='submit' class='btn btn-success btn-lg' name='cancel'  value='cancel'>Cancel</button>
								</div>";
?>