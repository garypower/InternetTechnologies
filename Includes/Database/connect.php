<?php
$db = new mysqli('mysql1.host.ie','poga87_guest','guestlogin','poga87_CollegeProject'); // host username database

if ($db -> connect_errno)
{
die('Sorry we are having some problems.');
}
?>