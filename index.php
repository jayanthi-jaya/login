<?php
	session_start();
	if(isset($_SESSION['admin']))
	{
		header('Location: admin.php');
	}
	if(isset($_POST['login']))
	{
		require('database.php');
		require('functions.php');
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(isValidAdminLogin($username, $password))
		{
			$_SESSION['admin'] = $username;
			header('Location: admin.php');
		}
		else if(isValidStudentLogin($username, $password))
		{
			$_SESSION['student'] = $username;
			header('Location: student.php');	
		}
		else
		{
			echo "Username and Password mismatch";
		}
	}
?>

<!doctype html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		
		<form action="" method="POST">
			<input type="text" name="username" placeholder="username">
			<input type="password" name="password" placeholder="password">
			<input type="submit" value="login" name="login">
		</form>

	</body>
</html>