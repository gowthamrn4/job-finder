<?php 
					if(isset($_SESSION['user_name'])<>"")
					{
						;
					}
					else
					{
						//include 'header.php';
					Header("Location: admin_login.php");
					exit();
					}
				?>	