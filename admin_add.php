<?php
include 'global_variables.php';
include 'config.php';
include 'service_config.php';
include 'functions.php';
/*validation start */

$error = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['submit']) && $_POST['submit'] == "submit")) {

    extract($_POST);
    $error[] = input_required_validation($first_name, "First Name is required");
    $error[] = input_required_validation($last_name, "Last Name is required");
    $error[] = input_required_validation($email, "Email is required");
    $error[] = input_required_validation($user_name, "User Name is required");
    $error[] = input_required_validation($mobile, "Mobile is required");
    $error[] = input_required_validation($dob, "Date of Birth is required");
    $error[] = input_required_validation($pass, "Password is required");
    $error[] = input_required_validation($con_pass, "Confirm Password is required");


    /* check required fields end */
    /* if(email_validation($email))
        $error[]="Please Enter Valid Email Address"; */
    /* check validation start*/

    /*check sql injection start */

    //$first_name=input_validation($first_name);

    /*check sql injection end */

    /* check validation end*/

    /* unique email address checking start */


    if (check_unique_value($conn, "user_email", $email, $job_users)) {
        $error[] = "Your Email address has been already used, please enter another email address";
    }

    /* unique email address checking end */


    /* unique user name checking start */
    if (check_unique_value($conn, "user_name", $user_name, $job_users)) {
        $error[] = "Your User Name has been already used, please enter another User Name";
    }

    /* unique user name  checking end */

    /* DOB validation strat */

    $dob = date("Y-m-d", strtotime($dob));

    if (!str_validate_date($dob, "YYYY-MM-DD") || $dob == "1970-01-01") {

        $error[] = "Your Birth date is invalid, please enter valid DOB";
    }
    /* DOB validation End*/

    $error = array_filter($error);// this function is for remove null array

    /* save info in DB*/

    if (empty($error)) {

        $qry = "insert into $job_users (`type`,`first_name`,`last_name`,`user_email`,`user_name`,`mobile`,`dob`,`gender`,`user_password`,`status`,`reg_date`,`last_update`) values ('admin','$first_name','$last_name','$email','$user_name','$mobile','$dob','$gender','$pass','Active',now(),now())";


        $ins = mysql_query($qry);
        if ($ins) {
            $succ_msg = "Your account has been created successfully";
            $successMsg = "Your account has been created successfully";
            /*
            ?>
            <script>
            alert("Your account has been created successfully");
            window.location = "index.php";
            </script>
            <?php
            */
        } else {
            $errorMsg = "Something is wrong";
        }
    }

}

$first_name = (isset($first_name)) ? $first_name : "";
$last_name = (isset($last_name)) ? $last_name : "";
$email = (isset($email)) ? $email : "";
$user_name = (isset($user_name)) ? $user_name : "";
$mobile = (isset($mobile)) ? $mobile : "";
$dob = (isset($dob)) ? $dob : "";
$gender = (isset($gender)) ? $gender : "";
$errorMsg = (isset($errorMsg)) ? $errorMsg : "";
$successMsg = (isset($successMsg)) ? $successMsg : "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/edit_profile.css">
    <link rel="stylesheet" href="css/create_account_job_seeker.css">
    <link rel="stylesheet" href="js/datepicker.css">

</head>
<body>
<?php include 'link_test_admin.php'; ?>
<div class="container">
    <!-- ******************** start logo div ******************-->
    <?php include 'header_admin.php'; ?>
    <!-- ******************** end logo div ******************-->
    <br>
    <!-- ********************* menu bar *********************** -->
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="main_body_title">
                <h4>Admin Registration Form</h4>
            </div>

        </div>
    </div>
    <?php
    echo "<div class='row'>";
    echo "<div class='col-md-10 col-md-offset-1'>";
    if (!empty($error)) {


        echo "<br/>We encountered the following errors:";

        echo "<div class='alert alert-danger'>";
        echo "<ui>";
        foreach ($error as $message) {
            echo "<li>" . $message . "</li>";
        }
        echo "</ui></div>";
    } else if ($errorMsg) {
        echo "<div class='alert alert-danger'>";
        echo "<ui>";
        echo "<li>" . $errorMsg . "</li>";
        echo "</ui></div>";
    } else if ($successMsg) {
        echo "<div class='alert alert-success'>";
        echo "<ui>";
        echo "<li>" . $successMsg . "</li>";
        echo "</ui></div>";
    }
    echo "</div></div>";

    if ($successMsg) {
        header('Refresh: 2;url=admin_home.php');
    }

    ?>
    <!-- --------------------- main body ---------------------->

    <form name="submit" id="submit" action="admin_add.php" method="post">
        <!----------------------left side-------------------------------->
        <div class="col-md-4 col-md-offset-1 left_color">
            <div class="form-group">
                <label for="">First Name</label>
                <input placeholder=" First name" type="text" name="first_name" class="form-control" value=""
                       id="first_name">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input placeholder=" Email" type="email" class="form-control" name="email" id="email" value=""
                       title="jalil_cse@yahoo.com">
            </div>
            <div class="form-group">
                <label for="">Mobile</label>
                <input placeholder=" Mobile...." type="text" class="form-control" name="mobile" id="mobile" value=""
                       pattern="[0-9]{11}" title="Example: 01738696439">
            </div>
            <div class="form-group">
                <label for="">Gender</label>
                <select id="gender" name="gender" class="form-control" value="">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input placeholder="password" type="password" class="form-control" name="pass" id="pass"
                       onchange="form.con_pass.pattern = this.value;">
            </div>
        </div>
        <!----------------------Right side-------------------------------->
        <div class="col-md-4 col-md-offset-1 right_color">
            <div class="form-group">
                <label for="">Last Name</label>
                <input placeholder=" Last name" type="text" class="form-control" name="last_name" value=""
                       id="last_name">
            </div>
            <div class="form-group">
                <label for="">User Name</label>
                <input placeholder=" User name" name="user_name" id="user_name" class="form-control" value=""
                       type="text">
            </div>
            <div class="form-group">
                <label for="">Birth of Date</label>
                <div class="input-append date" data-date="" data-date-format="dd-mm-yyyy">
                    <input id="dob" name="dob" class="form-control" type="text" value="">
                    <!--<span class="add-on"><i class="icon-th"></i></span> -->
                </div>


            </div>
            <div class="form-group">
                <label for="">Address</label>
                <textarea class="form-control" rows="1" name="present_address" id="present_address"></textarea>

            </div>
            <div class="form-group">
                <label for="">Confirm Password</label>
                <input placeholder=" confirm password" type="password" class="form-control" name="con_pass"
                       id="con_pass"
                       onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-10 col-md-offset-1">
                <button class="submit" name="submit" value="submit" type="submit">Submit Form</button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
<!-- js file start -->
<script src="bootstrap/js/ie-emulation-modes-warning.js"></script>
<script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script>
    $('#dob').datepicker();
</script>
</body>
</html>