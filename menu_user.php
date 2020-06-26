
		<nav class="navbar navbar-default ">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="j_se_home.php">Home</a></li>
    <li><a href="j_search.php">Job Search</a></li>
      <?php
										/* return name and id from $job_users table*/
									$name=$_SESSION['user_name']; // $name= present user name
									$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id
									$sql="select count(*) as count from $user_notification where `user_id`='$user_id' and `view`='0'";
									$res=mysql_query($sql);
									$result=mysql_fetch_array($res);
									$notification=$result['count'];
									?>
									<li><a href="j_pre_notification.php">Notification<span style="color:red;margin-left:10px;"><?php echo $notification; ?></span></a></li>
    </ul>
  </div>
</nav>