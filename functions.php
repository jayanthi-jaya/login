<?php
	function isValidAdminLogin($username,$password)
	{
		global $db;
		$valid = false;
		$query = 'Select * from admin where username = :username and password = :password';
		$statement = $db->prepare($query);
		$statement->bindValue(':username', $username);
		$statement->bindValue(':password', $password);
		$statement->execute();
		if($statement->rowCount() == 1)
		{
			$valid = true;
		}
		else
		{
			$valid = false;
		}
		return $valid;
	}

	function isValidStudentLogin($username,$password)
	{
		global $db;
		$valid = false;
		$query = 'Select * from student where username = :username and password = :password';
		$statement = $db->prepare($query);
		$statement->bindValue(':username', $username);
		$statement->bindValue(':password', $password);
		$statement->execute();
		if($statement->rowCount() == 1)
		{
			$valid = true;
		}
		else
		{
			$valid = false;
		}
		return $valid;
	}
?>