 <?php
function sanitize($data)
{
$con=mysqli_connect('mysql1.host.ie','poga87_guest','guestlogin','poga87_CollegeProject');

	$data = mysqli_real_escape_string($con,$data);
	
	$data = htmlentities($data);
	
	$data = strip_tags($data);
	return ($data);
	mysqli_close($con);
}

function array_sanitize(&$item)
{
$con=mysqli_connect('mysql1.host.ie','poga87_guest','guestlogin','poga87_CollegeProject');

$item = htmlentities(strip_tags(mysqli_real_escape_string($con,$item)));
mysqli_close($con);
}


function protect_page()
{
	if (logged_in() === false)
	{
		header('Location: http://www.garyscollegeproject.net/index.php');
		exit();
	}
}

function logged_in_redirect()
{
	if (logged_in() === true)
	{
		header('Location: http://www.garyscollegeproject.net/index.php');
		exit();
	}
}
function hidden_pages_protect($username)
{
	if (logged_in() === true AND user_owner($username)=== false)
	{
		header('Location: http://www.garyscollegeproject.net/index.php');
		exit();
	}
}

function recipe_add($recipe_data)
{
	$recipe_data = array_filter($recipe_data);//remove empty ingrediants and steps

	
	$fields = '`'. implode('`,`', array_keys($recipe_data)).'`';
	$data = '\''.implode('\',\'', $recipe_data).'\'';

	$con=mysqli_connect('mysql1.host.ie','poga87_gary','utarofip','poga87_CollegeProject') or die($errors[] = ($con->error));

	
	$con->query("INSERT INTO Recipes ($fields) VALUES ($data)");
	
	mysqli_close($con);
}

function recipe_delete($recipe_data)
{
	
array_walk($recipe_data, 'array_sanitize');
	
	$data = '\''.implode('\',\'', $recipe_data).'\'';
	
	$con=mysqli_connect('mysql1.host.ie','poga87_gary','utarofip','poga87_CollegeProject');

	$con->query("DELETE FROM Recipes WHERE title = ($data)")OR die($con->error);

	mysqli_close($con);
}

function recipe_display($choice)
{
				
	$con = mysqli_connect('mysql1.host.ie','poga87_guest','guestlogin','poga87_CollegeProject');

	$choice = sanitize($_POST['Recipe_Title']);

	$sql1 = "SELECT Title FROM Recipes Where title = '$choice'";

	$result = $con->query($sql1);

	$row = $result->fetch_assoc() or die($con->error);

	$row = array_filter($row, 'strlen');

	echo "<h2>".$row['Title']."</h2>";

	$sql2 = "SELECT Ingrediant1, Ingrediant2, Ingrediant3, Ingrediant4, Ingrediant5, Ingrediant6, Ingrediant7 FROM Recipes Where title = '$choice'";

	$result = $con->query($sql2);

	$row = $result->fetch_assoc() or die($con->error);

	$row = array_filter($row, 'strlen');

	echo "<ul>";

	foreach ($row as $key => $value) 
	{
		echo "<li>".$value."</li>";
	}

	echo "</ul>";


	$sql3 = "SELECT Step1,	Step2,	Step3,	Step4,	Step5,	Step6,	Step7,	Step8,	Step9 FROM Recipes Where title = '$choice'";

	$result = $con->query($sql3);

	$row = $result->fetch_assoc() or die($con->error);
	
	$row = array_filter($row, 'strlen');
	
	echo "<ol>";

	foreach ($row as $key => $value) 
	{
		echo "<li><em>".$value."</em></li>";
	}

	echo "</ol>";

	$result->close();
	
	mysqli_close($con);
}
function output_errors($errors)
{
	foreach ($errors as $key => $value)
    {
    echo "$value";
	echo "<br/>";
	}

}


?>