<?php 
 include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
 include 'link_test_admin.php';
 
	$error=array();
	extract($_POST);
	/* return name and id from $job_users table*/
		$name=$_SESSION['user_name']; // $name= present user name
  
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['job_post']) && $_POST['job_post'] == "job_post") )
		{
			extract($_POST);
		// ======= start check for ki ki aslo=========
	$sql="update $com_job_post set `post_by`='$name',`accepted`='yes',`continue`='1',`last_update`=now(),`post`='1',`edu_req`='$edu_req',`exp_req`='$exp_req',`addition_job_req`='$addition_job_req',`job_location`='$job_location',`other_benifit`='$other_benifit' where `post`='0' and `com_name`='$select_com'";
			$ins=mysql_query($sql);
			//echo $sql;
			if($ins)
				{
					$mes=$select_com.",<br> your job post request accepted and posted";
					$qry="insert into $com_nofitication (`com_name`,`send_by`,`message`,`Date`,`view`) values ('$select_com','Accepted Post','$mes',now(),'0')";
					$ins1=mysql_query($qry);
					//echo $qry;
					if($ins1)
					{
						?>
							<script>
							alert("Add Job Post Sucessfull");
							window.location = "admin_home.php";
							</script>
						<?php
					}
				}
			else
				echo "problem";
				
			
		}
		else if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['post_cancel']) && $_POST['post_cancel'] == "post_cancel") )
		{
			extract($_POST);
			$mes=$select_com.",<br> your job post request cancel.please check again job post formate";
			$qry="insert into $com_nofitication (`com_name`,`send_by`,`message`,`Date`,`view`) values ('$select_com','Cancel Post','$mes',now(),'0')";
			$ins1=mysql_query($qry);
			if($ins1){
				$qry="update $com_job_post set `accepted`='No' where `post`='0' and `com_name`='$select_com'";
				$res=mysql_query($qry);
			}
			?>
				<script>
				alert("Job Post Cancel and send message the company");
				window.location = "admin_home.php";
				</script>
			<?php
			
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
		<link rel="stylesheet" href="css/create_account_job_seeker.css">
		<link rel="stylesheet" href="js/datepicker.css">
		<script>
			function show(){
				var x = document.getElementById("select_com").value;
				//document.getElementById("view_post").innerHTML=x;
				 var vars = "select_post="+x;
					var xmlhttp;
					if(window.XMLHttpRequest)
					{
					  xmlhttp=new XMLHttpRequest();
					}
					else if(window.XMLHttpRequest)
					{
						xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange=function(){
						if(xmlhttp.readyState==4 && xmlhttp.status==200){
							document.getElementById("view_post").innerHTML=xmlhttp.responseText;
						}
					}
					//document.getElementById("mydiv").innerHTML="jalil";
					xmlhttp.open("POST","select_post_request.php",true);
					xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					xmlhttp.send(vars);

				
			}
		</script>
		
	</head>
	<body>
		<div class="container">
			<!-- ******************** start logo div ******************-->
			<?php include 'header_admin.php';?>
			<!-- ******************** end logo div ******************-->
			<br>
			<!-- ********************* menu bar *********************** -->
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="main_body_title">
						<h4>Job Post Request</h4>
					</div>
				</div>
			</div>
		<!-- --------------------- main body ---------------------->	
			 <form  name="admin_edit1" id="admin_edit1" action="admin_post_request.php" method="post">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-3">
							<?php 
								$unique_names=array();
								$where="where `post`='0' and `accepted`=''";
								$unique_names=get_all_unique_value($conn,"com_name","$com_job_post",$where);
								?>
							<div class="form-group">
								<label for="">Select Request for Job Post</label>
								<select id="select_com" name="select_com" class="form-control" value="" onchange="show()">
									<option value="0">Select</option>
									 <?php  
										foreach ($unique_names as $v)
										{
										echo "<option value='$v'>$v</option>";
										}
									?>				
							   </select>
							  </div> 
							</div>
							<div class="col-md-11 col-md-offset-1">
								<div id="view_post"></div>
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