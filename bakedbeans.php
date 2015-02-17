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
			<h2>Baked Beans</h2>
			<article>

				<h3>Yum!</h3>
				<img src='Images/Ingredients/bakedbeans.jpg'>

				<p>Most commercial canned baked beans are made from haricot beans,
				 also known as navy beans – a variety of Phaseolus vulgaris in a sauce.
				  In Ireland and the United Kingdom, a tomato and sugar sauce is most commonly used,
				   and they are commonly eaten on toast or as part of a full English breakfast.
				  <br>
				The dish of baked beans is commonly described as having a savory-sweet flavor
				 and a brownish or reddish tinted white bean once baked, stewed, canned or otherwise cooked.</p>
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