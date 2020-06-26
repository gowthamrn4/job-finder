<?php 
 include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
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
		  include 'another_header.php';
		  }
		  else
		  {
		  include 'header_n.php';
		  }

		?>	

			<div class="container">
					<?php include 'index_menu.php';?>
					<div class="row" style="">
						<div class="col-md-10 col-md-offset-1">	
							<center><p style="color:green;font-size:25px;">About us</p></center>
							<p style="font-size:20px;">Job Loader is leading career management system site in the country.Job Loader allows job seekers to find and apply for jobs for the leading companies of the country, while employers are able to advertise on profession-specific categories to leverage focused advertising in finding qualified candidates for employment. We also aim to provide cost-effective employment advertising to employer companies.</p>
							<p style="font-size:20px;"></p>
						</div>
					</div>
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