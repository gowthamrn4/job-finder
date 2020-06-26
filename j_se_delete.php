<title>Inactive Account</title>
<?php 
 include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
 /*validation start */
 $error=array();
 /* start operation for secondary */
 if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['delete']) && $_POST['delete'] == "delete") )
		{
		extract($_POST);
			if(strlen($why)>0)
			{
				/* return name and id from $job_users table*/
			$name=$_SESSION['user_name']; // $name= present user name
			$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
				$sql="update $job_users set `status`='Inactive',`remarks`='$why' where `user_name`='$name'";
				$res=mysql_query($sql);
					?>
					<script>
						alert("Account Removed Successfully");
						window.location = "logout.php";
					</script>
				<?php
			}
			else
			{
				?>
					<script>
						alert("insert why you inactive account");
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
	<?php include 'link_test.php';?>
		<div class="container">
			<!-- ******************** start logo div ******************-->
			<?php include 'header_n.php';?>
			<!-- ******************** end logo div ******************-->
			<br>
			<!-- ********************* menu bar *********************** -->
			<!-- <?php include 'menu_user.php';?> -->
		<!-- --------------------- main body ---------------------->	
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div id="custom_list" class="col-md-3">
					<?php include 'j_se_left.php';?>	
				</div>	
				<div id="custom_right" class="col-md-9">
					
					<div>
					<?php
		                echo "<div class='row'>";
			             echo "<div class='col-md-10 col-md-offset-1'>";
                        if (!empty($error)) {
                            echo "<br/>We encountered the following errors:";

                            echo "<div class='alert alert-danger'>";
                            echo "<ui>";
                            foreach ($error as $message) {
                                echo "<li>" . $message . "</li>";
                            }
                            echo "</ui></div>";
                        }
							else
							{
								
							}
                        ?>
						</div>
					<!--============ Form start =============-->
					<form  name="update" id="update" action="j_se_delete.php" method="post">
						<div class="well well-sm">Inactive Account</div>
						<div class="form-group">
							<label for="">Why You Inactive Account</label>
							<input type="text" name="why" class="form-control" value="" id="why">
						</div>
						<div class="form-group" style="margin-top:30px;">
							<button class="btn btn-success btn-lg" type="submit" name="delete" value="delete" onclick="return confirm('Are you sure to inactive Your Account?');">Inactive account</button>
						</div>
					</form>	  
				</div>
			</div>
		</div>
		</div>
		<div class="container">
		<?php include 'footer.php';?>
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