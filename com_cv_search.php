<title>Search</title>
<?php
include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
 include 'link_test.php';
 $id=$_REQUEST['id'];
 //echo $id;
 $error=array();
 $flag=0;
	 
		
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['search']) && $_POST['search'] == "search") )
		{
			$flag=1;
					extract($_POST);
					$where="";
						$s=0;
						 if(trim($cat)<>"")
						 {
						 $s=1;
						 $where=$where ." where  C.cat='$cat' ";
						 }

						 if(trim($experience)<>"")
						 {
						 if($s==1)
						  {
						  $where=$where ." AND  uo.experience>='$experience' ";
						  }
						 else
						  {
						  $where=$where ." where  uo.experience>='$experience' ";
						  $s=1;
						  }
						 }

						 if(trim($b_result)<>"")
						 {
						 if($s==1)
						  {
						  $where=$where ." AND  ei.b_result>='$b_result' ";
						  }
						 else
						  {
						  $where=$where ." where  ei.b_result>='$b_result' ";
						  $s=1;
						  }
						 }

						 if(trim($h_result)<>"")
						 {
						 if($s==1)
						  {
						  $where=$where ." AND  ei.h_result>='$h_result' ";
						  }
						 else
						  {
						  $where=$where ." where  ei.h_result>='$h_result' ";
						  $s=1;
						  }
						 }

						 if(trim($s_result)<>"")
						 {
						 if($s==1)
						  {
						  $where=$where ."AND  ei.s_result>='$s_result' ";
						  }
						 else
						  {
						  $where=$where ." where  ei.s_result>='$s_result' ";
						  $s=1;
						  }
						 }

						$qey2="select u.* from cv_send u left join job_users C on u.job_user_id=C.id left join job_users_others uo on u.job_user_id=uo.user_id
						left join job_edu_info ei on u.job_user_id=ei.user_id $where AND `uniqu_gen`='$id' and `view`='0' and `continue`='1'";
						//echo $qey2;
						
						//exit();
						////////////////////////////////////////
						$Unique_user=array();
						$res=mysql_query($qey2);
						while($row=mysql_fetch_array($res))
						{
						//$result[]=$row['dis_value'];
						$Unique_user[] =$row['job_user_id'];
						}
						$array_data=array();
						foreach($Unique_user as $uni){	
						$qry = "select * from $job_users where `id`='$uni'";
						$result_all = mysql_query($qry);
						if ($result_all) {
							while ($data = mysql_fetch_array($result_all)) {
								$array_data[] = $data;
							}
						}
						}
						
			
								
		}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/test.css">
		<!-- new bootstrap set -->
		<title>Com Job search</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<!-- <link href="js1/bootstrap/dist/css/bootstrap.css" rel="stylesheet"> -->

		<link rel="stylesheet" href="fonts/font-awesome-4/css/font-awesome.min.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<![endif]-->
	  
		<link rel="stylesheet" type="text/css" href="js1/jquery.datatables/bootstrap-adapter/css/datatables.css" />
		<script>
			function show(){
				//var x = document.getElementById("level_edu").value;
				//document.getElementById("show").innerHTML='test';
				 var vars = "select_level="+1;
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
							document.getElementById("show").innerHTML=xmlhttp.responseText;
						}
					}
					//document.getElementById("mydiv").innerHTML="jalil";
					xmlhttp.open("POST","com_custome_search.php",true);
					xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					xmlhttp.send(vars); 

				
			}
		</script>
		
	</head>
	<body>
		<div class="container">
			<!-- ******************** start logo div ******************-->
				<?php include 'header_n.php';?>
				
			<!-- ******************** end logo div ******************-->
			<br>
			<!-- ********************* menu bar *********************** -->
			<!-- <?php include 'menu_com.php';?> -->
		<!-- --------------------- main body ---------------------->	
		<?php
				if($flag==0){
				$Unique_user=array();
				$where=" where `uniqu_gen`='$id' and `view`='0' and `continue`='1'";
				$Unique_user=get_all_unique_value($conn,'job_user_id',$cv_send,$where);
				$qry="select `job_user_id` as dis_value from  $cv_send $where";
				//echo $qry;
				$array_data=array();
				foreach($Unique_user as $uni){	
				$qry = "select * from $job_users where `id`='$uni'";
				$result_all = mysql_query($qry);
				if ($result_all) {
					while ($data = mysql_fetch_array($result_all)) {
						$array_data[] = $data;
					}
				}
				}
				}
				
				
				
		?>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">

				<!-- ============== custome search ================-->
				  <button class="btn btn-primary " type="button"style="margin-bottom:20px;" onclick="show()">Custom Search</button>
				  <a href="com_home.php"><button class="btn btn-primary " type="button"style="margin-bottom:20px;" >Home</button></a>
					<!--form start -->
					<form  name="com_custome" id="com_custome" action="" method="post">	
					<div class="row">
						<div class="col-md-4 col-md-offset-3">
							<div id="show">
							</div>
								
						</div>
					</div>
					</form>
					<!-- ============end custome search  =============-->
				<div class="content">
					<div class="table-responsive">
						<table class="table table-bordered" id="datatable-icons" >
							<thead>
								<tr>
									<th>Name</th>
									<th>Major</th>
									<th>Mobile</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$flag=0;
							foreach ($array_data as $single_user) {
							$ok='1';
								$job_link="com_cv_details.php?id=$single_user[id]&job_id=$id";
                                  //link up
					              echo "<tr>";
									echo "<td><a target='NEW' href='$job_link'>$single_user[first_name]</a></td>";
									echo "<td><a target='NEW' href='$job_link'>$single_user[cat]</a></td>";
									echo "<td><a target='NEW' href='$job_link'>$single_user[mobile]</a></td>";
								echo "</tr>";
									}								
								?>
							</tbody>
						</table>							
					</div>
				</div>
			</div>
		</div>
		
		</div
		<!-- js file start -->
			<script src="bootstrap/js/ie-emulation-modes-warning.js"></script>
			<script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
			
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			
			
			<!-- add new bootstrap -->
			<script src="js1/jquery.js"></script>
	
	<script type="text/javascript" src="js1/behaviour/general.js"></script>
  <script src="js1/jquery.ui/jquery-ui.js" type="text/javascript"></script>
	<script type="text/javascript" src="js1/jquery.datatables/jquery.datatables.min.js"></script>
	<script type="text/javascript" src="js1/jquery.datatables/bootstrap-adapter/js/datatables.js"></script>


    <script type="text/javascript"> 
      $(document).ready(function(){
        //initialize the javascript
       // App.init();
        App.dataTables();
        
       /* Formating function for row details */
        function fnFormatDetails ( oTable, nTr )
        {
            var aData = oTable.fnGetData( nTr );
            var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
            sOut += '<tr><td>Rendering engine:</td><td>'+aData[1]+' '+aData[4]+'</td></tr>';
            sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
            sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
            sOut += '</table>';
             
            return sOut;
        }
       
        /*
         * Insert a 'details' column to the table
         */
        var nCloneTh = document.createElement( 'th' );
        var nCloneTd = document.createElement( 'td' );
        nCloneTd.innerHTML = '<img class="toggle-details" src="images/plus.png" />';
        nCloneTd.className = "center";
         
        $('#datatable2 thead tr').each( function () {
            this.insertBefore( nCloneTh, this.childNodes[0] );
        } );
         
        $('#datatable2 tbody tr').each( function () {
            this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
        } );
         
        /*
         * Initialse DataTables, with no sorting on the 'details' column
         */
        var oTable = $('#datatable2').dataTable( {
            "aoColumnDefs": [
                { "bSortable": false, "aTargets": [ 0 ] }
            ],
            "aaSorting": [[1, 'asc']]
        });
         
        /* Add event listener for opening and closing details
         * Note that the indicator for showing which row is open is not controlled by DataTables,
         * rather it is done here
         */
        $('#datatable2').delegate('tbody td img','click', function () {
            var nTr = $(this).parents('tr')[0];
            if ( oTable.fnIsOpen(nTr) )
            {
                /* This row is already open - close it */
                this.src = "images/plus.png";
                oTable.fnClose( nTr );
            }
            else
            {
                /* Open this row */
                this.src = "images/minus.png";
                oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );
            }
        } );
        
      $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search');
      $('.dataTables_length select').addClass('form-control');    

        //Horizontal Icons dataTable
        $('#datatable-icons').dataTable();
      });
    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>