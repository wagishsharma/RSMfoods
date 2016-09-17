<?php
$con=mysql_connect("localhost","root","");
$db="rtt_db";
$con1=mysql_select_db($db,$con) or die(mysql_error());
if($con1)
{
//echo "Database has been connected successfully";

}
?>