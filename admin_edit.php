<?php 
 include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
  $error=array();
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['remove']) && $_POST['remove'] == "remove") )
		{
			extract($_POST);
			$sql="update $job_users set `status`='Inactive' where `user_name`='$admin_edit'";
			//echo $sql;
			$ins=mysql_query($sql);
			if($ins){
				?>
					<script>
						alert("Admin Inactive Sucessfully!!!");
					</script>
				<?php
			}
			else{
			?>
					<script>
						alert("Error!!!");
					</script>
				<?php
			
			}
			
		}
		else if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['add']) && $_POST['add'] == "add") )
		{
			extract($_POST);
			$sql="update $job_users set `status`='Active' where `user_name`='$admin_edit'";
			$ins=mysql_query($sql);
			if($ins){
				?>
					<script>
						alert("Admin Add Sucessfully!!!");
					</script>
				<?php
			}
			else{
			
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
				var x = document.getElementById("admin_edit").value;
				//document.getElementById("show").innerHTML=x;
				 var vars = "select_admin="+x;
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
							document.getElementById("show").innerHTML=xmlhttp.responseText;
						}
					}
					//document.getElementById("mydiv").innerHTML="jalil";
					xmlhttp.open("POST","select_admin.php",true);
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
						<h4>Admin Form Edit</h4>
					</div>
				</div>
			</div>
		<!-- --------------------- main body ---------------------->	
			 <form  name="admin_edit1" id="admin_edit1" action="admin_edit.php" method="post">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-11 col-md-offset-0">
						<?php 
								$unique_names=array();
								$where="where type='admin'";
								$unique_names=get_all_unique_value($conn,"user_name","job_users",$where);
								
						?>
							<div class="form-group">
								<label for="">Select Admin For Edit</label>
								<select id="admin_edit" name="admin_edit" class="form-control" value="" onchange="show()">
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
					</div>	
					


				</div>
					<div id="show"></div>
				
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