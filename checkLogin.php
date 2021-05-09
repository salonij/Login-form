<?php

require_once "include/config.php";
function test_input($data)
{
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
//login 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$uname = "";
	$pwd = "";
	$error = "";
	$sql = "";
	$result = "";
	$uname = test_input($_POST['uname']);
	$pwd = test_input($_POST['password']);
	if(!empty($uname) && !empty($pwd))
	{
		$sql = "SELECT * FROM login WHERE UserName='" . $uname . "'";
		$result = mysqli_query($con,$sql);
		if(!empty($result))	
		{
			if(mysqli_num_rows($result) == 1)
			{
				$row = mysqli_fetch_assoc($result);
				if(password_verify($pwd, $row["Password"]))
				{
					session_start();
					$_SESSION["name"] = $row["FirstName"];
					echo 1;
				}
				else
				{
					echo 0;
				}	
			}
			else
			{
				echo 0;
			}	
		}
	}
}
mysqli_close($con);
?> 