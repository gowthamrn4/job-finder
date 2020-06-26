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
  
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['answer']) && $_POST['answer'] == "answer") )
		{
			extract($_POST);
		/*echo "<pre>";
		print_r($_POST);
		exit(); */
			$mes=$select_com.",<br>".$question_ans;
			//echo $mes;
					$qry="insert into $com_nofitication (`com_name`,`send_by`,`message`,`Date`,`view`) values ('$select_com','Answer','$mes',now(),'0')";
					$ins1=mysql_query($qry);
					//echo $qry;
					if($ins1)
					{
					$qry="update $com_report set `view`='1' where `com_name`='$select_com' and `view`='0'";
					$res=mysql_query($qry);
					if($res){
						?>
							<script>
							alert("Anser Successfully");
							</script>
						<?php
						}
						else
						{
						?>
							<script>
							alert("Technical error");
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
		<link rel="stylesheet" type="text/css" href="css/edit_profile.css">
		<link rel="stylesheet" href="css/create_account_job_seeker.css">
		<link rel="stylesheet" href="js/datepicker.css">
		<script>
			function show(){
				var x = document.getElementById("select_com").value;
				//document.getElementById("view_que").innerHTML=x;
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
							document.getElementById("view_que").innerHTML=xmlhttp.responseText;
						}
					}
					//document.getElementById("mydiv").innerHTML="jalil";
					xmlhttp.open("POST","select_view_question.php",true);
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
						<h4>Report or Any query</h4>
					</div>
				</div>
			</div>
		<!-- --------------------- main body ---------------------->	
			 <form  name="admin_answer" id="admin_answer" action="admin_report_answer.php" method="post">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-3">
							<?php 
								$unique_names=array();
								$where="where `view`='0'";
								$unique_names=get_all_unique_value($conn,"com_name","$com_report",$where);
								?>
							<div class="form-group">
								<label>Select Report by users</label>
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
							<div class="col-md-8 col-md-offset-1">
								<div id="view_que"></div>
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