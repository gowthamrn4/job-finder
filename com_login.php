<?php
	 include 'global_variables.php';
	 include 'config.php';
	 include 'service_config.php';
	 include 'functions.php';
	 $error=array();
	 extract($_POST);
		
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['login']) && $_POST['login'] == "login") )
		{
			if(strlen($user_name)==0 || strlen($password)==0)
				{
					?>
						<script>
							alert("Insert user Name or Password");
						</script>
					<?php
				}
				else
					{
						$isLogin=check_user_login($conn,$user_name,$password,$job_users);
						if($isLogin)
						{
							$_SESSION['user_name']=$user_name;
							$_SESSION['user_password']=$password;
							Header("Location: com_home.php");
							/*?>
								<script>
									alert("succressfull!!!");
								</script>
							<?php*/
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
	</head>
	<body>
		<div class="container" style="margin-top:200px;">
		<div class="row">
			<div class="col-md-5 col-md-offset-3" style="background:#BB6474;">
			<form  name="login" id="login" action="com_login.php" method="post">	
				<center><h3>Company Login</h3></center>
				<div class="form-group">
					<label for="">User Name</label>
					<input placeholder="User Name" type="text" name="user_name" class="form-control" value="" id="user_name">
				</div>
				<div class="form-group">
					<label for="">Password</label>
					<input placeholder="Password" type="password" name="password" class="form-control" value="" id="password">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="login"  value="login">Login</button>
					<button type="submit" class="btn btn-primary" name="login"  value="login" style="margin-left:20px;">Crate Account</button>
				</div>
			</form>	
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