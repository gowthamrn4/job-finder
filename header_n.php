<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-12 header_back">
						<div class="col-md-6">
							<a href="index.php"><img src="images/logo_5.png" alt="logo picture"/></a>
						</div>
						<div class="col-md-4 col-md-offset-2">
							<div class="logo_right">
									<img src="images/person.png" class="img-circle profile-pic">
									<span style="margin-right: 10px; font-weight: normal;"><?php
								$name=$_SESSION["user_name"];
								$qry="select * from job_users where user_name='$name' limit 1";
								$res=mysql_query($qry);
								if($res){
									if($row =  mysql_fetch_array($res,MYSQL_ASSOC))
										echo "".$row["first_name"];
								}
								 
									
							?>
							</span>
									<a href="logout.php">
									 <button type="button" class="btn btn-default nav-btn">
											<i class="glyphicon glyphicon-off"></i> Sign Out
									</button>
									</a>
							</div>
						</div>
						</div>
					</div>
</div>


      <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<a href="index.php"><img src="images/logo_5.png" alt="logo picture"/></a>
				

							<div class="logo_right">

                        <a href="j_se_home.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="j_search.php">Job Search</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
              
									<img src="images/person.png" class="img-circle profile-pic">
									<span style="margin-right: 10px; font-weight: normal;"><?php
								$name=$_SESSION["user_name"];
								$qry="select * from job_users where user_name='$name' limit 1";
								$res=mysql_query($qry);
								if($res){
									if($row =  mysql_fetch_array($res,MYSQL_ASSOC))
										echo "".$row["first_name"];
								}
								 
									
							?>
							</span>
									<a href="logout.php">
									 <button type="button" class="btn btn-default nav-btn">
											<i class="glyphicon glyphicon-off"></i> Sign Out
									</button>
									</a>
							</div>
						</div>
				
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
