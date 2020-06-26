<?php
	function check_unique_value($conn,$column_name,$column_value,$table_name)
	{
		$qry="select count(*) as count from $table_name where $column_name='$column_value'";
		$res=mysql_query($qry);
	    $result=mysql_fetch_array($res);
	    $email_count=$result['count'];
			if($email_count>0)
				return TRUE;
			else
				return FALSE;
	}
	
	/*check previous email*/
	function check_previous_email($conn,$column_name,$column_value,$user_name,$table_name)
	{
		$qry="select count(*) as count from $table_name where $column_name='$column_value' and user_name='$user_name'";
		$res=mysql_query($qry);
	    $result=mysql_fetch_array($res);
	    $email_count=$result['count'];
			if($email_count>0)
				return TRUE;
			else
				return FALSE;

	}
	/*check exist_user in table*/
	function exist_user($conn,$column_name,$column_value,$table_name)
	{
		$qry="select count(*) as count from $table_name where $column_name='$column_value'";
		$res=mysql_query($qry);
	    $result=mysql_fetch_array($res);
	    $email_count=$result['count'];
			if($email_count>0)
				return TRUE;
			else
				return FALSE;
	}
/**
 * function return_id($conn,$col_name,$col_value,$table_name) is used for return current user id.
 *
 * @return string id  
 */
	function return_id($conn,$col_name,$col_value,$table_name)
	{
		$qry="select * from $table_name where $col_name='$col_value'";
		$res=mysql_query($qry);
		if($res){
			 $result=mysql_fetch_array($res);
			 return $result['id'];
		}
		else
			return "error";
	}
	
/**
 * function input_validation($input) is used for protection sql injection.
 *
 * @param string $input this is input variable
 * @return string sql injection protected input variable  
 */
function input_validation($input) {

    global $con;
    $input_t = trim($input);
    $input_v = mysql_real_escape_string($con, $input_t);
    return $input_v;
}

/**
 * function input_required_validation($input, $in_name) is used for validation required field
 *
 * @param string $input this is input variable
 * @param string $in_name the field name of this variable which is used for error message generation.
 * @return string error message if validation fails else empty error message  
 */
function input_required_validation($input, $in_name) {
    $err = "";
    if ($input == "" or $input == NULL or empty($input)) {
        $err = "$in_name is required";
    }
    return $err;
}
/*===========email validation==========*/
	function email_validation($email){
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			return true;
		return false;
	}
	
	
	
	
	function check_user_login($conn,$username,$password,$job_users)
	{
	$qry="select user_password from $job_users where user_name='$username' and status='Active' limit 1";
	$res=mysql_query($qry);
	$result=mysql_fetch_assoc($res);
	$retrive_pass=$result['user_password'];
	
	if($password===$retrive_pass)
	{
	return 1;
	}
	else
	{
	return 0;
	}
	}
	
	
/**
 * function str_validate_date($date_str,$date_format) is used for checking valid date.
 *
 * @param string $date_str the date str that needs to be validated
 * @param string $date_format validate date format
 * @return bool if $date_str is valid date then true else false  
 */
function str_validate_date($date_str, $date_format) {

    $date_str = trim($date_str);
    $date_format = trim($date_format);

    if ($date_format == 'YYYY-MM-DD')
        list($year, $month, $day) = explode('-', $date_str);
    if ($date_format == 'YYYY/MM/DD')
        list($year, $month, $day) = explode('/', $date_str);
    if ($date_format == 'YYYY.MM.DD')
        list($year, $month, $day) = explode('.', $date_str);

    if ($date_format == 'DD-MM-YYYY')
        list($day, $month, $year) = explode('-', $date_str);
    if ($date_format == 'DD/MM/YYYY')
        list($day, $month, $year) = explode('/', $date_str);
    if ($date_format == 'DD.MM.YYYY')
        list($day, $month, $year) = explode('.', $date_str);

    if ($date_format == 'MM-DD-YYYY')
        list($month, $day, $year) = explode('-', $date_str);
    if ($date_format == 'MM/DD/YYYY')
        list($month, $day, $year) = explode('/', $date_str);
    if ($date_format == 'MM.DD.YYYY')
        list($month, $day, $year) = explode('.', $date_str);

    if (is_numeric($year) && is_numeric($month) && is_numeric($day))
        return checkdate($month, $day, $year);
    return false;
}


	function get_all_unique_value($conn,$column_name,$table_name,$where)
	{
	$result=array();
		$qry="select $column_name as dis_value from $table_name $where";
		//echo $qry;
		$res=mysql_query($qry);
	    while($row=mysql_fetch_array($res))
		{
		$result[]=$row['dis_value'];
		}
		
		return $result;
	}
	// ========== start distinct value return =================
	function distinct_value($conn,$column_name,$table_name,$where)
	{
	$result=array();
		$qry="SELECT DISTINCT `$column_name`  as dis_value FROM `$table_name` $where";
		$res=mysql_query($qry);
	    while($row=mysql_fetch_array($res))
		{
		$result[]=$row['dis_value'];
		}
		
		return $result;
	}
	// ========== end distinct value return =================
	// return one col value here 
	function one_col_value($conn,$col_name,$table_name,$user_id,$return_col)
	{
		$qry="select * from $table_name where $col_name='$user_id'";
		//echo $qry;
		$res=mysql_query($qry);
		if($res){
			 $result=mysql_fetch_array($res);
			 return $result[$return_col];
		}
		else
			return "0";
	
	}
	// image found 
	function find_image($conn,$column_name,$table_name,$column_value)
	{
		$qry="select count(*) as count from $table_name where $column_name='$column_value'";
		$res=mysql_query($qry);
	    $result=mysql_fetch_array($res);
	    $email_count=$result['count'];
			if($email_count>0)
				return TRUE;
			else
				return FALSE;
	}
	// signature found 
	function find_sing($conn,$table_name,$column_value)
	{
		$qry="select count(*) as count from $table_name where `user_id`='$column_value' and `sign`='1'";
		$res=mysql_query($qry);
	    $result=mysql_fetch_array($res);
	    $email_count=$result['count'];
			if($email_count>0)
				return TRUE;
			else
				return FALSE;
	}
	// admin login
		function admin_login($conn,$user_name,$password,$table){
		$qry="select pass from $table where user_name='$user_name' and status='Active' limit 1";
		$res=mysql_query($qry);
		$result=mysql_fetch_assoc($res);
		$retrive_pass=$result['pass'];
		
		if($password===$retrive_pass)
		{
		return 1;
		}
		else
		{
		return 0;
		}
		}
	// return com name;	
	function return_com($conn,$col_name,$col_value,$table_name)
	{
		$qry="select * from $table_name where $col_name='$col_value'";
		$res=mysql_query($qry);
		if($res){
			 $result=mysql_fetch_array($res);
			 return $result['com_name'];
		}
		else
			return "error";
	}
	// search function
	function search ($search_value1,$search_value2,$search_array)
	{
		if(strlen($search_value1)>0 and strlen($search_value2)>0)
		{
			 $where=" Where ( ";
			 foreach ($search_array as $key=>$value)
			 {
			 if($key=='job_title')
			 $where =$where . " $key like '%$search_value1%' ) AND"; 
			 else
			  $where = $where . " $key like '%$search_value1%' OR"; 
			 }
			 $where = $where . " job_location like '%$search_value2%' OR";

			 $qry="select * from com_job_post $where";
			 $qry=rtrim($qry,"OR");
			 return $qry;
		 }
		else if(strlen($search_value1)>0 and strlen($search_value2)==0)
		{
			$where=" Where ";
			 foreach ($search_array as $key=>$value)
			 {
			 
			  $where = $where . " $key like '%$search_value1%' OR"; 
			 }
			
			$qry="select * from com_job_post $where";
			$qry=rtrim($qry,"OR");
			return $qry;
		}
		else if(strlen($search_value2)>0 and strlen($search_value1)==0)
		{
			$qry="select * from com_job_post where job_location like '%$search_value2%' ";	
			return $qry;
		}
		else
		{
			return "";
		}
			
	}
	//count total 
	function cnt_single_row($conn,$table_name,$where){
		$qry="select count(*) as count from $table_name $where";
		$res=mysql_query($qry);
	    $result=mysql_fetch_array($res);
	    return $result['count'];
	}
	
	// company name
	function company_name($conn,$com_id){
		$qry="select com_name from `job_users` where `id`='$com_id'";
		$res=mysql_query($qry);
		$result=mysql_fetch_assoc($res);
		$retrive_pass=$result['com_name'];
		return $retrive_pass;
	}
	//job title
	function job_title_retrive($conn,$job_id)
	{
		$qry="select job_title from `com_job_post` where `id`='$job_id'";
		$res=mysql_query($qry);
		$result=mysql_fetch_assoc($res);
		$retrive_pass=$result['job_title'];
		return $retrive_pass;
	}
	
?>