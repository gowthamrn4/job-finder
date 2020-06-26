<!DOCTYPE html>
<html>
	<head>
		<title>Create Account For Employer</title>
        <link rel="stylesheet" type="text/css" href="css/create_account_employer.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">
	</head>
	<body>
			<?php include 'header_ac.php'?>
			<?php include 'menu.php'?>
		<!--main body desing -->
		<div class="wrapper">
		<div class="a">
			<div class="main_body_title">
				<h3>Employer Registration Form</h3>
			</div>
				<div class="div_title">
				<h4 style="color: #00AA00;">Account Information</h4>
				</div>
				<!-- ===================name and user name ======================= -->
				<div class="row1">	
						<div class="text_l" >
							
							Name
							<span style="font-size:11px; font-weight:bold; color:#FF0000;">*</span>
								
							</div>
							<div class="text_r">
							User Name
							<span style="font-size:11px; font-weight:bold; color:#FF0000;">*</span>
							</div>
				</div>
				<div class="row2">
					<div class="field_l">
						<input class="form-control from-control-login" placeholder="Name" type="text">
						</div>
					<div class="field_r">
						<input class="form-control from-control-login" placeholder="User Name" type="text">
						</div>
				</div>
				<!-- ===================email and mobile ======================= -->
				<div class="row1">
								
						<div class="text_l" >
							
							E-mail
							<span style="font-size:11px; font-weight:bold; color:#FF0000;">*</span>
								
							</div>
							<div class="text_r">
							Contact Phone or Mobile
							<span style="font-size:11px; font-weight:bold; color:#FF0000;">*</span>
							</div>
				</div>
				<div class="row2">
					<div class="field_l">
						<input class="form-control from-control-login" placeholder="E-mail" type="text">
					</div>
					<div class="field_r">
						<input class="form-control from-control-login" placeholder="Mobile...." type="text">
						</div>
				</div>
					<!-- ===================password and confirm password ======================= -->
				<div class="row1">
								
						<div class="text_l" >
							
							Password
							<span style="font-size:11px; font-weight:bold; color:#FF0000;">*</span>
								
							</div>
							<div class="text_r">
							Confirm Password
							<span style="font-size:11px; font-weight:bold; color:#FF0000;">*</span>
							</div>
				</div>
				<div class="row2">
					<div class="field_l">
						<input class="form-control from-control-login" placeholder="Password" type="password">
						</div>
					<div class="field_r">
							<input class="form-control from-control-login" placeholder="Confirm Password" type="password">
						</div>
				</div>
				
				<div class="div_title">
				<h4 style="color: #00AA00;">Company Details</h4>
				</div>
				<!--=============company details===========-->
				<!-- ===================company name and address ======================= -->
				<div class="row1">	
						<div class="text_l" >
							
							Company Name
							<span style="font-size:11px; font-weight:bold; color:#FF0000;">*</span>
								
							</div>
							<div class="text_r">
							Company Address
							<span style="font-size:11px; font-weight:bold; color:#FF0000;">*</span>
							</div>
				</div>
				<div class="row2">
					<div class="field_l">
						<input class="form-control from-control-login" placeholder="Company Name" type="text">
						</div>
					<div class="field_r">
						<input class="form-control from-control-login" placeholder="Company Address" type="text">
						</div>
				</div>
				<!--======================== country and city=====================-->
				<div class="row1">	
						<div class="text_l" >
							
							Country
							<span style="font-size:11px; font-weight:bold; color:#FF0000;">*</span>
								
							</div>
							<div class="text_r">
							City
							<span style="font-size:11px; font-weight:bold; color:#FF0000;">*</span>
							</div>
				</div>
				<div class="row2">
					<div class="field_l">
						<select class="form-control from-control-login">
                    <option value="bd">Bangladesh</option>
                  </select>
						</div>
					<div class="field_r">
						<select class="form-control from-control-login">
							 <option value="dhaka">Dhaka</option>
							 <option value="din">Dinajpur</option>
							 <option value="raj">Rajshahi</option>
							 <option value="chi">Chittagong</option>
							 <option value="khu">khulna</option>
							 
                  </select>
						</div>
				</div>
				<!--========================business type and company url/website=====================-->
				<div class="row1">	
						<div class="text_l" >
							
							Business Type
							<span style="font-size:11px; font-weight:bold; color:#FF0000;">*</span>
								
							</div>
							<div class="text_r">
							Company URL/Website
							<span style="font-size:11px; font-weight:bold; color:#FF0000;">*</span>
							</div>
				</div>
				<div class="row2">
					<div class="field_l">
						<select class="form-control from-control-login">
                    <option value="-1">Select</option>
          		<option value="1">Accounting/Finance</option>
				<option value="26">Agro (Plant/Animal/Fisheries)</option>
				<option value="2">Bank/Non-Bank Fin. Institution</option>
				<option value="21">Beauty Care/ Health &amp; Fitness</option>
				<option value="3">Commercial/Supply Chain</option>
				<option value="16">Customer Support/Call Centre</option>
				<option value="15">Data Entry/Operator/BPO</option>
				<option value="18">Design/Creative</option>
				<option value="25">Driving/Motor Technician</option>
				<option value="4">Education/Training</option>
				<option value="23">Electrician/ Construction/ Repair</option>
				<option value="5">Engineer/Architect</option>
				<option value="6">Garments/Textile</option>
				<option value="7">General Management/Admin</option>
				<option value="20">Hospitality/ Travel/ Tourism</option>
				<option value="17">HR/Org. Development</option>
				<option value="8">IT/Telecommunication</option>
				<option value="22">Law/Legal</option>
				<option value="9">Marketing/Sales</option>
				<option value="10">Media/Advertisement/Event Mgt.</option>
				<option value="11">Medical/Pharma</option>
				<option value="12">NGO/Development</option>
				<option value="19">Production/Operation</option>
				<option value="13">Research/Consultancy</option>
				<option value="14">Secretary/Receptionist</option>
				<option value="24">Security/Support Service</option>

                  </select>
						</div>
					<div class="field_r">
						<input class="form-control from-control-login" placeholder="Company url/website" type="text">
						</div>
				</div>
				<!-- button -->
				<div class="row1">
						<div class="sign_button">
							<button type="submit" id="mybdj" value="True" ><span style="background-color: transparent; font-size: 13px; color: rgb(104, 170, 71); padding: 0px; width:150px; height:30px;white-space: nowrap; float: left; margin-top:20px;font-weight:bold; border-radius: 2px;">Create Account</span></button>
						
						
					</div>
					</div>
					</div>
				</div>
					<!-- ===========Footer======================== -->
			<?php include 'footer.php'?>

	</body>
</html>