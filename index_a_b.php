<?php 
include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';

extract($_POST);
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
    </head>
    
    <body>
            <!-- header-->
					<?php 
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
					
					include 'header_index.php';
					exit;
					}
					//exit();
					}
					else
					{
					include 'header_index.php';
					}
										
					?>
		<!-- ===========top menu bar======================== -->
			<?php include 'menu.php';?>
		<!-- ===========main body======================== -->
		
			<div class="wrapper">
				<div class="main_body">
				<div class="main_body_title">
						<div style="float:left; border-radius:10px 10px 0 0; background:#ED1C24; width:155px; height:24px;">
							<div style="text-align:center; color:#fff; margin-top:5px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;">
							JOB CATEGORY</div>
						</div>
				</div>
				<div class="main_body_full">
					<div class="main_part1">
					<ul>
						<li><a href="">Engineer/Architects</a></li>
						<li><a href="">Accounting/Finance</a></li>
						<li><a href="">Garments/Textile</a></li>
						<li><a href="">Desing/Creative</a></li>
						<li><a href="">Production/O peration</a></li>
						<li><a href="">Travel/Tourism</a></li>
						<li><a href="">Beauty Care</a></li>
						
					</ul>
					</div>
					<div class="main_part2">
						<ul>
						<li><a href="">Engineer/Architects</a></li>
						<li><a href="">Accounting/Finance</a></li>
						<li><a href="">Garments/Textile</a></li>
						<li><a href="">Desing/Creative</a></li>
						<li><a href="">Production/O peration</a></li>
						<li><a href="">Travel/Tourism</a></li>
						<li><a href="">Beauty Care</a></li>
						
					</ul>
					</div>
					<div class="main_part3">
						<ul>
						<li><a href="">Engineer/Architects</a></li>
						<li><a href="">Accounting/Finance</a></li>
						<li><a href="">Garments/Textile</a></li>
						<li><a href="">Desing/Creative</a></li>
						<li><a href="">Production/O peration</a></li>
						<li><a href="">Travel/Tourism</a></li>
						<li><a href="">Beauty Care</a></li>
						
					</ul>
					</div>
				</div>
				</div>		
			</div>
		</div>
		<!-- ===========end main body======================== -->
		<!-- ===========Hot Job======================== -->
		<div class="hot_job_title">
			<div class="wrapper">
				<div class="hot_job_title1">
				<h2>Hot Job</h2>
				</div>
				<!-- start hot list -->
				<!-- 11111111111111-->
				<div class="b">
					<table class="hotjobstxt" width="950" cellspacing="0" border:"0">
						<tbody>
							<tr>
								<td height="74" valign="top" width="312">
									<div style="padding-bottom: 10px; padding-left: 10px; padding-top: 10px; padding-right: 10px;">
										<img src="images/1.jpg" alt="Click Job Title to View Detailsâ€¦" style="border:1px solid #9eb6e6" height="48" align="left" border="0" width="48">
											<div style="margin:0px 0px -5px 62px;">
												<div class="hotjobsCompanyName">
												<strong>Plan International Bangladesh</strong></div>
													<ul class="hotjobsBullet">
														<li>
															<a href="" target="_blank">Grants and Admin 		Manager - PHR Project</a>
														</li>
													</ul>
												</div>
										</div>
									</td>
									<!-- ============= -->
									<td height="74" valign="top" width="326"><div style="padding-bottom: 10px; padding-left: 10px; padding-top: 10px; padding-right: 10px;"><img src="images/2.jpg" alt="Click Job Title to View Detailsâ€¦" style="border:1px solid #9eb6e6" height="48" align="left" border="0" width="48"><div style="margin:0px 0px -5px 62px;"><div class="hotjobsCompanyName"><strong>Citibank, N.A.</strong></div><ul class="hotjobsBullet"><li><a href="" target="_blank">Senior Vice President &amp; Bangladesh Country Compliance Officer</a></li></ul></div></div></td>
									<!-- ============= -->
									<td height="74" valign="top" width="312"><div style="padding-bottom: 10px; padding-left: 10px; padding-top: 10px; padding-right: 10px;"><img src="images/3.jpg" alt="Click Job Title to View Detailsâ€¦" style="border:1px solid #9eb6e6" height="48" align="left" border="0" width="48"><div style="margin:0px 0px -5px 62px;"><div class="hotjobsCompanyName"><strong>Desh Group of Companies</strong></div><ul class="hotjobsBullet"><li><a href="" target="_blank">Asst. Manager - Sales </a></li><li><a href="" target="_blank">Management Trainee - Sales, Service</a></li></ul></div></div>
									<div style="width:312px;" class="conti"><div style="margin:-7px 0px 0px 73px;"><ul class="hotjobsBullet"><div style="padding-top: 10px; padding-bottom: 10px; text-align: center; padding-right:64px;"><img src="home/images/buttons/sort_big_up_active.gif"></div></ul></div></div>
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
								<td height="74" valign="top" width="312"><div style="padding-bottom: 10px; padding-left: 10px; padding-top: 10px; padding-right: 10px;"><img src="images/4.png" alt="Click Job Title to View Detailsâ€¦" style="border:1px solid #9eb6e6" height="48" align="left" border="0" width="48"><div style="margin:0px 0px -5px 62px;"><div class="hotjobsCompanyName"><strong>Kazi Food Industries Ltd.</strong></div><ul class="hotjobsBullet"><li><a href="" target="_blank">Asst. Manager/ Deputy Manager - Key Accounts Sales</a></li></ul></div></div></td>
								
								<td height="74" valign="top" width="326"><div style="padding-bottom: 10px; padding-left: 10px; padding-top: 10px; padding-right: 10px;"><img src="images/5.jpg" alt="Click Job Title to View Detailsâ€¦" style="border:1px solid #9eb6e6" height="48" align="left" border="0" width="48"><div style="margin:0px 0px -5px 62px;"><div class="hotjobsCompanyName"><strong>Practical Action - Bangladesh</strong></div><ul class="hotjobsBullet"><li><a href="" target="_blank">Market Development Field Facilitator</a></li></ul></div></div></td>
								
								<td height="74" valign="top" width="312"><div style="padding-bottom: 10px; padding-left: 10px; padding-top: 10px; padding-right: 10px;"><img src="images/6.jpg" alt="Click Job Title to View Detailsâ€¦" style="border:1px solid #9eb6e6" height="48" align="left" border="0" width="48"><div style="margin:0px 0px -5px 62px;"><div class="hotjobsCompanyName"><strong>Chars Livelihoods Programme (CLP)</strong></div><ul class="hotjobsBullet"><li><a href="" target="_blank">IMLC Officer (Markets M&amp;E)</a></li></ul></div></div></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!--33333333333333333333333333-->
				<div class="b" >
					<table class="hotjobstxt" width="950" cellspacing="0" border:"0">
						<tbody>
							<tr>
								<td height="74" valign="top" width="312"><div style="padding-bottom: 10px; padding-left: 10px; padding-top: 10px; padding-right: 10px;"><img src="images/7.gif" alt="Click Job Title to View Detailsâ€¦" style="border:1px solid #9eb6e6" height="48" align="left" border="0" width="48"><div style="margin:0px 0px -5px 62px;"><div class="hotjobsCompanyName"><strong>Square Food &amp; Beverage Ltd.</strong></div><ul class="hotjobsBullet"><li><a href="" target="_blank">Merchandising Supervisor</a></li></ul></div></div></td>
								
								<td height="74" valign="top" width="326"><div style="padding-bottom: 10px; padding-left: 10px; padding-top: 10px; padding-right: 10px;"><img src="images/8.jpg" alt="Click Job Title to View Detailsâ€¦" style="border:1px solid #9eb6e6" height="48" align="left" border="0" width="48"><div style="margin:0px 0px -5px 62px;"><div class="hotjobsCompanyName"><strong>A Recently Established Feed Mill </strong></div><ul class="hotjobsBullet"><li><a href="" target="_blank">AGM/ General Manager</a></li></ul></div></div></td>
								
								<td height="74" valign="top" width="312"><div style="padding-bottom: 10px; padding-left: 10px; padding-top: 10px; padding-right: 10px;"><img src="images/9.jpg" alt="Click Job Title to View Detailsâ€¦" style="border:1px solid #9eb6e6" height="48" align="left" border="0" width="48"><div style="margin:0px 0px -5px 62px;"><div class="hotjobsCompanyName"><strong>DPS STS School Dhaka</strong></div><ul class="hotjobsBullet"><li><a href="" target="_blank">Executive Assistant</a></li></ul></div></div></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		</form>
		<!-- ===========Hot Job End======================== -->
		<?php include 'footer.php'?>
		<!-- ===========Footer======================== -->
    </body>
</html>