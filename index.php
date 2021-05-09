<?php
include('partials/header.php');
include "include/config.php";
session_start();

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}
?>

	<title>Test</title>
	<link href="css/home_page.css" type="text/css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
	<a class="navbar-brand" href="#">
		<img src="img/images.png" width="30" height="30" class="d-inline-block align-top" alt="">
		Company
	</a>

	  <div class="collapse navbar-collapse" style="position:absolute;left:55%" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">About Us</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Careers
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Action</a>
	          <a class="dropdown-item" href="#">Another action</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Something else here</a>
	        </div>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
		<form method='post' action="">
	            <input type="submit" value="Logout" class="btn btn-danger" name="but_logout" style="margin-left:10px;">
	    </form>
	  </div>
	</nav>
	<div class="container-fluid">
		<h1 class="title">Hi <?php echo htmlspecialchars($_SESSION["name"]);?>!</h1>
	</div>
</body>
</html>