<?php 
 include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
?>
<html>
    <head>
        <script>
			function show(){
					var x = document.getElementById("level_edu").value;
					 //document.getElementById("ok").innerHTML =x;
					  var vars = "user_name="+x;
					var xmlhttp;
					if(window.XMLHttpRequest)
					{
					  xmlhttp=new XMLHttpRequest();
					}
					else if(window.XMLHttpRequest)
					{
						xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange=function(){
						if(xmlhttp.readyState==4 && xmlhttp.status==200){
							document.getElementById("ok").innerHTML=xmlhttp.responseText;
						}
					}
					//document.getElementById("mydiv").innerHTML="jalil";
					xmlhttp.open("POST","ajax_print.php",true);
					xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					xmlhttp.send(vars);
				}
        </script>
    </head>
    <body>
	<?php 
		$unique_names=array();
		$where="where status = 'Active'";
		$unique_names=get_all_unique_value($conn,"user_name","job_users",$where);
		
	?>
			<select id="level_edu" name="level_edu" value="" onchange="show()">
				<option value="0">Select</option>
                <?php  
				foreach ($unique_names as $v)
				{
				echo "<option value='$v'>$v</option>";
				}
?>				
				
			</select>
			<div id="ok"></div>
          
    </body>
</html>
