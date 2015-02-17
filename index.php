<!doctype html>

<?php include 'Includes/init.php'; ?>

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



	<section id="main">
			<h2>Welcome  To Gary's College Project.net</h2>
		<article>

			<h3>For your consideration</h3>

			<P> Before chefs become chefs, they learn cooking basics: how to use a knife, how to cut up a vegetable, how to mind a kitchen, and how to use appliances.<br>

				This website offers it users instructions on cooking access to recipes and ingrediants that will change your eating habbits forever. <br>
			</P>


			<img src="Images/studentcook_1974870c.jpg" alt="Students Cooking"/>



			<P> 
				Please follow the register link at the top of the page and the learning can begin. 
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