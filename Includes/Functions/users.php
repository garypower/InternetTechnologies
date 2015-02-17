<?php

function user_exists($username)
{
	$con=mysqli_connect('mysql1.host.ie','poga87_guest','guestlogin','poga87_CollegeProject');

	$username = sanitize($username);

	if($result = $con->query("SELECT COUNT(user_id) FROM USER WHERE username = '$username'")or die($con->error))
	{
		$rows = $result->fetch_assoc();

		if ($rows['COUNT(user_id)'] == '1')
		{
			return true;
		}
		else
		{
			return false;
		}
		
		$result->free();
	}
	mysqli_close($con);
}

function user_owner($username)
{
	$con=mysqli_connect('mysql1.host.ie','poga87_guest','guestlogin','poga87_CollegeProject');

	$username = sanitize($username);

	if($result = $con->query("SELECT owner FROM USER WHERE owner = 1 AND username = '$username'") or die($con->error))
	{
		$rows = $result->fetch_assoc();
		
		if ($rows['owner'] == '1')
		{
			return true;
		}
		else
		{
			return false;
		}

		$result->free();
	}
	
	mysqli_close($con);
}

function user_id_from_username($username)
{
	$con=mysqli_connect('mysql1.host.ie','poga87_guest','guestlogin','poga87_CollegeProject');
	$username = sanitize($username);
	if($result = $con->query("SELECT user_id FROM USER WHERE username = '$username'")or die($con->error))
	{
		$rows = $result->fetch_assoc();

		return ($rows['user_id']);
		$result->free();
	}
	mysqli_close($con);
}

function login($username, $password)
 {
 	$con=mysqli_connect('mysql1.host.ie','poga87_guest','guestlogin','poga87_CollegeProject');

 	$user_id = user_id_from_username($username);

 	$username = sanitize($username);
 	$password = md5($password);
 	if($result = $con->query("SELECT COUNT(user_id) FROM USER WHERE (username = '$username') AND (password = '$password')")or die($con->error))
 	{
 		$rows = $result->fetch_assoc();
		
		if ($rows['COUNT(user_id)'] == '1')
		{
			return true;
		}
		else
		{
			return false;
		}

		$result->free();
 	}
 	mysqli_close($con);
 }

function logged_in()
{
 	return (isset($_SESSION['user_id'])) ? true : false;
}

function user_data($user_id)
{
	$con=mysqli_connect('mysql1.host.ie','poga87_guest','guestlogin','poga87_CollegeProject');
	
	$data = array();
	
	$user_id = (int)$user_id;
	

	$func_num_args = func_num_args();
	$func_get_args = func_get_args();

	if($func_num_args > 1)
	{
		unset($func_get_args[0]);

		$data = mysqli_fetch_assoc($con->query("SELECT * FROM USER Where user_id = $user_id"));
		
		return $data;
	}
	$result->free();
	mysqli_close($con);

}

function register_user($register_data)
{
	array_walk($register_data, 'array_sanitize');
	$register_data['password'] = md5($register_data['password']);

	$fields = '`'. implode('`,`', array_keys($register_data)).'`';
	$data = '\''.implode('\',\'', $register_data).'\'';

	$con=mysqli_connect('mysql1.host.ie','poga87_gary','utarofip','poga87_CollegeProject');

	$con->query("INSERT INTO USER ($fields) VALUES ($data)")or die($con->error);
	$result->free();
	mysqli_close($con);

}
?>