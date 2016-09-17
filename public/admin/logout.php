<?php
include('sessionstart.php');
if(!isset($_SESSION['user_id']))
{
	require_once('login_functions.inc.php');
	$url=absolute_url();
	header("Location: $url");
	exit();
}
else
{
	$msg = 'You have successfully Logged out, <strong>'.$_SESSION['first_name'].'</strong>';
	$_SESSION = array();
	session_destroy();
	setcookie('PHPHSESSID','',time()-3600,'/','',0,0);
	//setcookie('first_name',$data['first_name'],time()-3600,'/','',0,0);
}
//set the page title
//$page_title='Logged Out!';
include('login.php');
?>