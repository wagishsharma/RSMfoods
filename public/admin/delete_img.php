<?php
include('include/conectdb.php');
			   $selectQ = "select tlb_cms_url from tlb_cms where tlb_cms_id = '".$_GET['id']."'";
			   $result = mysqli_query($dbc,$selectQ);
			   $row = mysqli_fetch_array($result,MYSQLI_NUM);
			   unlink('upload/'.$row[0]);

$qur ="delete  FROM tlb_cms where tlb_cms_id='".$_GET['id']."'";
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