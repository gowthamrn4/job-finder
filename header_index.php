<!--<div class="wrapper">-->
<!--				<div class="logo1">-->
<!--                <div class="logo_img">-->
<!--                    <!-- <h1>BDJOB</h1> -->
<!--					<a href="index.php"><img src="images/logo_5.png" alt="logo picture"/></a>-->
<!--                </div>-->
<!--				<div class="banner">-->
<!--				 <form id="login" name="login" action="" method="POST">-->
<!--					<div class="user_name">-->
<!--						<div class="user_name_text">-->
<!--								<input name="username" value="" id="username" placeholder="Username" spellcheck="false" type="text" required="TRUE">-->
<!--						</div>-->
<!--						<div class="user_name_rem">-->
<!--							<input type="checkbox"/>-->
<!--							Remeber Me-->
<!--						</div>-->
<!--					</div>-->
<!---->
<!--					<div class="user_pass">-->
<!--						<div class="user_pass_fill">-->
<!--							<input placeholder="Password" spellcheck="false" type="password" name="password" value="" id="password" required="TRUE">-->
<!--						</div>-->
<!--						<div class="user_pass_text">-->
<!--						<a href="password_recovery.php">Forgot Password</a>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="sign_in">-->
<!--						<div class="sign_button" >-->
<!--							<button type="submit"-->
<!--							name="login_index"  value="login_index"-->
<!--							>Sign in</button>-->
<!--						</div>-->
<!--						<div class="sign_text">-->
<!--							<a href="cr_ac_j_se.php">create Account</a>-->
<!--						</div>-->
<!--					</div>-->
<!--					</form>-->
<!--				</div>-->
<!--            </div>-->
<!--			</div>-->


<nav class="navbar navbar-default">
    <div class="container-fluid">

        <div class="navbar-header">
            <a href="index.php"><img src="images/logo_5.png" alt="logo picture"/></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <br>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="job_tips.php">Job Tips</a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li><a href="contact_information.php">Contact Us</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign-up<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="cr_ac_j_se.php">Job Seeker</a>
                        </li>
                        <li><a href="com_c_acc.php">Recruiters</a>
                        </li>

                    </ul>
                </li>
            </ul>

            <form  id="login"  name="login" action="" method="POST" class="navbar-form navbar-right" role="form">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<!--                    <input id="email" type="text"  name="username"  class="form-control" value="" spellcheck="false"  placeholder="Email Address">-->
                    <input name="username"  value="" class="form-control" id="username" placeholder="Username" spellcheck="false" type="text" required="TRUE">
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<!--                    <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">-->
                    <input placeholder="Password" spellcheck="false" type="password" name="password" value="" id="password" required="TRUE">
                </div>

                <button type="submit"
                        name="login_index"  value="login_index"  class="btn btn-primary">Login</button>

                <br>
                <a href="cr_ac_j_se.php" >Create Account</a>

            </form>
        </div>
    </div>
</nav>





