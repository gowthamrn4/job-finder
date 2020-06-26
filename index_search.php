<?php
include 'global_variables.php';
 include 'config.php';
 include 'service_config.php';
 include 'functions.php';
 // get array size
 $a= $_GET['s'];
 $array_data=array();
 for($i=0;$i<$a;$i++)
 {
	$qry = "select * from $com_job_post where id=$_GET[$i]";
	$result_all = mysql_query($qry);
	if ($result_all) 
	{
		while ($data = mysql_fetch_array($result_all)) 
		{
			$array_data[] = $data;
		}
	}
 }
 $error=array();
  /* start code for if user agin hit index.php*/
if(isset($_SESSION['user_name'])<>"")
					{
						//include 'header.php';
						$username=$_SESSION['user_name'];
						$qry="select type from $job_users where user_name='$username' and status='Active' limit 1";
							$res=mysql_query($qry);
							$result=mysql_fetch_assoc($res);
							$retrive_type=$result['type'];
						if($retrive_type=="user") 
						{
							header("Location: j_se_home.php");
							exit;
							}
						else if($retrive_type=="company")
						{
							header("Location: com_home.php");
							exit;
							}
						
					}
/* end code for if user agin hit index.php*/
	/*check user login */
if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['login_index']) && $_POST['login_index'] == "login_index") )
{
	extract($_POST);
	$isLogin=check_user_login($conn,$username,$password,$job_users);
	if($isLogin)
	{
		$_SESSION['user_name']=$username;
		$_SESSION['user_password']=$password;
		
		if(isset($_SESSION['user_name'])<>"")
						{
							//include 'header.php';
							$username=$_SESSION['user_name'];
							$qry="select type from $job_users where user_name='$username' and status='Active' limit 1";
								$res=mysql_query($qry);
								$result=mysql_fetch_assoc($res);
								$retrive_type=$result['type'];
							if($retrive_type=="user") 
							{
								header("Location: j_search.php");
								exit;
							}
							else if($retrive_type=="company")
							{
								header("Location: com_home.php");
								exit;
							}
							
						}
	}
	else
	{
		?>
			<script>
			alert("Username or Password is incorrect!!!");
			</script>
		<?php
	}
}	
 
?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
        <title>JobSite</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/edit_profile.css">
		<!-- new bootstrap set -->
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
		
    </head>
	<body>
		<!-- header-->
					
		<?php 
		
          if(isset($_SESSION['user_name'])=="")
		  {
		  include 'header_index.php';
		  }
		  else
		  {
		  include 'j_se_home.php';
		  }

		?>	
		
		<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1" style="padding-top:100px;">
		<!-- ====================== ==============-->
		<div class="content">
					<div class="table-responsive">
						<table class="table table-bordered" id="datatable-icons" >
							<thead>
								<tr>
									<th>Company Name</th>
									<th>Title</th>
									<th>Education</th>
									<th>Experience</th>
									<th>Deadline</th>
								</tr>
							</thead>
							<tbody>
							<?php
							foreach ($array_data as $single_user) {
								$job_link="index_job_details.php?id=$single_user[id]";
                                  
					              echo "<tr>";
									echo "<td><a target='NEW' href='$job_link'>$single_user[com_name]</a></td>";
									echo "<td><a target='NEW' href='$job_link'>$single_user[job_title]</a></td>";
									echo "<td><a target='NEW' href='$job_link'>$single_user[edu_req]</a></td>";
									echo "<td class='center'><a target='NEW' href='$job_link'>$single_user[exp_req]</a></td>";
									echo "<td class='center'><a target='NEW' href='$job_link'>$single_user[deadline]</a></td>";
								echo "</tr>";
				}								
								?>
							</tbody>
						</table>							
					</div>
				</div>
				</div>
				</div>
			<?php include 'footer.php';?>
				
				</div>
			
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