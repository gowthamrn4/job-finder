<div class="logo1">
				<div class="wrapper">
					<div class="logo_img">
						<!-- <h1>BDJOB</h1> -->
						<a href=""><img src="images/logo_5.png" alt="logo picture"/></a>
					</div>
					<!--================banner===============-->
					<div class="sing_out">
						<img src="images/person.png" style="border:0" height="23" align="left" border="0" width="30">
						<span style="margin-right:20px;margin-left:5px;color: blue;margin-top:50px;font:20px;">
							<?php
								$name=$_SESSION["user_name"];
								$qry="select * from job_users where user_name='$name' limit 1";
								$res=mysql_query($qry);
								if($res){
									if($row =  mysql_fetch_array($res,MYSQL_ASSOC))
										echo "".$row["first_name"];
								}
								 
									
							?>
						</span>
						<a href="logout.php">Sign Out</a>
						
						

					</div>
				
				</div>
				
		</div>