<?php 
 include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
extract($_POST);
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
					else
					{
					
					//include 'header_index.php';
					//exit;
					}
					//exit();
					}
/* end code for if user agin hit index.php*/
$isLogin=0;

/*check user login */
if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['login_index']) && $_POST['login_index'] == "login_index") )
{
	/*check sql injection start */
			
			//$first_name=input_validation($first_name);
			
	/*check sql injection end */

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
						header("Location: j_se_home.php");
						exit;
						}
					else if($retrive_type=="company")
					{
						header("Location: com_home.php");
						exit;
						}
					else
					{
					
					//include 'header_index.php';
					//exit;
					}
					//exit();
					}
					else
					{
					//include 'header_index.php';
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
/*start search*/
else if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['search']) && $_POST['search'] == "search") )
	{
		extract($_POST);
		$dat=array();
		$search_array=array('com_name'=>'com_name','job_title'=>'job_title');
		$qry=search($keywords,$location,$search_array);
		
		if(strlen($qry)>0)
		{
			$d=date('Y-m-d');
			$qry.= " and `deadline`>='$d'";
			$res=mysql_query($qry);
			while($row=mysql_fetch_array($res))
			{
				$dat[]= $row['id'];
			}
			$s=sizeof($dat);
			header("Location: index_search.php?". http_build_query($dat)."&s=".$s);
					exit;	
		}
	}
/*end search*/	
	
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
            <!-- header-->
					
		<?php 
		
          if(isset($_SESSION['user_name'])=="")
		  {
		  include 'header_index.php';
		  }
		  else
		  {
		  include 'header_n.php';
		  }

		?>

            <?php include 'index_menu.php';?>
            <div class="container">
				<div class="row" style="">
				<form  name="index_search" id="index_search" action="index.php" method="post">
					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-12">
							<div class="col-md-6 col-md-offset-3">
								<p style="font-size:25px;">Find the Right Job.Right Now.</p>
							</div>
							<div class="col-md-12">
								<div class="col-md-5">
									<div class="form-group">
										<label>Keywords</label>
										<input type="text" name="keywords" class="form-control" value="" id="keywords" placeholder="Job Title, Keywords, or Company" style="height:50px;">
									</div>
								</div>
								
								<div class="col-md-5">
									<div class="form-group">
										<label>Location</label>
										<input type="text" name="location" class="form-control" value="" id="location" placeholder="Location" style="height:50px;">
									</div>
								</div>
								
								<div class="col-md-2">
									<div class="form-group">
										<label><span>.</span></label>
										<button type="submit" class="btn btn-primary btn-lg" name="search"  value="search" style="height:50px;" >Search Jobs</button>
									</div>
								</div>
								
							</div>
						</div>
					</form>	
					</div>
			</div>
				</div>
			<!-- ==============hot job=============== -->
			<div class="hot_job_title">
			<div class="wrapper">
				<div class="hot_job_title1">
				<h5>Hot Job</h5>
				</div>
				<!-- start hot list -->
				<!-- start hot list -->
				<!-- 11111111111111-->
				<div class="b">
					<table class="hotjobstxt" width="950" cellspacing="0" border:"0">
						<tbody>
							<tr>
								<td height="74" valign="top" width="312">
									<div style="padding-bottom: 10px; padding-left: 10px; padding-top: 10px; padding-right: 10px;">
										<img src="images/4.png" alt="Click Job Title to View Detailsâ€¦" style="border:1px solid #9eb6e6" height="48" align="left" border="0" width="48">
											<div style="margin:0px 0px -5px 62px;">
												<div class="hotjobsCompanyName">
												<strong>murtuza_tech</strong></div>
													<ul class="hotjobsBullet">
														<li>
															<a href="index_job_details.php?id=2" target="_blank">Android developer</a>
														</li>
													</ul>
												</div>
										</div>
									</td>
									<!-- ============= -->
									<td height="74" valign="top" width="326"><div style="padding-bottom: 10px; padding-left: 10px; padding-top: 10px; padding-right: 10px;"><img src="images/5.jpg" alt="Click Job Title to View Detailsâ€¦" style="border:1px solid #9eb6e6" height="48" align="left" border="0" width="48"><div style="margin:0px 0px -5px 62px;"><div class="hotjobsCompanyName"><strong>3m_tech</strong></div><ul class="hotjobsBullet"><li><a href="index_job_details.php?id=21" target="_blank"> Executive - VAT & Tax</a></li></ul></div></div></td>
									<!-- ============= -->
									<td height="74" valign="top" width="312"><div style="padding-bottom: 10px; padding-left: 10px; padding-top: 10px; padding-right: 10px;"><img src="images/5.jpg" alt="Click Job Title to View Detailsâ€¦" style="border:1px solid #9eb6e6" height="48" align="left" border="0" width="48"><div style="margin:0px 0px -5px 62px;"><div class="hotjobsCompanyName"><strong>ABC_Tech</strong></div><ul class="hotjobsBullet"><li><a href="index_job_details.php?id=22" target="_blank">Officer, Admin & Accounts</a></li></ul></div></div>
									<div style="width:312px;" class="conti"><div style="margin:-7px 0px 0px 73px;"><ul class="hotjobsBullet"><div style="padding-top: 10px; padding-bottom: 10px; text-align: center; padding-right:64px;"><img src="images/6.jpg"></div></ul></div></div>
									</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!--222222222222222-->
				<div class="b" >
					<table class="hotjobstxt" width="950" cellspacing="0" border:"0">
						<tbody>
							<tr>
								<td height="74" valign="top" width="312"><div style="padding-bottom: 10px; padding-left: 10px; padding-top: 10px; padding-right: 10px;"><img src="images/4.png" alt="Click Job Title to View Detailsâ€¦" style="border:1px solid #9eb6e6" height="48" align="left" border="0" width="48"><div style="margin:0px 0px -5px 62px;"><div class="hotjobsCompanyName"><strong>Murtuza_tech</strong></div><ul class="hotjobsBullet"><li><a href="index_job_details.php?id=16" target="_blank">PHP Developer</a></li></ul></div></div></td>
								
								<td height="74" valign="top" width="326"><div style="padding-bottom: 10px; padding-left: 10px; padding-top: 10px; padding-right: 10px;"><img src="images/5.jpg" alt="Click Job Title to View Detailsâ€¦" style="border:1px solid #9eb6e6" height="48" align="left" border="0" width="48"><div style="margin:0px 0px -5px 62px;"><div class="hotjobsCompanyName"><strong>ak_tech</strong></div><ul class="hotjobsBullet"><li><a href="index_job_details.php?id=20" target="_blank">Linux System</a></li></ul></div></div></td>
								
								<td height="74" valign="top" width="312"><div style="padding-bottom: 10px; padding-left: 10px; padding-top: 10px; padding-right: 10px;"><img src="images/6.jpg" alt="Click Job Title to View Detailsâ€¦" style="border:1px solid #9eb6e6" height="48" align="left" border="0" width="48"><div style="margin:0px 0px -5px 62px;"><div class="hotjobsCompanyName"><strong>3m_tech</strong></div><ul class="hotjobsBullet"><li><a href="index_job_details.php?id=23" target="_blank">Software Programmer</a></li></ul></div></div></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!--33333333333333333333333333-->
				<div class="b" >
					<table class="hotjobstxt" width="950" cellspacing="0" border:"0">
						<tbody>
							<tr>
								<td height="74" valign="top" width="312"><div style="padding-bottom: 10px; padding-left: 10px; padding-top: 10px; padding-right: 10px;"><img src="images/7.gif" alt="Click Job Title to View Detailsâ€¦" style="border:1px solid #9eb6e6" height="48" align="left" border="0" width="48"><div style="margin:0px 0px -5px 62px;"><div class="hotjobsCompanyName"><strong>apple_tech</strong></div><ul class="hotjobsBullet"><li><a href="index_job_details.php?id=24" target="_blank">iOS Developer</a></li></ul></div></div></td>
								
								<td height="74" valign="top" width="326"><div style="padding-bottom: 10px; padding-left: 10px; padding-top: 10px; padding-right: 10px;"><img src="images/7.gif" alt="Click Job Title to View Detailsâ€¦" style="border:1px solid #9eb6e6" height="48" align="left" border="0" width="48"><div style="margin:0px 0px -5px 62px;"><div class="hotjobsCompanyName"><strong>apple_tech </strong></div><ul class="hotjobsBullet"><li><a href="index_job_details.php?id=11" target="_blank">Senior Web Developer</a></li></ul></div></div></td>
								
								<td height="74" valign="top" width="312"><div style="padding-bottom: 10px; padding-left: 10px; padding-top: 10px; padding-right: 10px;"><img src="images/9.jpg" alt="Click Job Title to View Detailsâ€¦" style="border:1px solid #9eb6e6" height="48" align="left" border="0" width="48"><div style="margin:0px 0px -5px 62px;"><div class="hotjobsCompanyName"><strong>ak_tech</strong></div><ul class="hotjobsBullet"><li><a href="index_job_details.php?id=19" target="_blank">Quality Control Officer</a></li></ul></div></div></td>
							</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="container">
            <br><br><br><br><br><br>
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