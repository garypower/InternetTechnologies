<!doctype html>
<?php include 'Includes/init.php';
protect_page();?>
<html>
<head>

	<?php include 'Includes/Features/headinfo.php'; ?>

</head>

<body>

	<div id ="wrapper"> 

		<header> <h1>GarysCollegeProject.net!</h1> </header>

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

			

				<h2>Our Recipes</h2>

				<P>Tick a box below, to a recipe and press submit </P>

					<form action ="recipesDisplay.php" method="POST">
				<?php
				
				$con = mysqli_connect('mysql1.host.ie','poga87_guest','guestlogin','poga87_CollegeProject') or die($con->error);
				
				$sql = "SELECT * FROM Recipes";
				
				$result = $con->query($sql) or die($con->error);
				
				while($row = $result->fetch_assoc()) 
				{
					
					echo '<input type="radio" name ="Recipe Title" ';
					echo 'value="';
					echo $row['Title'];
					echo '" ';
					echo '/>';
					echo $row['Title'];
					echo "<br />";
				}
				
				$result->close();
				
				mysqli_close($con);
				?>
						<input type="submit" name ="submit" value = "Submit">
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