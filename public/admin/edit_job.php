<?php include('checklogin.php'); //To check the login status of the user ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit contact Details</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<style type="text/css">
.error_form{font-family:Arial, Helvetica, sans-serif; font-size:10px; color:#F00; margin-left:10px; font-weight:bold;}
.mandatory {color: #FF0000;}
#optionhead{font-family:Verdana, Geneva, sans-serif; font-size:20px; background-color:#F9D260; color:#F4FDFD; width:96%; text-align:center; font-weight:bold; margin:15px; background-position:center; padding-bottom:3px;}
h3{text-align:center; margin:30px; color:#F00; font-size:14px;}
</style>
<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="tinymce/tinymceall.js"></script>
<script type="text/javascript">

function changepic()
{
	//alert('change pic function is called successfully');
	var workarea = document.getElementById('photo');
	workarea.innerHTML = '<input name="broch_upload" type="file"> <span class="example" style="margin-left:50px;">accepted type: JPEG, GIF, PNG only</span><br /><a href="javascript:nochangepic();">cancel</a>';
}
</script>
<link rel="stylesheet" href="calander/datepicker.css" type="text/css" />
	<script type="text/javascript" src="calander/jquery.js"></script>
	<script type="text/javascript" src="calander/datepicker.js"></script>
    <script type="text/javascript" src="calander/eye.js"></script>
    <script type="text/javascript" src="calander/layout.js?ver=1.0.2"></script>
</head>
<body>
<div id="optionhead">Edit Detail</div>
<?php
if(isset($_GET['id']) && is_numeric($_GET['id']))
{
	$id = $_GET['id'];
}
else
{
	echo'<span class="warn">Sorry Content not valid.</span>';
	exit();
}
										  
if(isset($_POST['submit']))
{
	$fclick = true;
	if(!empty($_POST['title']) && !empty($_POST['text']))
	{   
	    if($_SESSION['fload']){
		    if(get_magic_quotes_gpc()){ $removeslash = true;}
			else{$removeslash =  false;}
			foreach($_POST as $key=> $value){
			   if($removeslash) {$value = stripslashes($value);}
			   $_POST[$key] = trim($value);
			}	
					$search = array('<p>','</p>');
					$replace = '';
				     $title=addslashes($_POST['title']);
				     $text=addslashes($_POST['text']);
					 $company=addslashes($_POST['company']);
					 $city=addslashes($_POST['city']); 
					 $location=addslashes($_POST['location']); 
			$r = ''; $flag = '';
			include_once('include/conectdb.php');
			if(!empty($_FILES['image']['name'])){
			   $image = $_FILES['image']['name'];
			   $selectQ = "select company_logo from job where id = '$_GET[id]' LIMIT 1";
			   $result = mysqli_query($dbc,$selectQ);
			   $row = mysqli_fetch_array($result,MYSQLI_NUM);
			   
			   $allowedExts = array("jpg", "jpeg", "gif", "png", "JPG", "JPEG", "GIF", "PNG");
					$permitted = array('image/jpeg','image/png','image/gif','image/jpg', 'IMAGE/JPEG','IMAGE/PNG','IMAGE/GIF','IMAGE/JPG');
			   $ext = substr($image, strrpos($image, '.') + 1);
			   $aImage = explode('.', $image);
			   $uImage = uniqid($aImage[0]);
			   $uImage = $uImage.'.'.$ext;
			   
               if(in_array($ext, $allowedExts) && in_array($_FILES["image"]["type"], $permitted)){
                 if($_FILES["image"]["error"] > 0){ $flag = 'error'; }
                 else{
					     // echo 'hello';
                          move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $uImage);
						  $q = "UPDATE job SET post_name = '$_POST[title]',  job_des = '$_POST[text]',cname='$_POST[company]',jobtype='$_POST[type]',city='$_POST[city]',location='$_POST[location]',  company_logo = '$uImage' WHERE id = '$_GET[id]' LIMIT 1";
					      $r = mysqli_query($dbc,$q); 
						  @unlink('upload/'.$row[0]); 
                 }
                }else{ $flag = 'invalid'; }					   
			}else{ 
			   $q = "UPDATE job SET post_name = '$_POST[title]',  job_des = '$_POST[text]',cname='$_POST[company]',jobtype='$_POST[type]',city='$_POST[city]',location='$_POST[location]' WHERE id = '$_GET[id]' LIMIT 1"; 
			   $r = mysqli_query($dbc,$q);			
			}
			
			if(!empty($r)){
				echo'<span class="successmssg">Project Details Succeessfully Updated, <a href="javascript:window.close();">Click here to continue</a></span>';
				$_SESSION['fload'] = false;
				$r = '';
				exit();
			}else { echo '<span class="warn">Sorry, there are database problem? </span>';
		    }
		  }	
		} // end of non empty form array $_POST[] element
	else echo'<span class="warn">Please fill all the required fields</span>';
}
else
{
	$fclick = false;
	$_SESSION['fload'] = true;
	$_SESSION['firstentry'] = false;
	include_once('include/conectdb.php');
	$q = "SELECT * FROM `job` WHERE `id` = $_GET[id] LIMIT 1";
	$r = mysqli_query($dbc, $q);
	if(mysqli_num_rows($r) == 1)
	{
		$row = mysqli_fetch_assoc($r); 
		$_POST['title'] = $row['post_name'];
		$_POST['text'] = $row['job_des'];
		$_POST['company'] = $row['cname'];
		$_POST['type'] = $row['jobtype'];
		$_POST['city'] = $row['city'];
		$_POST['location'] = $row['location'];
		mysqli_free_result($r);
		
	}
	else
	{
		echo'<span class="warn">Sorry no such Content exists.</span>';
		exit();
	}
}
?>
<script type="text/javascript">
function nochangepic()
{
	//alert('no changepic function is called successfully');
	var workarea1 = document.getElementById('photo');
	workarea1.innerHTML = '<img src="user_upload/product/<?php echo $_SESSION['photo'];?>" width="133" height="137" /> <a style="font-size:11px;" href="javascript:changepic();">change</a>';
}
</script>
<form action="" method="post" name="add_com_mem" class="form" enctype="multipart/form-data">
  <table width="730" border="0" cellspacing="5" cellpadding="5" style="margin-left:50px;">
    <tr>
      <td><strong>Job Post Name:</strong><span class="star style2">*</span></td>
      <td><input name="title" type="text" style="width:250px;" value="<?php if(isset($_POST['title'])) { echo $_POST['title'];} else echo''; ?>" maxlength="50" /><?php if($fclick){if(empty($_POST['title']))echo'<span class="error"> Title is missing</span>';}?></td>
    </tr>
    <tr>
      <td><strong>Company Name:</strong><span class="star style2">*</span></td>
      <td><input name="image" type="file" style="width:250px;" /></td>
    </tr>
    
     <tr>
      <td><strong>Job Description:</strong><span class="star style2">*</span></td>
      <td><textarea name="text" cols="40" rows="15"><?php echo $_POST['text']; ?></textarea><?php if($fclick){if(empty($_POST['text']))echo'<span class="error">Text is missing</span>';}?></td>
    </tr>
    <tr>
      <td><strong>Company Name:</strong><span class="star style2">*</span></td>
      <td><input name="company" type="text" style="width:250px;" value="<?php if(isset($_POST['company'])) { echo $_POST['company'];} else echo''; ?>" maxlength="50" /><?php if($fclick){if(empty($_POST['company']))echo'<span class="error"> Company name is missing</span>';}?></td>
    </tr>
    <tr>
      <td><strong>Job Type:</strong><span class="star style2">*</span></td>
      <td><input name="type" type="text" style="width:250px;" value="<?php if(isset($_POST['type'])) { echo $_POST['type'];} else echo''; ?>" maxlength="50" /><?php if($fclick){if(empty($_POST['type']))echo'<span class="error"> Job type  is missing</span>';}?></td>
    </tr>
    <tr>
      <td><strong>City:</strong><span class="star style2">*</span></td>
      <td><input name="city" type="text" style="width:250px;" value="<?php if(isset($_POST['city'])) { echo $_POST['city'];} else echo''; ?>" maxlength="50" /><?php if($fclick){if(empty($_POST['city']))echo'<span class="error"> Job city  is missing</span>';}?></td>
    </tr>
    <tr>
      <td><strong>Job Location:</strong><span class="star style2">*</span></td>
      <td><input name="location" type="text" style="width:250px;" value="<?php if(isset($_POST['location'])) { echo $_POST['location'];} else echo''; ?>" maxlength="50" /><?php if($fclick){if(empty($_POST['location']))echo'<span class="error"> Job location  is missing</span>';}?></td>
    </tr>
    
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><input name="submit" type="submit" value="Update" style="margin-left:210px;"></td>
    </tr>
  </table>
</form>
<?php
if($_SESSION['firstentry']) 
echo'<div style=" margin:20px 0 0 100px;color:#1A460D; font-weight:bold; font-size:13px;"><span class="star">**</span> To change designation to president remove the already designated president.</div>';
?>
</body>
</html>