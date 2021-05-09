<?php
	include('partials/header.php');
?>
    <title>Sign Up</title>
	<link href="css/register_page.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid background_img">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12"></div>
			<div class="col-md-6 col-sm-6 col-xs-12 set_shadow">
				<div class="row">
					<div class="col-md-5 col-sm-5 col-xs-12 set_background">
						<div class="alreadyaccount">
							<h5 class="alreadyacc-title">Already have an account?</h5>
							<div class="btn-position">
								<button type="button" class="btn btn-default" id="login-btn">Click here to Login</button>
							</div>
						</div>
					</div>
					<div class="col-md-7 col-sm-7 col-xs-12">
						<form method="post" action="checkRegistration.php" class="form-container" id="signup_form">
						  <h2 class="signup-title">Sign Up</h2>
						  <div id="message" class="error"></div>
						  <div class="row" style="padding-top:5px">
							<div class="form-group col-sm-6">
								<label for="exampleInputEmail1">First Name: <span class="error" id="fname_error"></span></label>
								<input type="text" class="form-control input-controls" name="fname">
							</div>
							<div class="form-group col-sm-6">
								<label for="exampleInputEmail1">Last Name: <span class="error" id="lname_error"></span></label>
								<input type="text" class="form-control input-controls" name="lname">
							</div>
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email address: <span class="error" id="email_error"></span></label></label>
						    <input type="email" class="form-control input-controls" name="email" aria-describedby="emailHelp">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">User Name: <span class="error" id="uname_error"></span><span class="error" id="alreadytaken_error"></span></label>
						    <input type="text" class="form-control input-controls" name="uname" id="checkusername">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password: <span class="error" id="pwd_error"></span></label>
						    <input type="password" class="form-control input-controls" name="password">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Confirm Password: <span class="error" id="confirmpwd_error"></span><span class="error" id="notmatch_error"></span></label>
						    <input type="password" class="form-control input-controls" name="confpwd">
						  </div>
						  <button type="submit" name="Login" value="login" id="btn_submit" class="btn btn-danger btn-block createacc_btn">Create Account</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12"></div>
		</div>
	</div>
	<script src="js/signup_validation.js"></script>
</body>
<?php
include('partials/footer.php');
?>
