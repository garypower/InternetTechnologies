<!doctype html>
<?php include 'Includes/init.php';
protect_page(); ?>
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

			<article>

				<?php
				
				recipe_display($choice);
				?>
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