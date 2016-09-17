<?php
########################### destroying the session and keeping the users login info only
  $user_id=$_SESSION["user_id"];
 $first_name=$_SESSION["first_name"];
 $_SESSION = array();
 session_destroy();
include('sessionstart.php');
$_SESSION["user_id"]=$user_id;
$_SESSION["first_name"]=$first_name;
################################# ends here session destroy 
?>