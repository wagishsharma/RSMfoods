<?php 
session_start();
include("connection.php");
//include("session.inc.php");

if(isset($_POST[submit_x])){


	 $username=(trim($_POST["username"]));
	 $npassword=(trim($_POST["n_password"]));
	$admin_email=trim($_POST["admin_email"]);	
	//  $update="UPDATE ".TBLPREFIX."admin_login SET username='$username', password='$npassword', admin_email='$admin_email' WHERE admin_id ='".$_SESSION[ADMINId]."'";
	
$query=mysql_query("UPDATE admin_login SET  password='$npassword' WHERE admin_id ='".$_SESSION[ADMINId]."'");
$_SESSION['sess_mess']="Password has been succesfully updated!";
//executeQuery($query);
//$_SESSION['sess_mess']="Notice Updated Successfully!";
//header("location:notification-list.php");
//exit();
}
$sql="select * from admin_login where admin_id =1"; 
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
@extract($row);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BCM</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/mouseovertabs.css" />

<script src="js/mouseovertabs.js" type="text/javascript">

/***********************************************
* Mouseover Tabs Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>
<script language="Javascript">
				function validatePass()
				{
					if(document.frmpassword.n_password.value=="")
					{
						alert("Please enter new password.");
						document.frmpassword.n_password.focus();
						return false;
					}
					
					if(document.frmpassword.c_password.value=="")
					{
						alert("Please enter confirm password.");
						document.frmpassword.c_password.focus();
						return false;
					}
					
							
							
					if(document.frmpassword.c_password.value!=document.frmpassword.n_password.value)
					{
						alert("confirm password is not matching.");
						document.frmpassword.c_password.focus();
						document.frmpassword.c_password.select();
						return false;
					}		
				}


				</script>

</head>

<body>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" class="body">
  <tr>
    <td>
	<?php
	include 'header.php';
	?>
	</td>
  </tr>
  <tr>
    <td><table width="971" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="40" align="right" class="hadnew1245">
		<?php
		include 'header-welcome.php';
		?>
		</td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="23%" valign="top" class="centercenter123">
				<?php
				include 'left-main.php';
				?>
				</td>
                <td width="2%">&nbsp;</td>
                <td width="75%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="96%" class="centertopnew headingfonts"><strong>Change CMS Password</strong></td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td class="admin_text_ul centercenter123"><table width="100%"  border="0" cellspacing="8" cellpadding="0">
                          <tr>
<form action="" method="POST" enctype="multipart/form-data" name="frmpassword" id="frmpassword" onsubmit="return validatePass();">
                            <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                               <!-- <tr>
                                  <td class="admin">Username</td>
                                  <td>:</td>
                                  <td>	
<input name="username" type="text" class="textbox" id="username" value="<?php echo stripslashes(trim(base64_decode($username)));?>"  size="30">							  								  </td>
                                </tr>
                                <tr>
                                  <td class="admin">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="admin" nowrap="nowrap">Admin Email&nbsp;</td>
                                  <td>:&nbsp;</td>
                                  <td>
<input name="admin_email" type="text" class="textbox" id="admin_email" value="<?php echo stripslashes(trim($admin_email));?>"  size="30" /></td>
                                </tr>
                                <tr>
                                  <td class="admin">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
								--->
								
                                   <?php
									  if($_SESSION['sess_mess'])
									  {
									  ?>
								   <tr>
									<td colspan="3" class="admin" align="left">
										<?php echo $_SESSION[sess_mess]?>
										<?php session_unregister(sess_mess);?>									</td>
								  </tr>
								  <?php } ?>
                                <tr>
                                  <td width="17%" nowrap class="admin">New Password &nbsp;<span class="redfont">*</span></td>
                                  <td width="1%">:&nbsp;</td>
                                  <td width="82%">
<input name="n_password" type="password" class="textbox" id="n_password"  size="30" /></td>
                                </tr>
                                <tr>
                                  <td class="admin">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="admin" nowrap="nowrap">Confirm <span class="redfont">*</span></td>
                                  <td>:&nbsp;</td>
                                  <td>
<input name="c_password" type="password" class="textbox" id="c_password" size="30" /></td>
                                </tr>
                                <tr>
                                  <td class="admin">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>

                                <tr>
                                  <td class="admin">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td width="16%">	
										<input type="hidden" name="changepass" value="edit">									
										<input type="image" name="submit" src="images/submit.jpg" border="0" width="76" height="21" onclick="return chkfrm();">										</td>
                                        <td width="15%">&nbsp;</td>
                                        <td width="69%">&nbsp;</td>
                                      </tr>
                                  </table></td>
                                </tr>
                            </table></td></form>
                          </tr>
                        </table></td>
                      </tr>
                    </table></td>
                  </tr>				
                  <tr>
                    <td>&nbsp;</td>
                  </tr>				 
				   <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>
					
		    </td>
                  </tr>
                </table>
                  </td>
              </tr>
              
              
            </table></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>
	<?php
	include 'footer.php';
	?>
	</td>
  </tr>
</table>
</body>
</html>
