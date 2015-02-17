<!doctype html>
<?php include 'Includes/init.php';
 ?>
<html>
<head>

	<?php include 'Includes/Features/headinfo.php'; ?>

</head>

<body>

<div id ="wrapper"> 

	<header> <H1>GarysCollegeProject.net!</h1> </header>

	<?php 
if (logged_in() === true){
include 'Includes/loggedin.php';

}
include 'Includes/usernav.php';
 ?>

	<section id="main">
	<h2>Recipes currently in Database</h2>
	 

		<?php

			/* Open a MySQL connection mysql1.host.ie guestlogin */
			$con = mysqli_connect('mysql1.host.ie','poga87_guest','guestlogin','poga87_CollegeProject'); /*datadbase name*/
			
			if (mysqli_connect_errno())
  				{
				 echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

			/* Create and execute a MySQL query*/
			$sql = "SELECT * FROM Recipes";

			$result = $con->query($sql);/* Loop through the returned data and output it*/

			while($row = $result->fetch_assoc()) 
			{
			echo "<a href='".$row['Link']."'>". $row['Title']."</a><br/>";
			}
			
			$result->close();/* Free the memory associated with the query*/
			
			mysqli_close($con);/* Close the connection*/
		?> <!--print list php--> 


<?php
	if (isset($_GET['success']))
	{
		echo "Recipe deleted sucessfully !!";
	}
	else
	{
			if (empty($_POST) === false AND empty($errors) === true)
			{
			$recipe_data = array('Title' => $_POST['Title']);

			recipe_delete($recipe_data);
			header('Location: deleterecipes.php?success');
			exit();
			}
			else if(empty($errors) === false)
			{
			print_r($errors);
			}
		
	}
?>
<P> Please enter the recipe you wish to delete.</P>
<form  method="post">

			<label for="Title"> Title: </label>
			<input type= "text" name = "Title" id="Title" autocomplete= "off">
<input type="submit" value = "DELETE">
		</form>

		
	
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