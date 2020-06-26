<?php
	include 'global_variables.php';
	include 'config.php';
	include 'service_config.php';
	include 'functions.php';
	// company name;
	$name = $_POST['select_post'];
	//echo $name;
	extract($_POST);
	$sql="select * from $com_report where `com_name`='$name' and `view`='0'";
	$res=mysql_query($sql);
	if($res){
			$result=mysql_fetch_array($res);
			$type=$result["type"];
			$Date=$result["Date"];
			$question=$result["report"];
	// message formate
	echo "Type: ".$type;
	echo "<br>Send by: ".$name;
	echo "<br>Date: ".$Date;
	echo "<div class='form-group'>
			<label >Question</label>
			<br>$question
		</div>";
		//answer
	echo "<div class='form-group'>
			<label >Answer</label>
			<textarea type='text' rows='3' name='question_ans' class='form-control'  id='question_ans'></textarea>
		</div>";
	echo "<div class='form-group'>
			<button type='submit' class='btn btn-primary btn-lg' name='answer'  value='answer'>Answer</button>
			<button type='submit' class='btn btn-primary btn-lg' name='view'  value='view'>View</button>
			<button type='submit' class='btn btn-primary btn-lg' name='cancel'  value='cancel'>Cancel</button>
		</div>";
	}
	else
		echo "Technical Error!!";
?>