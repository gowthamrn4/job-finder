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
<!--					--><?php //include 'index_menu.php';?>
					<div class="row" style="margin-top:20px;">
						<div class="col-md-10 col-md-offset-1">	
							<p style="color:olive;font-size:25px;">Tips for Interview</p>
							<p style="font-size:15px;">
							->Research the company. It is good to become familiar with the organization, the position and the person who may be your boss. Try to match your skills and experience to the position you are seeking.<br>
							->Look good. First impressions are lasting, so make it count. Projecting a confident and professional image is essential. Dress professionally, but don't overdo it with jewelry or excessive perfume or cologne.<br>
							->Know your resume. Be prepared to discuss and defend every aspect of your education and career experience.<br>
							->Look for ways to sell yourself. Seize opportunities to tell the prospective employer how good you are. Be careful not to boast, but speak confidently about your skills.<br>
							->Listen carefully. Pause briefly after each question before you respond to be sure the interviewer has finished speaking. Answer questions directly and concisely. If you don't understand, ask for clarification.<br>
							->Bring your questions. You also are interviewing the company, too. Start with questions about the organization and move to career growth, working conditions, etc. Save benefits and compensation for last.<br>
							->Write down important data. Get the names and titles of the people with whom you interview. Be sure the spelling is correct, as you may need the information later.<br>
							->Obtain resources. Grab an annual report, product information or other data that will give you a better picture of the company and the kind of work you might be doing.<br>
							->Don't become invisible. Following the interview there is a way in which you can be contacted, even if you are out of town.<br>

							</p>
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