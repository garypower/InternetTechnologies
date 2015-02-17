<nav> 
	<ul>
		<a HREF="index.php"><li>Home</li></a>
		<a HREF="about.php"><li>About</li></a>
			<?php 
			 if (logged_in() === true)
			 	{
			 		include 'Includes/loggedinnav.php';
			 	}
			 ?>
		<a HREF="stores.php"><li>Stores</li></a>
		<a HREF="contactus.php"><li>Contact Us</li></a>
			 <?php 
			 if (logged_in() === true AND $user_data['owner'] === '1')
			 	{
			 		include 'Includes/adminnav.php';
			 	}
			 ?>		 
	</ul>
		<div class="handle"> &#9776; Menu</div>
</nav>