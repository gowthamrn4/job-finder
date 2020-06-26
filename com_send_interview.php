<title>Interview</title>
<?php
	include 'global_variables.php';
	include 'config.php';
	include 'service_config.php';
	include 'functions.php';
	//$com_name = $_POST['select_level'];
	//echo "ok";
	//extract($_POST);
	echo "<center><p style='background:olive;font-size:20px;'>Send Message</p></center>
								<div class='form-group'>
									<label>Date</label>
										<div class='input-append date'  data-date='' data-date-format='dd-mm-yyyy'>
										<input id='dob' name='dob' class='form-control' type='text' value='' >
										</div>
								</div>
								<div class='form-group'>
									<label>Time</label>
									<input type='text'  id='time' name='time' value='' class='form-control' placeholder=''>
								</div>
								<div class='form-group'>
									<label >Location</label>
								</div>
								
								<div class='radio'>
								  <label><input type='radio' name='d_location' value='d_location'>Company Default Location</label>
								  <label><input type='radio' name='d_location' value='d_lo' onclick='show1()'>New Location</label>
								</div>
								
								<div id='show1'></div>
								<br><br>
								
								
								<div class='form-group'>
									 <button type='submit' class='btn btn-success btn-lg' name='send'  value='send'>Send</button>
									 <button type='submit' class='btn btn-success btn-lg' name='cancel'  value='cancel'>Cancel</button>
								</div>";
?>