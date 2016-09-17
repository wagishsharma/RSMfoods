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
	if(!empty($_POST['text']))
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
					$cat=addslashes($_POST['cat']);
				    $title=addslashes($_POST['title']);
				    $text=trim($_POST['text']); 
					$flag = ''; $r = '';
				    $q = "INSERT INTO `tlb_cms`(`tlb_cms_id`,`cat`, `tlb_cms_title`, `tlb_cms_text`, `tlb_cms_key`) VALUES (null,'$cat', '$title', '$text', 17)";
				    $r = mysqli_query($dbc,$q);  
					if(!empty($r))
					{
						echo'<span class="successmssg">Content succeessfully added to the website, <br/> <a href=index.php?option=gi_add>Click to add more</a> <b></span>';
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
	$_POST['title'] = $_POST['text'] = ''; //$_POST['contact_email'] = $_POST['contact_fax'] = $_POST['contact_phone'] ='';
}
?>
<form action="" method="post" name="news" class="form" enctype="multipart/form-data">
  <table width="830" border="0" cellspacing="5" cellpadding="5" style="margin-left:50px;">
  <tr>
      <td><strong> Title:</strong> <span class="star style1">*</span></td>
      <td><select name="cat" style="width:350; height:30px;" required="required">
      <option value="">---Select---</option>
      <option value="PROVIDING PREMIUM ">PROVIDING PREMIUM QUALITY CERTIFIED FOODS AT COMPETITIVE PRICES </option>
      <option value="STRIVING FOR INCLUSIVE  ">STRIVING FOR INCLUSIVE WELFARE FOR ALL  </option>
      <option value="PROMOTING SUSTAINABLE  ">PROMOTING SUSTAINABLE FARMING AND RESOURCE CONSERVATION </option>
      <option value="PROMOTING THE MODERNIZATION  ">PROMOTING THE MODERNIZATION OF AGRICULTURE AND SUPPLY CHAIN Mngt.. </option>
      <option value="USE OF INFORMATION SENSING  ">USE OF INFORMATION, SENSING AND BIG DATA TECHNOLOGIES FOR A JOYFUL </option>
      
      </select></td>
    </tr>
    <tr>
      <td><strong> Title:</strong> <span class="star style1">*</span></td>
      <td><input name="title" type="text" style="width:250px;" value="<?php if(isset($_POST['title'])) { echo $_POST['title'];} else echo''; ?>" maxlength="100" /><?php if($fclick){if(empty($_POST['title']))echo'<span class="error"> Title is missing</span>';}?></td>
    </tr>
     <tr>
      <td><strong>Text:</strong><span class="star style1">*</span></td>
      <td><textarea name="text" cols="40" rows="20"><?php echo $_POST['text']; ?></textarea><?php if($fclick){if(empty($_POST['text']))echo'<span class="error">Text is missing</span>';}?></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><input name="submit" type="submit" value="Add " style="margin-left:210px;"><input type="hidden" name="upload" value="upload" /></td>
    </tr>
  </table>
</form>
<div class="note"><span class="star style1">*</span>Denotes a mandatory field</div>
</div>