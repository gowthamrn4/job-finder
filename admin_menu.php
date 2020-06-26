<?php
 /*validation start */
 /* return name and id from $job_users table*/
		$name=$_SESSION['user_name']; // $name= present user name
		$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
		
		$qry="select count(*) as count from com_job_post where `post`='0' and `accepted`=''";
		$res=mysql_query($qry);
	    $result=mysql_fetch_array($res);
	    $notifaction=$result['count'];
		//echo $notifaction;
		// admin report count
		$count=0;
		$qry1="select count(*) as count from com_report where `view`='0'";
		$res1=mysql_query($qry1);
	    $result1=mysql_fetch_array($res1);
	    $report_cnt=$result1['count'];
?>
<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
						<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
								</button>
						</div>
						<div class="collapse navbar-collapse navbar-menubuilder">
							<ul class="nav navbar-nav navbar-center">
									<li><a href="admin_home.php">Home</a></li>
									<li><a href="admin_add.php">Add Admin</a></li>
									<li><a href="admin_edit.php" >Edit Admin</a></li>
									<?php
										if($notifaction=="0")
										echo "<li><a href='admin_post_request.php'>Job Post Request<span style='margin-left:5px;color:red;'>$notifaction</span></a></li>";
										else
											echo "<li><a href='admin_post_request.php'  style='background:green;'>Job Post Request<span style='margin-left:5px;color:red;'>$notifaction</span></a></li>";
									?>
									
									<li><a href="admin_report_answer.php">Report Notification<span style="color:red;margin-left:10px;"><?php echo $report_cnt; ?></span></a></li>
									
							</ul>
						</div>
				</div>
			</div>
		</div>