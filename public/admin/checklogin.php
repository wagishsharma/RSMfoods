<?php
//This will redirect the user to the login page, if they haven't logged in.
include('sessionstart.php');
if(!isset($_SESSION['user_id']))
{
	require_once('login_functions.inc.php');
	$url=absolute_url('login.php');
	header("Location: $url");
	exit();
}
?>
