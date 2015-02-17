<?php
session_start();
error_reporting(0);

require 'Database/connect.php';
require 'Functions/users.php';
require 'Functions/general.php';

if(logged_in() === true){

	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id,'username','owner');
	print_r ($userdata);
}


$errors = array(); 
?>