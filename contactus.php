<!doctype html>
<?php include 'Includes/init.php'; ?>
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
		<h2>Contact Us</h2>
	 <article>

		<h4>How to?</h4>

		<P> To contact Garyscollegeproject.net couldn't be easier. We have many different ways all of which or staff 
			reguarly check and maintain.<br>
			<br>
			Email: info@garyscollegeproject.net<br>
			<br>
			Telephone: 1800 789 654<br>
			<br>
			If these are no sufficent enough please try our social media links at the bottom of every page<br>
		</P>
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