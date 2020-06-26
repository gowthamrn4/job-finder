<?php
include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
 $id=$_REQUEST['id'];
 $qry = "SELECT * FROM `com_job_post` WHERE id=$id";
 $res= mysql_query($qry);
 $single_data=mysql_fetch_array($res);
  $error=array();
  /* start code for if user agin hit index.php*/
if(isset($_SESSION['user_name'])<>"")
					{
						//include 'header.php';
						$username=$_SESSION['user_name'];
						$qry="select type from $job_users where user_name='$username' and status='Active' limit 1";
							$res=mysql_query($qry);
							$result=mysql_fetch_assoc($res);
							$retrive_type=$result['type'];
						if($retrive_type=="user") 
						{
							header("Location: j_se_home.php");
							exit;
							}
						else if($retrive_type=="company")
						{
							header("Location: com_home.php");
							exit;
							}
						
					}
/* end code for if user agin hit index.php*/
 /* start operation for apply now */
 if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['apply']) && $_POST['apply'] == "apply") )
		{
			if(isset($_SESSION['user_name'])=="")
			{
				?>
					<script>
						alert('you need to first login');
					</script>
				<?php
			}
		}
	/*check user login */
if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['login_index']) && $_POST['login_index'] == "login_index") )
{
	extract($_POST);
	$isLogin=check_user_login($conn,$username,$password,$job_users);
	if($isLogin)
	{
		$_SESSION['user_name']=$username;
		$_SESSION['user_password']=$password;
		
		if(isset($_SESSION['user_name'])<>"")
						{
							//include 'header.php';
							$username=$_SESSION['user_name'];
							$qry="select type from $job_users where user_name='$username' and status='Active' limit 1";
								$res=mysql_query($qry);
								$result=mysql_fetch_assoc($res);
								$retrive_type=$result['type'];
							if($retrive_type=="user") 
							{
								//header("Location: j_se_home.php");
								
								header("Location: job_details.php?id=".$id);
								exit;
							}
							else if($retrive_type=="company")
							{
								header("Location: com_home.php");
								exit;
							}
							
						}
	}
	else
	{
		?>
			<script>
			alert("Username or Password is incorrect!!!");
			</script>
		<?php
	}
}	
 
?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
        <title>JobSite</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/edit_profile.css">
	</head>
	<body>			
		<?php 
		
          if(isset($_SESSION['user_name'])=="")
		  {
		  include 'header_index.php';
		  }
		  else
		  {
		  include 'j_se_home.php';
		  exit;
		  }

		?>	
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1" >
				<div  class="col-md-12 col-md-offset-0" style="background:#EFEEEE;margin-top:10px;">
					<!-- job title-->
					<div class="form-group">
						<label style="color:#1457B5; font-size:20px;"><?php echo $single_data['job_title'];?></label>
					</div>
					<!-- company name-->
					<div class="form-group">
						<label style="color:#68AA47;font-size:20px;"><?php echo $single_data['com_name'];?></label>
					</div>
					<!-- No. of  Vacancies-->
					<div class="form-group">
						<label>No. of  Vacancies</label>
						<p style="margin-left:25px;";><?php echo $single_data['vacancies'];?></p>
					</div>
					<!-- Job Description / Responsibility-->
					<div class="form-group">
						<label>Job Description / Responsibility</label>
						<!-- <ul class="list-inline" style="margin-left:20px;">
						  <li>->iOS platform expert (including Objective-C, Xcode, etc..)</li>
						  <li>->Knowledge of swift; experience using Swift in a commercial application is preferred.</li>
						  <li>->Design patterns they should know MVC; bonus if they know MVVM.</li>
						  <li>->Should now how to write testable code.</li>
						</ul> -->
						<p style="margin-left:25px;";><?php echo $single_data['job_des'];?></p>
					</div>
					<!-- Job Nature-->
					<div class="form-group">
						<label>Job Nature</label>
						<p style="margin-left:25px;";><?php echo $single_data['job_nature'];?></p>
					</div>
					<!-- Educational Requirements-->
					<div class="form-group">
						<label>Educational Requirements</label>
						<p style="margin-left:25px;";><?php echo $single_data['edu_req'];?></p>
					</div>
					<!-- Experience Requirements-->
					<div class="form-group">
						<label>Experience Requirements</label>
						<p style="margin-left:25px;"><?php echo $single_data['exp_req'];?></p>
					</div>
					<!-- Additional Job Requirements-->
					<div class="form-group">
						<label>Additional Job Requirements</label>
						<p style="margin-left:25px;"><?php echo $single_data['addition_job_req'];?></p>
					</div>
					<!-- Job Location-->
					<div class="form-group">
						<label>Job Location</label>
						<p style="margin-left:25px;"><?php echo $single_data['job_location'];?></p>
					</div>
					<!-- Salary Range-->
					<div class="form-group">
						<label>Salary Range</label>
						<p style="margin-left:25px;"><?php echo $single_data['salary'];?></p>
					</div>
					<!-- Other Benefits-->
					<div class="form-group">
						<label>Other Benefits</label>
						<p style="margin-left:25px;" ><?php echo $single_data['other_benifit'];?></p>
					</div>
					<!-- Application Deadline -->
					<div class="form-group">
						<label>Application Deadline </label>
						<p style="margin-left:25px;"><?php echo $single_data['deadline'];?></p>
					</div>
					<!--============ Form start =============-->
					<form  name="apply_now" id="apply_now" action="" method="post">
						<!-- Apply -->
						<div class="form-group col-md-offset-3">
							<button type="submit" class="btn btn-success btn-lg" name="apply"  value="apply" style="margin-left:25px;" onclick="return confirm('Are you sure for applying?');">Apply now</button>
						</div>
					</form>
				</div>
				</div>
			</div>	
			<?php include 'footer.php';?>
		</div>
		<!-- js file start -->
			<script src="bootstrap/js/ie-emulation-modes-warning.js"></script>
			<script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
			
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>