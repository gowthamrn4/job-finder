	<?php
		/* return name and id from $job_users table*/
	$name=$_SESSION['user_name']; // $name= present user name
	$com_name=return_com($conn,"user_name",$name,$job_users);
	$sql="select count(*) as count from $com_nofitication where `com_name`='$com_name' and `view`='0'";
	$res=mysql_query($sql);
	$result=mysql_fetch_array($res);
	$notification=$result['count'];
	// cv bank count
	$count='0';
	$sql1="select count(*) as count from $cv_send where `com_name`='$com_name' and `view`='0' and `continue`='1'";
	
	$res1=mysql_query($sql1);
	$result1=mysql_fetch_array($res1);
	$total_cv=$result1['count'];
	
	?>
	<link rel="stylesheet" type="text/css" href="css/new.css">
						<!-- <ul class="list-unstyled">
							<li><a href="com_home.php">Home</a></li>
							<li><a href="com_job_post.php">Post new Job</a></li>
							<li><a href="com_cv_bank.php">CV Bank<span style="color:red;margin-left:20px;"><?php echo $total_cv; ?></span></a></li>
							<li><a href="com_edit_acc.php">Edit Account info</a></li>
							<li><a href="com_notification2.php">Notification<span style="color:red;margin-left:20px;"><?php echo $notification; ?></span></a></li>
							<li><a href="com_report.php">Report/any query to the admin</a></li>
							<li><a href="com_jobpost_list.php">Job Post List</a></li>
							<li><a href="com_change_pass.php">Change Password</a></li>
							<li><a href="logout.php">Sign Out</a></li>
						</ul> -->


<nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="com_home.php">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>

        <li class=""><a href="com_job_post.php">Post new Job<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-folder-open"></span></a></li>
        <li class=""><a href="com_cv_bank.php">CV Bank  &nbsp&nbsp&nbsp <span style="color: red"><?php echo $total_cv; ?></span></span> <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-pencil"></a></li>
        <li class=""><a href="com_edit_acc.php">Edit Account Info<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-edit"></span></a></li>

     <!--    <?php
		/* return name and id from $job_users table*/
	$name=$_SESSION['user_name']; // $name= present user name
	$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
	$sql="select count(*) as count from $user_notification where `user_id`='$user_id' and `view`='0'";
	$res=mysql_query($sql);
	$result=mysql_fetch_array($res);
	//$notification=$result['count'];
	?> -->
        <li class=""><a href="com_notification2.php">Notification &nbsp&nbsp <span style="color: red"><?php echo $notification;?></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon  glyphicon-envelope"></span></a></li>

        <li class=""><a href="com_report.php">Report/Query to the admin<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-search"></span></a></li> 
          <li class=""><a href="com_jobpost_list.php">Job Post List<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tasks"></span></a></li>    
        <li ><a href="com_change_pass.php">Change Password<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>        
        <li ><a href="logout.php">Sign Out<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-off"></span></a></li>
      </ul>
    </div>
  </div>
</nav>