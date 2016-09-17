<!-- this file will add a news to the system -->
<?php
if(isset($_POST['submit']))
{
	$fclick = true;
	if(!empty($_POST['acur_pas']) && !empty($_POST['anew_pas1']) && !empty($_POST['anew_pas2']))
	{
		if($_POST['anew_pas1'] != $_POST['anew_pas2'])
		{
			echo'<span class="warn">Password do not match, please re-enter:</span>';
		}
		else
		{
			if(!isset($_SESSION['pwdcs']))//pwdcs = password changed successfully session
			{
				require_once('include/conectdb.php');
				$q = "SELECT * FROM admin WHERE user_id='$_SESSION[user_id]' AND pass = SHA1('$_POST[acur_pas]') LIMIT 1";
				$r = mysqli_query($dbc,$q);
				//$row = mysqli_fetch_assoc($r);
				$cpass = trim($_POST['anew_pas1']);
				if(mysqli_num_rows($r) != 1)
				{
					echo'<span class="warn">Incorrect admin password:</span>';
					mysqli_close($dbc);
				}
				else
				{
					$showform = false;
					$q1 = "UPDATE admin SET pass = SHA1('$cpass') WHERE user_id ='$_SESSION[user_id]' LIMIT 1";	
					$r1 = mysqli_query($dbc,$q1);
					if($r1)
					echo'<div class="successmssg">Admin password changed successfully to : <span style="color:#1D87F1;font-size:20px;">'.$cpass.'</span></div>';
					else
					echo'<span class="warn">System error occured, password could not be changed, please <a href="index.php?option=chng_admin_pas">try again</a></span>';
					mysqli_close($dbc);
					$_SESSION['pwdcs'] = 'admin';
					include_once('include/footer.php');
					exit();
				}
			}
			else
			{
				$_POST = array();
				header("Location: index.php?option=password");
				exit();
			}
		}
	}
	else
	echo'<span class="warn">Please fill all the required fields</span>';
}
else
{
	$_POST['acur_pas'] =$_POST['anew_pas1'] =$_POST['anew_pas2'] = '';
	$fclick = false;
	include('ses_clear.php');
}
?>
<div>
  <form action="" method="post" enctype="multipart/form-data" class="form">
  <table width="780" border="0" cellspacing="5" cellpadding="5">
  <tr>
      <td width="30%" align="right"><span class="star">*</span> Old password:</td>
      <td width="70%"><input name="acur_pas" type="password" maxlength="50" value="<?php echo $_POST['acur_pas'];?>" /></td>
    </tr>
    <tr>
      <td width="30%" align="right"><span class="star">*</span> New password:</td>
      <td width="70%"><input name="anew_pas1" type="password" maxlength="50" value="<?php echo $_POST['anew_pas1'];?>" /></td>
    </tr>
    <tr>
      <td width="30%" align="right"><span class="star">*</span> confirm password:</td>
      <td width="70%"><input name="anew_pas2" type="password" maxlength="50" value="<?php echo $_POST['anew_pas2'];?>" /></td>
    </tr>
    <tr>
     <td width="30%" align="right"></td>
      <td colspan="2" ><input name="submit" type="submit" value="Change password"></td>
    </tr>
  </table>
  </form>
</div>