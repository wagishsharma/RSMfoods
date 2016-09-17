<?php
include('include/conectdb.php');
			   //$selectQ = "select contact_img_url from contact where contact_id = '".$_GET[contact_id]."'";
			   //$result = mysqli_query($dbc,$selectQ);
			   //$row = mysqli_fetch_array($result,MYSQLI_NUM);
			   //unlink('upload/contact/'.$row[0]);

$qur ="delete  FROM package where id='".$_GET['id']."'";
$re = mysqli_query($dbc,$qur);
 if($re)
 { 
 header("Location:index.php?option=".$_GET['action']."_view&search=ALL");
 }
else
 {
  echo "Error in Deletion";
 }
?>