<!doctype html>
<?php include 'Includes/init.php';
protect_page(); ?>

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
	else
	{
	include 'Includes/loginwidget.php';
	}
	include 'Includes/usernav.php';
	 ?>
<section id="main">
	<h2>Ingredients</h2>
	
		

		<p> Below is a list of all the ingredients used in our recipes. </p>

		<?php

			/* Open a MySQL connection */
			$con = mysqli_connect('mysql1.host.ie', 'poga87_guest', 'guestlogin', 'poga87_CollegeProject'); /*datadbase name*/
			
			if (mysqli_connect_errno())
  				{
				 echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

			/* Create and execute a MySQL query*/
			$sql = "SELECT * FROM Ingrediants";

			$result = $con->query($sql);/* Loop through the returned data and output it*/

			while($row = $result->fetch_assoc()) 
			{
			echo "<a href='".$row['Link']."'>". $row['Name']."</a><br/>";
			}
			
			$result->close();/* Free the memory associated with the query*/
			
			mysqli_close($con);/* Close the connection*/
		?> <!--close php--> 
	
	
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
