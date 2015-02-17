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
			<h2>Bread</h2>
			<article>

				<h3>It's an amazing thing!</h3>
				<img src='../Images/Ingredients/FD_1.jpg'>

				<p>Bread is a staple food prepared from a dough of flour and water,
				 usually by baking. Throughout recorded history it has been popular around the world
				  and is one of humanity's oldest foods, having been of importance since the dawn of agriculture.
				  <br>
				There are indefinitely many combinations and proportions of types of flour and other ingredients,
				 and also of radically different traditional recipes and modes of preparation of bread.
				 As a result one finds wide varieties of types, shapes, sizes, and textures of breads in various regions.</p>
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