<?php 
 include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';								
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/edit_profile.css">
		<link rel="stylesheet" href="css/create_account_job_seeker.css">
		<link rel="stylesheet" href="js/datepicker.css">
	</head>
	<body>
		<div class="container">
			<!-- ******************** start logo div ******************-->
			<?php include 'header_n.php';?>
			<!-- ******************** end logo div ******************-->
			<br>
			<!-- ********************* menu bar *********************** -->
			<?php include 'admin_menu.php';?>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="main_body_title">
						<h5>New Job Post</h5>
					</div>
				</div>
			</div>
		<!-- --------------------- main body ---------------------->	
			 <form  name="" id="" action="" method="post">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="form-group">
							<label for="">Job Category</label>
							<select id="cat" class="form-control" name="cat">
								<option value="<?php echo $cat;?>"> Select</option>
									<?php
										foreach ($cat_types as $key=>$val)
										{
										echo "<option  value='$key'>$val</option>";
										}
									?>
							</select>
						</div>
					
						<div class="form-group">
							<label for="">Job Title</label>
							<input type="text" name="job_title" class="form-control" value="" id="job_title">
						</div>
						
						<div class="form-group">
							<label for="">Company Name</label>
							<input type="text" name="com_name" class="form-control" value="" id="com_name">
						</div>
						<div class="form-group">
							<label for="">No. of Vacancies</label>
							<input type="text" name="no_vacancie" class="form-control" value="" id="no_vacancie">
						</div>
						<div class="form-group">
							<label for="">Job Description / Responsibility</label>
							<textarea class="form-control" rows="1" name="job_description"  id="job_description"></textarea>
						</div>
						<div class="form-group">
							<label for="">Job Nature</label>
							<input type="text" name="job_nature" class="form-control" value="" id="job_nature">
						</div>
						<div class="form-group">
							<label for="">Educational Requirements</label>
							<textarea class="form-control" rows="1" name="edu_requirement"  id="edu_requirement"></textarea>
						</div>
						<div class="form-group">
							<label for="">Experience Requirements</label>
							<textarea class="form-control" rows="1" name="exp_requirement"  id="exp_requirement"></textarea>
						</div>
						<div class="form-group">
							<label for="">Additional Job Requirements</label>
							<textarea class="form-control" rows="1" name="job_requirement"  id="job_requirement"></textarea>
						</div>
						<div class="form-group">
							<label for="">Job Location</label>
							<input type="text" name="job_location" class="form-control" value="" id="job_location">
						</div>
						<div class="form-group">
							<label for="">Salary Range</label>
							<input type="text" name="salary" class="form-control" value="" id="salary">
						</div>
						<div class="form-group">
							<label for="">Other Benfits</label>
							<input type="text" name="benfit" class="form-control" value="" id="benfit">
						</div>
						<div class="form-group">
							<label for="">Application Deadline</label>
							<input type="text" name="application_deadline" class="form-control" value="" id="application_deadline">
						</div>
						
							<h3 style="color:olive;">Apply Instruction</h3>
							Send CV <div id="mail"></div> <br/> Click <a href="">here</a> to Email CV form my job loaders Account
							
							<div class="form-group">
							<label for="">Company Address</label>
							<input type="text" name="com_address" class="form-control" value="" id="com_address">
						</div>
							
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg" name="job_post"  value="job_post">Job Post</button>
							<button type="submit" class="btn btn-primary btn-lg" name="post_cancel"  value="post_cancel">Post Cancel</button>
						</div>
					</div>	
				</div>
			</form>	
	  </div>
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