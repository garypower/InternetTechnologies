<?php
include 'Includes/init.php';
logged_in_redirect();

if (empty($_POST) === false)
{
	 $username = $_POST['username'];
	 $password = $_POST['password'];

	 if (empty($username) === true || empty($password) === true)
	 	{
	 	$errors[] = 'You need to enter a username and a password';
	 	}
	 if (user_exists($username) === false)
	  	{
	 	$errors[] = 'cant find that username try registering';
	 	}
	 if (user_exists($username) === true)
	 	{
		$login = login($username,$password);
		
		if($login === false)
		 	{
		 		$errors[] = 'That username and password combinaton do not match';
		 	}
		else
			{
			 $_SESSION['user_id'] = user_id_from_username($username);
			 header('Location: http://www.garyscollegeproject.net/index.php');
			 exit();//redirect
	 		}
	 	}

	 output_errors($errors);
}

?>