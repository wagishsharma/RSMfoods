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
	if(!empty($_POST['rollno']) && !empty($_POST['regno']) && !empty($_POST['sname']) && !empty($_POST['dob']) && !empty($_POST['mname']) && !empty($_POST['fname']) && !empty($_POST['course']) && !empty($_POST['session']) && !empty($_POST['year']) && !empty($_POST['result']))
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
				    $search = array('<p>','</p>');
					$replace = '';
					$regno=addslashes($_POST['rollno']);
				    $regno=addslashes($_POST['regno']);
				    $sname=addslashes($_POST['sname']);
					$dob=addslashes($_POST['dob']);
					$mname=addslashes($_POST['mname']);
					$fname=addslashes($_POST['fname']);
					$course=addslashes($_POST['course']);
					$session=addslashes($_POST['session']);
					$year=addslashes($_POST['year']);
					$result=addslashes($_POST['result']);
			$r = ''; $flag = '';
			include_once('include/conectdb.php');
			$q = "UPDATE tlb_cms SET tlb_cms_rollno = '$_POST[rollno]', tlb_cms_Regno = '$_POST[regno]', tlb_cms_st_name = '$_POST[sname]', tlb_cms_dob= '$_POST[dob]', tlb_cms_mname= '$_POST[mname]', tlb_cms_fname= '$_POST[fname]', tlb_cms_course= '$_POST[course]', tlb_cms_session= '$_POST[session]', tlb_cms_year= '$_POST[year]', tlb_cms_results= '$_POST[result]' WHERE tlb_cms_id = '$_GET[id]' LIMIT 1"; 
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
		$_POST['regno']=$row['tlb_cms_rollno'];
		$_POST['regno']=$row['tlb_cms_Regno'];
		$_POST['sname']=$row['tlb_cms_st_name'];
		$_POST['dob']=$row['tlb_cms_dob'];
		$_POST['mname']=$row['tlb_cms_mname'];
		$_POST['fname']=$row['tlb_cms_fname'];
		$_POST['course']=$row['tlb_cms_course'];
		$_POST['session']=$row['tlb_cms_session'];
		$_POST['year']=$row['tlb_cms_year'];
		$_POST['result']=$row['tlb_cms_results'];
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
  <table width="830" border="0" cellspacing="5" cellpadding="5" style="margin-left:50px;">
    <tr>
      <td width="215"><strong>Roll Number:</strong> <span class="star style1">*</span></td>
      <td width="580"><input name="rollno" type="text" style="width:250px;" value="<?php if(isset($_POST['rollno'])) { echo $_POST['rollno'];} else echo''; ?>" maxlength="50" /><?php if($fclick){if(empty($_POST['rollno']))echo'<span class="error"> Title is missing</span>';}?></td>
    </tr>
    <tr>
      <td width="215"><strong>Registration No:</strong> <span class="star style1">*</span></td>
      <td width="580"><input name="regno" type="text" style="width:250px;" value="<?php if(isset($_POST['regno'])) { echo $_POST['regno'];} else echo''; ?>" maxlength="50" /><?php if($fclick){if(empty($_POST['regno']))echo'<span class="error"> Title is missing</span>';}?></td>
    </tr>
    <tr>
      <td><strong>Student Name:</strong> <span class="star style1">*</span></td>
      <td><input name="sname" type="text" style="width:250px;" value="<?php if(isset($_POST['sname'])) { echo $_POST['sname'];} else echo''; ?>" maxlength="50" /><?php if($fclick){if(empty($_POST['sname']))echo'<span class="error"> Title is missing</span>';}?></td>
    </tr>
    <tr>
      <td><strong>Date of Birth:</strong> <span class="star style1">*</span></td>
      <td><input name="dob" type="text" style="width:250px;" value="<?php if(isset($_POST['dob'])) { echo $_POST['dob'];} else echo''; ?>" maxlength="50" />
      <?php if($fclick){if(empty($_POST['dob']))echo'<span class="error"> Title is missing</span>';}?>       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Formate <strong>year-month-date</strong></td>
    </tr>
    <tr>
      <td><strong>Mother's Name:</strong> <span class="star style1">*</span></td>
      <td><input name="mname" type="text" style="width:250px;" value="<?php if(isset($_POST['mname'])) { echo $_POST['mname'];} else echo''; ?>" maxlength="50" /><?php if($fclick){if(empty($_POST['mname']))echo'<span class="error"> Title is missing</span>';}?></td>
    </tr>
    <tr>
      <td><strong>Father's Name:</strong> <span class="star style1">*</span></td>
      <td><input name="fname" type="text" style="width:250px;" value="<?php if(isset($_POST['fname'])) { echo $_POST['fname'];} else echo''; ?>" maxlength="50" /><?php if($fclick){if(empty($_POST['fname']))echo'<span class="error"> Title is missing</span>';}?></td>
    </tr>
    <tr>
      <td><strong>Course:</strong> <span class="star style1">*</span></td>
      <td><input name="course" type="text" style="width:250px;" value="<?php if(isset($_POST['course'])) { echo $_POST['course'];} else echo''; ?>" maxlength="50" /><?php if($fclick){if(empty($_POST['course']))echo'<span class="error"> Title is missing</span>';}?></td>
    </tr>
    <tr>
      <td><strong>Session:</strong> <span class="star style1">*</span></td>
      <td><input name="session" type="text" style="width:250px;" value="<?php if(isset($_POST['session'])) { echo $_POST['session'];} else echo''; ?>" maxlength="50" /><?php if($fclick){if(empty($_POST['session']))echo'<span class="error"> Title is missing</span>';}?></td>
    </tr>
    <tr>
      <td><strong>Year:</strong> <span class="star style1">*</span></td>
      <td><input name="year" type="text" style="width:250px;" value="<?php if(isset($_POST['year'])) { echo $_POST['year'];} else echo''; ?>" maxlength="50" /><?php if($fclick){if(empty($_POST['year']))echo'<span class="error"> Title is missing</span>';}?></td>
    </tr>
    <tr>
      <td><strong>Result / Status:</strong> <span class="star style1">*</span></td>
      <td><input name="result" type="text" style="width:250px;" value="<?php if(isset($_POST['result'])) { echo $_POST['result'];} else echo''; ?>" maxlength="50" /><?php if($fclick){if(empty($_POST['result']))echo'<span class="error"> Title is missing</span>';}?></td>
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