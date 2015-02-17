
<!doctype html>
<?php include 'Includes/init.php'; ?>
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
		<h2>Welcome to my website</h2>
	 <article>
	 	<h3>Disclaimer</h3>
		

	<P>This website is purely for educational purposes only. </P>

	<P>Garyscollegeproject is not responsible for, and expressly disclaims all liability for, damages of any kind arising out of use, reference to, or reliance on any information contained within the site. While the information contained within the site is periodically updated, no guarantee is given that the information provided in this Web site is correct, complete, and up-to-date.</P>

	<P>Although this Web site may include links providing direct access to other Internet resources, including Web sites, Garyscollegeproject is not responsible for the accuracy or content of information contained in these sites. 

	<P>Links from Garyscollegeproject to third-party sites do not constitute an endorsement by Garyscollegeproject of the parties or their products and services. The appearance on the Web site of advertisements and product or service information does not constitute an endorsement by Garyscollegeproject, and Garyscollegeproject has not investigated the claims made by any advertiser. Product information is based solely on material received from suppliers.</P>
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