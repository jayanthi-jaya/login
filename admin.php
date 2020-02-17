<?php
	session_start();
	if(!isset($_SESSION['admin']))
	{
		header('Location: .');
	}
?>

<!doctype html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php echo $_SESSION['admin'];?>
		<form action="logout.php" method="POST">
			<input type="submit" name="logout" value="Logout">
		</form>
	</body>
</html>