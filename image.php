<?php 
 include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
 // insert image
	if(isset($_POST['save']))
	{
		if(($_FILES['file']['type'] == 'image/gif')
		|| ($_FILES['file']['type'] == 'image/jpeg')
		|| ($_FILES['file']['type'] == 'image/pjpeg')
		&& ($_FILES['file']['size'] < 200000)){
			if($_FILES['file']['error'] > 0)
			{
				echo "return code:" . $_FILES['file']['error'];
			}
			else if(file_exists('upload/'.$_FILES['file']['name']))
			{
				echo $_FILES['file']['name']."already Exit";
			}
			else if(move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$_FILES['file']['name'])){
				$part = $_FILES['file']['name'];
				$sql = mysql_query("insert into image (photo) values('{$part}')");
				if($sql){
					echo "successfully";
				}
				
			}
		}
	}
 // end insert image
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	</head>
	<body>
		<form action="image.php" method="POST" name="upload" id="upload" enctype="multipart/form-data">
			File:
			 <input type="file" name="file">
			 <input type="submit" name="save" id="upload" value="save">
		</form>
		<?php
			$sql=mysql_query("select * from image");
			while($row=mysql_fetch_object($sql)){
				echo "<tr>
					<td>$row->id</td>
					<td><img src='upload/$row->photo'></td>		
				</tr>";
			}
		?>
	</body>
</html>