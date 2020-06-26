	<!-- 				<?php
					echo "<ul class='list-unstyled'>
							<li><a onclick='show()'>Interview</a></li>
							<li><a href='not_show_agin.php?uniqu_gen=$job_id &job_user_id=$user_id'>Don't Show Again</a></li>
							<li><a href='com_home.php'>Cancel</a></li>
					</ul>";
						
						?> -->



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
        <li class="active"><a onclick="show()">Interview<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-plus"></span></a></li>

        <li class=""><a href='not_show_agin.php?uniqu_gen=$job_id &job_user_id=$user_id' >Don't Show Again<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-trash"></span></a></li>

         <li class="active"><a href='com_home.php' >Cancel<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-road"></span></a></li>

      </ul>
    </div>
  </div>
</nav>
						