<title>Notification</title>
<?php
	include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
 include 'link_test.php';
  /* return name and id from $job_users table*/
			$name=$_SESSION['user_name']; // $name= present user name
			$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['view']) && $_POST['view'] ="view") )
		{
			extract($_POST);
			$sql="update $user_notification  set `view`='1' where `id`='$id'";
			$res=mysql_query($sql);
			//echo $sql;
		}
	else if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['previous_notification']) && $_POST['previous_notification'] ="previous_notification") )
		{
			?>
				<script>
					window.location = "j_pre_notification.php";
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
		<link rel="stylesheet" type="text/css" href="css/test.css">
		<script>
			function show(){
				var x = document.getElementById("select_com").value;
				//document.getElementById("view_mess").innerHTML=x;
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
							document.getElementById("view_mess").innerHTML=xmlhttp.responseText;
						}
					}
					//document.getElementById("mydiv").innerHTML="jalil";
					xmlhttp.open("POST","select_user_mess.php",true);
					xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					xmlhttp.send(vars);

				
			}
		</script>
		
	</head>
	<body>
		<div class="container">
			<!-- ******************** start logo div ******************-->
				<?php include 'header_n.php';?>
				
			<!-- ******************** end logo div ******************-->
			<br>
			<!-- ********************* menu bar *********************** -->
			<?php include 'menu_user.php';?>
		<!-- --------------------- main body ---------------------->	
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div id="custom_list" class="col-md-3">
						<?php include 'j_se_left.php';?>
				</div>	
				<div class="col-md-9">
					<div class="col-md-3">
					<!-- print data for select notification -->
								<?php
									$unique_names=array();
									$where="where `user_id`='$user_id' and `view`='0'";
									$unique_names=get_all_unique_value($conn,"id",$user_notification,$where);
									/*foreach ($unique_names as $v)
										echo $v."<br>";*/
								?>
						<label for="">Select Notification</label>
									<select id="select_com" name="select_com" class="form-control" value="" onchange="show()">
										<option value="0">Select</option>
										<?php  
											foreach ($unique_names as $v)
											{
											echo "<option value='$v'>Interview</option>";
											}
										 ?>	
									</select>
					<form name="" id="" action="" method="POST">			
						<div class="form-group" style="margin-top:20px;">
							<button class="btn btn-success btn-lg" type="submit" name="previous_notification" value="previous_notification">All Notification</button>
						</div>	
					</form>		
					</div>
					<form name="" id="" action="" method="POST">
					<div class="col-md-9">
					
						<div id="view_mess" style="background:#E7D7E9;font-style: oblique;font-weight: 900;"></div>
					</form>	
					</div>
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
	</body>
</html>