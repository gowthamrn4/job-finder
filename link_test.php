<?php 
					if(isset($_SESSION['user_name'])<>"")
					{
						;
					}
					else
					{
						//include 'header.php';
					Header("Location: index.php");
					exit();
					}
				?>	