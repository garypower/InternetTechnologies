<!doctype html>
<?php 
include 'Includes/init.php';
protect_page();
 ?>
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
			<h2>Milk</h2>
			<article>

				<h3>Got it!</h3>
				<img src='Images/Ingredients/milk.jpg'>

				<p>Milk is a natural product that mammals produce to feed their young.
				 Because of this, there are no real ingredients in milk.
				  Most milk we purchase today is cow's milk, although goat's milk is also popular.
				  <br>
				Throughout the world, there are more than 6 billion consumers of milk and milk products.
				 Over 750 million people live within dairy farming households.
				  Milk is a key contributor to improving nutrition and food security particularly in developing countries.
				   Improvements in livestock and dairy technology offer significant promise
				    in reducing poverty and malnutrition in the world.</p>
			</article>
			
		</section>
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