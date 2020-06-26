<?php
error_reporting(0);
include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
 include 'link_test.php'; 
 $uniqu_gen=$_REQUEST['uniqu_gen'];
 $job_user_id=$_REQUEST['job_user_id'];
 
 $sql1="update  $cv_send set `view`='1' where `uniqu_gen`='$uniqu_gen' and `job_user_id`='$job_user_id'";
 $res1=mysql_query($sql1);
 	?>
	<script>
		window.location = "com_cv_bank.php";
	</script>
	<?php
?>