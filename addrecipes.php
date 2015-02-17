<!doctype html>
<?php 
include 'Includes/init.php'; 
hidden_pages_protect($user_data['username']);
?>

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

<?php
	if (empty($_POST) === false) //if post is not empty
		{	
		if ((empty($errors)) === true) //no errors
			{
			if (empty($_POST['Title']) == true)
				{
				$errors[] = 'A title is required to register a recipe';
				}
			}
		}
?>

<section id="main">
<h2> Add recipes to the Database</h2>
<article>

<h5>Guidelines</h5>

<p>Dear Administrator or owner of Garyscollegeproject.net <br>
 This page has unprotected access to the database. Do not insert anything you are unsure about.<br>
</p>



<?php
if (isset($_GET['success']))
	{
		echo "Recipe Added sucessfully";
	}

else
	{
			
?>
<form method="post">

			<label for="Title"> Title: </label>
			<input type= "text" name = "Title" id="Title" autocomplete= "off"><br>

			<label for="Ingrediant1"> Ingrediant 1: </label>
			<input type= "text" name = "Ingrediant1" id="Ingrediant1" autocomplete= "off"><br>
			<label for="Ingrediant2"> Ingrediant 2: </label>
			<input type= "text" name = "Ingrediant2" id="Ingrediant2" autocomplete= "off"><br>
			<label for="Ingrediant3"> Ingrediant 3: </label>
			<input type= "text" name = "Ingrediant3" id="Ingrediant3" autocomplete= "off"><br>
			<label for="Ingrediant4"> Ingrediant 4: </label>
			<input type= "text" name = "Ingrediant4" id="Ingrediant4" autocomplete= "off"><br>
			<label for="Ingrediant5"> Ingrediant 5: </label>
			<input type= "text" name = "Ingrediant5" id="Ingrediant5" autocomplete= "off"><br>
			<label for="Ingrediant6"> Ingrediant 6: </label>
			<input type= "text" name = "Ingrediant6" id="Ingrediant6" autocomplete= "off"><br>
			<label for="Ingrediant7"> Ingrediant 7: </label>
			<input type= "text" name = "Ingrediant7" id="Ingrediant7" autocomplete= "off"><br>

			<label for="Step1"> Step 1: </label>
			<input type= "text" name = "Step1" id="Step1" autocomplete= "off"><br>
			<label for="Step2"> Step 2: </label>
			<input type= "text" name = "Step2" id="Step2" autocomplete= "off"><br>
			<label for="Step3"> Step 3: </label>
			<input type= "text" name = "Step3" id="Step3" autocomplete= "off"><br>
			<label for="Step4"> Step 4: </label>
			<input type= "text" name = "Step4" id="Step4" autocomplete= "off"><br>
			<label for="Step5"> Step 5: </label>
			<input type= "text" name = "Step5" id="Step5" autocomplete= "off"><br>
			<label for="Step6"> Step 6: </label>
			<input type= "text" name = "Step6" id="Step6" autocomplete= "off"><br>
			<label for="Step7"> Step 7: </label>
			<input type= "text" name = "Step7" id="Step7" autocomplete= "off"><br>
			<label for="Step8"> Step 8: </label>
			<input type= "text" name = "Step8" id="Step8" autocomplete= "off"><br>
			<label for="Step9"> Step 9: </label>
			<input type= "text" name = "Step9" id="Step9" autocomplete= "off"><br>

			<input type="submit" value = "Add">
</form>

<?php if (empty($_POST) === false AND empty($errors) === true) //if post is not empty and no errors
			{
				$recipe_data = array(
					'Title' => $_POST['Title'],
					'Ingrediant1' => $_POST['Ingrediant1'],
					'Ingrediant2' => $_POST['Ingrediant2'],
					'Ingrediant3' => $_POST['Ingrediant3'],
					'Ingrediant4' => $_POST['Ingrediant4'],
					'Ingrediant5' => $_POST['Ingrediant5'],
					'Ingrediant6' => $_POST['Ingrediant6'],
					'Ingrediant7' => $_POST['Ingrediant7'],
					'Step1' => $_POST['Step1'],
					'Step2' => $_POST['Step2'],
					'Step3' => $_POST['Step3'],
					'Step4' => $_POST['Step4'],
					'Step5' => $_POST['Step5'],
					'Step6' => $_POST['Step6'],
					'Step7' => $_POST['Step7'],
					'Step8' => $_POST['Step8'],
					'Step9' => $_POST['Step9']);

				recipe_add($recipe_data);
				header('Location: addrecipes.php?success');
				exit();
			}
		else if (empty($errors) === false)
			{
			print_r($errors);
			}
} ?>			
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