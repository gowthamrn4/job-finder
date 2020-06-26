<!-- <ul class="list-unstyled">
	<li><a href="j_se_home.php">Home</a></li>
	<li><a href="j_se_view.php">View Resume</a></li>
	<li><a href="j_se_delete.php">Inactive Resume</a></li>
	<li><a href="j_se_edit_profile.php">Edit Profile</a></li>
	<?php
		/* return name and id from $job_users table*/
	$name=$_SESSION['user_name']; // $name= present user name
	$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
	$sql="select count(*) as count from $user_notification where `user_id`='$user_id' and `view`='0'";
	$res=mysql_query($sql);
	$result=mysql_fetch_array($res);
	$notification=$result['count'];
	?>
	<li><a href="j_pre_notification.php">Notification <span style="color:red;margin-left:20px;"><?php echo $notification; ?></span></a></li>
    <li><a href="j_search.php">Job Search</a></li>
	<li><a href="j_online_application.php">Online Application List</a></li>
	<li><a href="j_se_change_pass.php">Change Password</a></li>
	<li><a href="logout.php">Sign Out</a></li>
</ul> -->

<link rel="stylesheet" type="text/css" href="css/new.css">
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
        <li class="active"><a href="j_se_home.php">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>

        <li class=""><a href="j_se_view.php">View Resume<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-folder-open"></span></a></li>
        <li class=""><a href="j_se_delete.php">Inactive Resume<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-pencil"></span></a></li>
        <li class=""><a href="j_se_edit_profile.php">Edit Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-edit"></span></a></li>

        <?php
		/* return name and id from $job_users table*/
	$name=$_SESSION['user_name']; // $name= present user name
	$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
	$sql="select count(*) as count from $user_notification where `user_id`='$user_id' and `view`='0'";
	$res=mysql_query($sql);
	$result=mysql_fetch_array($res);
	$notification=$result['count'];
	?>
        <li class=""><a href="j_pre_notification.php">Notification &nbsp&nbsp <span style="color: red"><?php echo $notification;?></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon  glyphicon-envelope"></span></a></li>

        <li class=""><a href="j_search.php">Job Search<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-search"></span></a></li> 
          <li class=""><a href="j_online_application.php">Online Application List<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tasks"></span></a></li>    
        <li ><a href="j_se_change_pass.php">Change Password<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>        
        <li ><a href="logout.php">Sign Out<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-off"></span></a></li>
      </ul>
    </div>
  </div>
</nav>