<!doctype html>

<?php include 'Includes/init.php'; 
logged_in_redirect();
?>

<html>
<head>
	<?php include 'Includes/Features/headinfo.php'; ?>

</head>

<body>

<div id ="wrapper"> 

<header><h1>GarysCollegeProject.net!</h1></header>

<?php 
if (logged_in() === true)
{
include 'Includes/loggedin.php';
}
else
{
include 'Includes/loginwidget.php';
}
include 'Includes/usernav.php';
 ?>

<?php 

if (empty($_POST) === false)
{
	if ((empty($_POST['username']) == true) OR (empty($_POST['password']) == true))
		{
			$errors[] = 'Both fields are required to register';
		}
	

	if ((empty($errors)) === true) //no errors
	{
	
		if((preg_match("/\\s/",$_POST['username'])) == true)
			{
				$errors[] = 'No spaces are allowed in a username';
			}
		if (user_exists($_POST['username']) == 2)
			{
				$errors[] = 'Sorry that username is taken';
			}
		if (strlen($_POST['password']) > 51)
			{
				$errors[] = 'Sorry that password is to long';
			}
	}
}
?> 

	<section id="main">



		<article>

			<h1> Register To Gary's College Project.net</h1>
<?php
if (isset($_GET['success']))
{
	echo "You have been registered sucessfully";
}
else
{
	if (empty($_POST) === false AND empty($errors) === true)
	{
	$register_data = array('username' => $_POST['username'],'password'=> $_POST['password'] );
	register_user($register_data);
	header('Location: register.php?success');
	exit();


	}
	else if(empty($errors) === false)
	{
	output_errors($errors);
	}

?>

		<form action ="" method="post">
			<label for="username"> username: </label>
			<input type= "text" name = "username" id="username" autocomplete= "off"><br>

			<label for="password"> password: </label>
			<input type= "password" name = "password" id="password" autocomplete= "off"><br>
			<input type="submit" value = "Register">
		</form>

<?php } ?>

			
</article>
	
</section >

<script>
	$ ('.handle').on('click', function (){
	$ ('nav ul').toggleClass('showing');
	});
</script>

<?php include 'Includes/Features/ads.php'; ?>

<?php include 'Includes/Features/footer.php'; ?>
</div> <!-- this is the wrapper ending-->

</body>

</html>