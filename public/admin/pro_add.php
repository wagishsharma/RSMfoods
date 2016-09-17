<!-- added to include the tinymce editor -->
<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="tinymce/tinymceall.js"></script>
<!-- to add the multiupload feature to the website based on jQuery starts here -->
<script type="text/javascript" src="fileupload_ajax/jquery-1.2.1.min.js"></script>
<script type="text/javascript" src="fileupload_aja/jquery.MultiFile.js"></script>
<!-- to add the multiupload feature to the website based on jQuery ends here -->
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
<div>
<?php
if(isset($_POST['submit']))
{
	$fclick = true;	
	if(!empty($_FILES['file']['name']))
	{  		
				if($_SESSION['fload'])
				{
					include_once('include/conectdb.php');					
					if(get_magic_quotes_gpc()) {$removeslash = true;}
					else {$removeslash =  false;}
					foreach($_POST as $key=> $value)
					{
						if($removeslash)
						$value = stripslashes($value);
						$_POST[$key] = trim($value);
						$_POST[$key] = mysqli_real_escape_string($dbc, $_POST[$key]);
					}
					$search = array('<p>','</p>');
					$replace = '';
				    $file=addslashes($_FILES['file']['name']); 
					 $title=addslashes($_POST['title']); 
					$flag = ''; $r = '';
					
					$allowedExts = array("jpg", "jpeg", "gif", "png", "JPG", "JPEG", "GIF", "PNG",'pdf','doc');
					$permitted = array('image/jpeg','image/png','image/gif','image/jpg', 'IMAGE/JPEG','IMAGE/PNG','IMAGE/GIF','IMAGE/JPG','application/pdf','application/msword');
					$ext = substr($file, strrpos($file, '.') + 1);
					$ar = explode('.', $file);
					$first = $ar[0];
					$last = $ar[1];
					$name = uniqid($first);
					$name = $name.'.'.$last;
                    if(in_array($ext, $allowedExts) && in_array($_FILES["file"]["type"], $permitted))
                    {
                       if($_FILES["file"]["error"] > 0){ $flag = 'error'; }
                       else{     
							     $q = "INSERT INTO `tlb_cms`(`tlb_cms_id`,`tlb_cms_title`, `tlb_cms_url`, `tlb_cms_key`) VALUES (null,'$title', '$name', 15)";
							     $r = mysqli_query($dbc,$q);  
                       }
                    }
                    else
                    {
                       $flag = 'invalid'; //echo "Invalid file";
                    }				
				
					if(!empty($r))
					{
					    move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $name);
						echo'<span class="successmssg">Content succeessfully added to the website, <br/> <a href=index.php?option=pro_add>Click to add more</a> <b></span>';
						$_SESSION['fload'] = false;
						echo'</div>'; 
						include_once('include/footer.php');
						exit();
					}	
					else{
					  echo '<span class="warn">Sorry, there are server problem? </span>';
					}
				}			
}
	else
	echo'<span class="warn"><font color="red">Please fill all the required fields</font></span>';
}                                                                             
else
{
	include_once('ses_clear.php');
	$fclick = false;
	$_SESSION['fload'] = true;
	$_POST['title'] = ''; //$_POST['contact_email'] = $_POST['contact_fax'] = $_POST['contact_phone'] ='';
}
?>
<form action="" method="post" name="news" class="form" enctype="multipart/form-data">
  <table width="830" border="0" cellspacing="5" cellpadding="5" style="margin-left:50px;">
  <tr>
      <td><strong> Title:</strong> <span class="star style1">*</span></td>
      <td><input name="title" type="text" style="width:250px;" value="<?php if(isset($_POST['title'])) { echo $_POST['title'];} else echo''; ?>" maxlength="100" /><?php if($fclick){if(empty($_POST['title']))echo'<span class="error"> Title is missing</span>';}?></td>
    </tr>
    <tr>
      <td><strong>Upload Image:</strong> <span class="star style1">*</span></td>
      <td><input name="file" type="file" style="width:250px;" maxlength="50" /><?php if($fclick){if(empty($_FILES['file']['name']))echo'<span class="error"> Title is missing</span>';}?></td>
    </tr>
<!--     <tr>
      <td><strong>Text:</strong><span class="star style1">*</span></td>
      <td><textarea name="text" cols="40" rows="20"><?php //echo $_POST['text']; ?></textarea><?php //if($fclick){if(empty($_POST['text']))echo'<span class="error">Text is missing</span>';}?></td>
    </tr>
-->    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><input name="submit" type="submit" value="Add " style="margin-left:210px;"><input type="hidden" name="upload" value="upload" /></td>
    </tr>
  </table>
</form>
<div class="note"><span class="star style1">*</span>Denotes a mandatory field</div>
</div>