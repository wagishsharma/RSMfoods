<?php
//This file contains the database access information. It will included on every file requiring database access.
if($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == 'localhost:82')
{
	//For localhost checking
	$dbc = @mysqli_connect('localhost','root','','rsmfood') OR die ('could not connect:' . mysqli_connect_error());
	
	//echo "hi";
	
	//
}
else
{
	//For online site
	$dbc = @mysqli_connect('localhost','rsmfoods_rsmuser','info@123','rsmfoods_rsmdb') OR die ('Sorry, could not connect:');
}
?>