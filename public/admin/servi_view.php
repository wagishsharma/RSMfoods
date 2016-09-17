<?php include_once('lightbox.php'); // to make the lightbox effect, the files are present in js1 folder?>
<style type="text/css">
.abc{color:#7E7572; font-size:9px; font-style:italic;}
<!-- styling the search form -->
.searchbar{font-family:Verdana, Geneva, sans-serif; color:#333; font-size:11px; }
.searchbar input["text"]{ font-family:Verdana, Geneva, sans-serif; color:#333; font-size:11px; width:150px;}

<!-- styling the clickable content in the search table -->
.restname{font-family:Verdana, Geneva, sans-serif; font-size:12px; text-decoration:none; color:#666; font-style:italic;}
.restname a:link{text-decoration:none; color:#666;}
.restname a:visited{text-decoration:none; color:#666;}
.restname a:hover{color:#060; font-weight:bold;}
.restname a:active{text-decoration:none;color:#666;}

<!-- styling the table itself -->
table{}
td{padding:3px 5px; font-family:Verdana, Geneva, sans-serif; font-size:11px; color:#333; line-height:150%;}
.thead{ background-color:#000; color:#C18A09;}
.thead td{color:#C18A09; font-size:13px;}
.thead a:link{color:#FFF;}
.thead a:visited{color:#FFF;}
.thead a:hover{color:#C60;}
.thead a:active{color:#FFF;}
</style>
<script type="text/javascript">
function delconf(id)
{
	var msg="Are you sure to deletd Information# " + id + "?";
	var reply=confirm(msg);
	return reply
}
</script>

<!-- this will present the top menu for the search -->
<form action="" method="post" class="cform">
<table width="100%" border="0" cellspacing="1" align="center">
<tr>
  <td align="right">Please enter search text: : </td>
  <td><input type="text" name="csearch" />
<input type="submit" name="scsearch" value="Go" /></td>
</tr>
</table>
</form>
<!-- top search menu ends here -->


<?php
date_default_timezone_set('Asia/Kolkata');
//For main condition go to the ends, there are two functions defined here in this page

//This function will generate the result set from the database based on text string passed
function rsearch($text)
{
	
	// code to show the search text starts
	if(isset($_POST['csearch']))
		$output = 'Your Search : <span style="color:green;">'.$_POST['csearch'].'</span><br/>';
	elseif(isset($_GET['search']) && $_GET['search'] != 'ALL')
		$output = 'Your Search : <span style="color:green;">'.$_GET['search'].'</span><br/>';
	else
		$output = '';
	//code to show search text ends
	include_once('include/conectdb.php');
	$text = mysqli_real_escape_string($dbc, $text); //making the search text safer for Mysql Query 
	$qcse = "SELECT * FROM tlb_cms WHERE ((tlb_cms_title  LIKE '%$text%')  || (tlb_cms_text  LIKE '%$text%'))  ";
	//qcse = query customer search exact
	$rcse = mysqli_query($dbc,$qcse);
	if(mysqli_num_rows($rcse)>0)
	{
		echo'<p style="margin-left:20px;color:red;">'.$output.'Matching Product found are : <strong>'.mysqli_num_rows($rcse).'</strong></p>';
		show_rsearch_data($rcse,$text);
	}
	else
	{
		$qcsa = "SELECT * FROM tlb_cms WHERE MATCH(`tlb_cms_title` ,`tlb_cms_url`,`tlb_cms_text`) AGAINST('%$text%')"; //qcsa = query customer search any
		$rcsa = mysqli_query($dbc,$qcsa);
		if(mysqli_num_rows($rcse)>0)
		{
			echo'<p style="margin-left:20px;color:red;">'.$output.'Matching home Page Text found are: <strong>'.mysqli_num_rows($rcsa).'</strong></p>';
			show_rsearch_data($rcsa,$text);
		}
		else
		{
			echo'<p style="margin-left:20px;color:red;">'.$output.'Sorry, No Matching found</p>';
		}
	}
	mysqli_close($dbc);
}
//function ends here ----------------------------------------------------------------------------


//Function to show the result of the search data in tabular form starts
//This function is called in function above and contains the table
function show_rsearch_data($r,$stext)
{
	$bg='#E3EDF0'; //variable used to store alternate row colors
	
	echo'
	<table width="100%" border="0" cellspacing="1" align="center">
  <tr class="thead">
    <td width="30">S.No</td>
	<td width="200">Title</td>
	<td width="150">Image</td>
	<td width="450">Text</td>

	<td>Options</td>
  </tr>';
	$inc=1;
	while($row=mysqli_fetch_assoc($r))
	{
		$bg=($bg=='#E3EDF0'?'#ffffff':'#E3EDF0');// to provide different row colors(member_serviceed table) //substr($row['video_desc'],0,150).'..'.
		echo'
		<tr BGCOLOR="'.$bg.'">
    	  <td>'.$inc.'</td>
		  <td>'.substr($row['tlb_cms_title'],0,200).'</td>
		  <td width="12%"><img src="upload/'.$row['tlb_cms_url'].'" width="100" height="100" /></td>
		   <td>'.substr($row['tlb_cms_text'],0,200).'</td>
		  './/<td><img src="upload/contact/'.$row['contact_img_url'].'" width="100" height="100"/> </td>
		  '<td width="75px"><a title="File Edit" href="javascript:void(0);" onclick="PopupCenter(\'edit_img.php?id='.$row['tlb_cms_id'].'\', \'myPope'.$inc.'\',800,600);">Edit</a> | 
		  <a title="Delete File" href="delete_img.php?id='.$row['tlb_cms_id'].'&action=servi" onClick="return delconf('.$row['tlb_cms_id'].');">Delete</a></td>
		</tr>';
		$inc=$inc+1;
	}
	echo'</table>';
}
//Function ends here to show the result of the search data ------------------------------------------


//This main condition will check what to do based on the  fact whether the search button has been pressed or $_GET search variable is in existence and is not empty
if(isset($_POST['scsearch']) || (isset($_GET['search']) && !empty($_GET['search'])))
{
	if(isset($_POST['scsearch']))
	{
		if(empty($_POST['csearch']))
		{
			include('include/conectdb.php');
			
			$qe = "SELECT * FROM tlb_cms where tlb_cms_key=14"; //qe = search with empty query
			$re = mysqli_query($dbc, $qe);
			if(mysqli_num_rows($re) == 0)
			{
				echo'<span class="warn">Sorry database for home page is empty.</span>';
			}
			else
			{
				echo'<p style="margin-left:20px;color:red;">Total home text available are : <strong>'.mysqli_num_rows($re).'</strong></p>';
				show_rsearch_data($re,'ALL');
			}
		}
		else
		{
			rsearch($_POST['csearch']);
		}
	}
	else if($_GET['search'] != 'ALL')
	{
		rsearch($_GET['search']);
	}
	else
	{
		include('include/conectdb.php');
		$qe = "SELECT * FROM tlb_cms where tlb_cms_key=14"; //qe = search with empty query
		$re = mysqli_query($dbc, $qe);
		if(mysqli_num_rows($re) == 0)
		{
			echo'<span class="warn">Sorry database for home is empty.</span>';
		}
		else
		{  
			echo'<p style="margin-left:20px;color:red;">Total home Page Title And Text Are : <strong>'.mysqli_num_rows($re).'</strong></p>';
			show_rsearch_data($re,'ALL');
		}
	}
}
//upto here only
?>