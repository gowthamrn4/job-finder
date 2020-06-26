<title>Job Loader</title>
<?php 
 include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
 include 'link_test.php';
  $error=array();
  /*image upload start*/
 	if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['Upload']) && $_POST['Upload'] == "Upload") )
		{
			/* return name and id from $job_users table */
			$name=$_SESSION['user_name']; // $name= present user name
			$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
			//echo $_FILES['file']['type'];exit;
			if(($_FILES['file']['type'] == 'image/gif')
				|| ($_FILES['file']['type'] == 'image/jpeg')
				|| ($_FILES['file']['type'] == 'image/png')
				|| ($_FILES['file']['type'] == 'image/jpg')
				|| ($_FILES['file']['type'] == 'image/pjpeg')
				&& ($_FILES['file']['size'] < 200000))
				{
					// rename picture
					$filename=$_FILES['file']['name'];
					//$extension=end(explode(".", $filename));
					$extension="png";
					$newfilename=$user_id.".".$extension;
					// end rename picture
				if($_FILES['file']['error'] > 0)
				{
					echo "return code:" . $_FILES['file']['error'];
				}
				else if(file_exists('profile_pic/'.$newfilename))
				{
				
				rename('profile_pic/'.$newfilename, 'profile_pic/old_'.$newfilename);
				//echo $newfilename."already Exit";
				if(move_uploaded_file($_FILES['file']['tmp_name'],'profile_pic/'.$newfilename)){
					$part = $newfilename;
					
					$sql = mysql_query("update  job_users_image set `photo`='{$part}' where `user_id`='$user_id'");
					if($sql){
						?>
							<script>
								alert("Image Update Sucessfull");
							</script>
						<?php
						}
						else
						echo "no";
					}
				}
				else if(move_uploaded_file($_FILES['file']['tmp_name'],'profile_pic/'.$newfilename))
				{
					$part = $newfilename;
					
					$sql = mysql_query("insert into job_users_image (`user_id`,`photo`) values('$user_id','{$part}')");
					if($sql){
						?>
							<script>
								alert("Image Upload Sucessfull");
							</script>
						<?php
						}
						else
						echo "no";
				
				}
			}
			else
			{
				?>
					<script>
						alert("Select your Picture");
					</script>
				<?php
			}
			
		}
		/*signature upload start*/
 	else if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['sign']) && $_POST['sign'] == "sign") )
		{
			/* return name and id from $job_users table */
			$name=$_SESSION['user_name']; // $name= present user name
			$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
			//echo $_FILES['file1']['type'];exit;
			if(($_FILES['file1']['type'] == 'image/gif')
				|| ($_FILES['file1']['type'] == 'image/jpeg')
				|| ($_FILES['file1']['type'] == 'image/png')
				|| ($_FILES['file']['type'] == 'image/jpg')
				|| ($_FILES['file1']['type'] == 'image/pjpeg')
				&& ($_FILES['file1']['size'] < 200000))
				{
					// rename picture
					$filename=$_FILES['file1']['name'];
					$extension="png";
					$newfilename=$user_id.".".$extension;
					// end rename picture
				if($_FILES['file1']['error'] > 0)
				{
					echo "return code:" . $_FILES['file1']['error'];
				}
				else if(file_exists('signature/'.$newfilename))
				{
				
				rename('signature/'.$newfilename, 'signature/old_'.$newfilename);
				//echo $newfilename."already Exit";
				if(move_uploaded_file($_FILES['file1']['tmp_name'],'signature/'.$newfilename)){
					$part = $newfilename;
					
					$sql = mysql_query("update  $signature set `sign`='{$part}' where `user_id`='$user_id'");
					if($sql){
						?>
							<script>
								alert("Signature Update Sucessfull");
							</script>
						<?php
						}
						else
						echo "no";
					}
				}
				else if(move_uploaded_file($_FILES['file1']['tmp_name'],'signature/'.$newfilename))
				{
					$part = $newfilename;
					
					$sql = mysql_query("insert into $signature (`user_id`,`sign`) values('$user_id','{$part}')");
					//echo $sql;exit;
					if($sql){
						?>
							<script>
								alert("Signature Upload Sucessfull");
							</script>
						<?php
						}
						else
						echo "no";
				
				}
			}
			else
			{
				?>
					<script>
						alert("Select your Signature");
					</script>
				<?php
			}
			
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
		<link rel="stylesheet" type="text/css" href="css/edit_profile.css">
		
	</head>
	<body>
		<div class="container">
			<!-- ******************** start logo div ******************-->
			<?php include 'header_n.php';?>
			<!-- ******************** end logo div ******************-->
			<br>
			<!-- ********************* menu bar *********************** -->
			<!-- <?php include 'menu_user.php';?> -->
		<!-- --------------------- main body ---------------------->	
		<!-- --------------------- main body ---------------------->	
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div id="custom_list" class="col-md-3">
						<?php include 'j_se_left.php';?>
				</div>	
				<div id="custom_right" class="col-md-9">
					<!-- menubar -->
					<div class="row">
						<div id="custom1-bootstrap-menu" class="navbar navbar-default " role="navigation">
							<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
									</button>
							</div>
							<div class="collapse navbar-collapse navbar-menubuilder">
								<ul class="nav navbar-nav navbar-center">
										<li><a href="j_se_edit_profile.php">Personal Details</a></li>
										<li><a href="j_se_edit_edu.php">Education</a></li>
										<li><a href="j_se_edit_other.php">Others</a></li>
										<li  class="active"><a href="">Photograph</a></li>
								</ul>
							</div>
						</div>
					</div>
					
					
					<!--============ Form start =============-->
					<form  name="image_upload" id="image_upload" action="j_se_edit_image.php" method="post" enctype="multipart/form-data">
						<!--<div class="form-group">
							<label for=""><center>Choose an image</center></label>
							<input type="file" name="file">
							<input type="submit" name="Upload" id="Upload" value="Upload" require>
						</div>	-->
						<div id="custom_right" class="col-md-6">
							<div class="well" style="color:white;background-color:#8D9194;"><strong>Photograph<strong></div>
							<?php
								$flag=0;
								if(find_image($conn,"user_id","$job_users_image",$user_id))
								{
								$flag=1;
								echo "<img src='profile_pic/$user_id.png' class='img-responsive' alt='profile_pic' width='130' height='135'>";
								}
										
								?>
							<div class="form-group">
							<label style="font-size:20px;color:olive;">Choose an image</label>
						</div>
						<div class="form-group">
							<input type="file" name="file" style="width:200px;">
							</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg" name="Upload"  value="Upload">
							<?php
							if($flag==1)
							echo "Update Image";
							else
							echo "Upload Image";
							?>
							</button>
							</div>
						</div>
						<!--=================== sing================= -->
						<div id="custom_right" class="col-md-6">
							<div class="well" style="color:white;background-color:#8D9194;"><strong>Signature<strong></div>
							<?php
								$flag1=0;
								if(find_image($conn,"user_id",$signature,$user_id))
								{
								$flag1=1;
								echo "<img src='signature/$user_id.png' class='img-responsive' alt='signature' width='130' height='135'>";
								}
										
								?>
							<div class="form-group">
							<label style="font-size:20px;color:olive;">Choose an image</label>
							</div>
							<div class="form-group">
							<input type="file" name="file1" style="width:200px;">
							</div>
							<div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg" name="sign"  value="sign">
							<?php
							if($flag1==1)
							echo "Update Signature";
							else
							echo "Upload Signature";
							?>
							</button>
							</div>
						</div>
							  
					</form>	  
				</div>
			</div>
		</div>
		</div>
		<div class="container">
		<?php include 'footer.php';?>
		</div>
		<!-- -->
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