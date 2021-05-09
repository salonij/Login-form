<?php
include('partials/header.php');
?>
	<title>User Login</title>
	<link href="css/login_page.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid background_img">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<form method="post" action="checkLogin.php" class="form-container set_shadow" id="login_form">
				  <div style="width:50px;height:50px;margin-bottom:20px"><img src="img/images(2).png" style="border-radius:50%;position:absolute;left:45%;" class="login-img" /></div>
				  <div id="message" class="error"></div>
				  <div class="form-group"> 
				    <label for="exampleInputEmail1">User Name: <span class="error" id="uname_error"></span></label> 
				    <input type="text" class="form-control" name="uname">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password: <span class="error" id="pwd_error"></span></label>
				    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
				  </div>
				  <button type="submit" name="Login" value="login" id="btn_submit" class="btn btn-danger btn-block">Submit</button>
				</form>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>
	</div>
	<script src="js/login_validation.js"></script>
</body>
<?php
include('partials/footer.php');
?>