<?php
	require_once "include/config.php";
	function test_input($data)
	{
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	//checks if username already exists
	if (isset($_POST['username_check'])) {
	  	$sql = "SELECT * FROM login WHERE UserName='" . test_input($_POST['uname']) . "'";
	  	$result = mysqli_query($con,$sql);
	  	if (mysqli_num_rows($result) > 0) {
	  	  echo "taken";	
	  	}else{
	  	  echo 'not_taken';
	  	}
	}
	$uname = $pwd = $fname = $lname = $email= "";
	//to create account
	if(isset($_POST['save']))
	{
		$pwd = test_input($_POST['password']);
		$fname = test_input($_POST['fname']);
		$lname = test_input($_POST['lname']);
		$email = test_input($_POST['email']);
		$uname = test_input($_POST['uname']);
		
		if(!empty($uname) && !empty($lname) && !empty($email) && !empty($pwd) && !empty($fname))
		{
			$sql = "INSERT INTO login (FirstName, UserName, Password,LastName,Email) VALUES ('" . $fname . "', '" . $uname . "', '" . password_hash($pwd, PASSWORD_DEFAULT) . "', '" . $lname . "', '" . $email . "')";
			if (mysqli_query($con, $sql)) 
			{
				echo 1;
			}
			else
			{
				echo 0;
			}
		}
	}
	mysqli_close($con);
?>