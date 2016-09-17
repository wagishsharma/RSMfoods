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
	if(!empty($_POST['text']))
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
			$r = ''; $flag = '';
			include_once('include/conectdb.php');
			$q = "UPDATE tlb_cms SET tlb_cms_title = '$title',tlb_cms_text = '$text' WHERE tlb_cms_id = '$_GET[id]' LIMIT 1"; 
			$r = mysqli_query($dbc,$q);			
			//}
			   
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
	$q = "SELECT * FROM tlb_cms WHERE tlb_cms_id = $_GET[id] LIMIT 1";
	$r = mysqli_query($dbc, $q);
	if(mysqli_num_rows($r) == 1)
	{
		$row = mysqli_fetch_assoc($r); 
		
		$_POST['title'] = $row['tlb_cms_title'];
		$_POST['text'] = $row['tlb_cms_text'];
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
      <td><strong>Title:</strong> <span class="star style1">*</span></td>
      <td><input name="title" type="text" style="width:250px;" value="<?php if(isset($_POST['title'])) { echo $_POST['title'];} else echo''; ?>" maxlength="50" /><?php if($fclick){if(empty($_POST['title']))echo'<span class="error"> Title is missing</span>';}?></td>
    </tr>
     <tr>
      <td><strong>Text:</strong><span class="star style1">*</span></td>
      <td><textarea name="text" cols="40" rows="20"><?php echo $_POST['text']; ?></textarea><?php if($fclick){if(empty($_POST['text']))echo'<span class="error">Text is missing</span>';}?></td>
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