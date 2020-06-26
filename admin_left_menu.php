<?php
/*validation start */
/* return name and id from $job_users table*/
$name=$_SESSION['user_name']; // $name= present user name
$user_id = return_id($conn,"user_name",$name,$job_users); // return current user id

$qry="select count(*) as count from com_job_post where `post`='0' and `accepted`=''";
$res=mysql_query($qry);
$result=mysql_fetch_array($res);
$notifaction=$result['count'];
//echo $notifaction;
// admin report count
$count=0;
$qry1="select count(*) as count from com_report where `view`='0'";
$res1=mysql_query($qry1);
$result1=mysql_fetch_array($res1);
$report_cnt=$result1['count'];
?>

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
                <li class="active"><a href="admin_home.php">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>

                <li class=""><a href="admin_add.php">Add Admin<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-folder-open"></span></a></li>
                <li class=""><a href="admin_edit.php">Edit Admin<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-pencil"></span></a></li>
                <?php
                if($notifaction=="0")
                    echo "<li><a href='admin_post_request.php'>Job Post Request &nbsp&nbsp<span style='margin-left:5px;color:red; font-style: oblique'>$notifaction</span></a></li>";
                else
                    echo "<li><a href='admin_post_request.php'>Job Post Request &nbsp&nbsp<span style='margin-left:5px;color:red;  font-style: oblique''>$notifaction</span></a></li>";
                ?>
                <li class=""><a href="admin_report_answer.php">Report Notification &nbsp&nbsp <span style="color:red;margin-left:10px;"><?php echo $report_cnt; ?></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-search"></span></a></li>
            </ul>
        </div>
    </div>
</nav>