<?php
function absolute_url($page)
{
	$url='http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
	$url=rtrim($url,'/\\');
	$url.='/'.$page;
	return $url;
}// function ends here

function check_login($dbc,$email='',$pass='')
{
	$errors=array();
	//validate email
	if(empty($email))
	{
		$errors='You forgot to enter your email address.';
	}
	else
	{
		$e=mysqli_real_escape_string($dbc,trim($email));
	}
	//validat password
	if(empty($pass))
	{
		$errors='You forgot to enter your password.';
	}
	else
	{
		$p=mysqli_real_escape_string($dbc,trim($pass));
	}
	
	if(empty($errors))
	{
		$q="SELECT user_id,first_name FROM admin WHERE email='$e' AND pass=SHA1('$p')";
		$r=mysqli_query($dbc,$q);
		//check the results
		if(mysqli_num_rows($r)==1)
		{
			$row=mysqli_fetch_array($r,MYSQLI_ASSOC);
			return array(true,$row);
		}
		else
		{
			$errors[]='The email address and password do not match.';
		}
		return array(false,$errors);
	}
}//end of check_login() function
?>