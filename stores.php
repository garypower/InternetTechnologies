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
		<h2>Our Partners stores</h2>

		<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d152515.69312067633!2d-6.251694999999978!3d53.324320099999866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1stesco+in+dublin!5e0!3m2!1sen!2sie!4v1395232160868"></iframe>
		
	
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