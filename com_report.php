<title>Report</title>
<?php
 include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
	 /*validation start */
 $error=array();
 /* return name and id from $job_users table*/
			$name=$_SESSION['user_name']; // $name= present user name
			//$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
			$com_name=return_com($conn,"user_name",$name,$job_users);
			//echo $name;
			//echo $com_name;
 	if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['send']) && $_POST['send'] == "send") )
		{
		 extract($_POST);
		 if(strlen($question)==0)
		 {
			?>
				<script>
					alert("Insert your query");
				</script>
			<?php
		 }
		 else
		 {
			$sql="insert into $com_report (`com_name`,`report`,`view`,`Date`) values('$com_name','$question','0',now())";
			$res=mysql_query($sql);
			if($res)
			{
				?>
					<script>
					alert("Send Successfull");
					window.location = "com_home.php";
				</script>
					<?php
			}
			else
				{
					?>
					<script>
					alert("Technical Error layout and try again");
				</script>
					<?php
				}
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
		<link rel="stylesheet" type="text/css" href="css/test.css">
		
	</head>
	<body>
		<?php include 'link_test.php';?>
		<div class="container">
			<!-- ******************** start logo div ******************-->
				<?php include 'header_n.php';?>
				
			<!-- ******************** end logo div ******************-->
			<br>
			<!-- *********************  *********************** -->
			
		<!-- --------------------- main body ---------------------->	
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div id="custom_list" class="col-md-3">
					<?php include 'com_left_menu.php';?>
				</div>	
				<div class="col-md-9">
					<div class="row">
						<div class="well well-sm" style="background:black;color:white;">Report or Any query to the admin</div>
						<!-- form start -->
						<form  name="send_report" id="send_report" action="com_report.php" method="post">
								<div class="form-group">
									<label>Question</label>
									<textarea type='text' rows='4' name='question' class='form-control'  id='question' style="background:#F5F5F5;"></textarea>
								</div>	
							<div class='form-group'>
								<button type='submit' class='btn btn-primary btn-lg' name='send'  value='send'>send</button>
								<button type='submit' class='btn btn-primary btn-lg' name='cancel'  value='cancel'>Cancel</button>
							</div>		
						</form>	
					</div>
				</div>
			</div>
		</div>
		
		</div
		<!-- js file start -->
			<script src="bootstrap/js/ie-emulation-modes-warning.js"></script>
			<script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
			
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>