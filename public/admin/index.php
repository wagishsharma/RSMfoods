<?php 
require_once('checklogin.php'); //To check the login status of the user
include_once('include/header.php'); 
$note = '<div class="note1"><span class="star">*</span> denotes a mandatory field</div>';
$quicksearch = '<div class="quicksearch"><form action="" method="post"><input type="text" name="csearch" /><input type="hidden" name="fac_name" value="QSEARCH" /><input type="submit" name="scsearch" value="Go" /></form></div>';
?>
<?php
if(!isset($_GET['option']))
{
	echo'<div class="c_heading">Welcome, Admin <hr></div>';
	//include('res_list.php');
}
else if(isset($_GET['option']) && empty($_GET['option']))
{
	$_GET['option'] = 'none';
}
else
{
	
	switch($_GET['option'])
	{	
	
	case 'home_add': // to change the home  page content
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>Add Home Page Content</b></div><hr class="hr" />';
	 		include('home_add.php');
			break;
		}
		case 'home_view':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>View Home Page Content</b></div><hr class="hr" />';
	 		include('home_view.php');
			break;
		}
		case 'servi_add': // to change the home  page content
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>Add Home Page Content</b></div><hr class="hr" />';
	 		include('servi_add.php');
			break;
		}
		case 'servi_view':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>View Home Page Content</b></div><hr class="hr" />';
	 		include('servi_view.php');
			break;
		}
		case 'pro_add': // to change the home  page content
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>Add Home Page Content</b></div><hr class="hr" />';
	 		include('pro_add.php');
			break;
		}
		case 'pro_view':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>View Home Page Content</b></div><hr class="hr" />';
	 		include('pro_view.php');
			break;
		}
		case 'uppro_add': // to change the home  page content
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>Add Home Page Content</b></div><hr class="hr" />';
	 		include('uppro_add.php');
			break;
		}
		case 'uppro_view':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>View Home Page Content</b></div><hr class="hr" />';
	 		include('uppro_view.php');
			break;
		}
		case 'slider_add': // to change the home  page content
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>Add Home Page Content</b></div><hr class="hr" />';
	 		include('slider_add.php');
			break;
		}
		case 'slider_view':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>View Home Page Content</b></div><hr class="hr" />';
	 		include('slider_view.php');
			break;
		}
		case 'gi_add': // to change the home  page content
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>Add Home Page Content</b></div><hr class="hr" />';
	 		include('gi_add.php');
			break;
		}
		case 'gi_view':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>View Home Page Content</b></div><hr class="hr" />';
	 		include('gi_view.php');
			break;
		}
		case 'text_add': // to change the home  page content
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>Add Home Page Content</b></div><hr class="hr" />';
	 		include('text_add.php');
			break;
		}
		case 'text_view':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>View Home Page Content</b></div><hr class="hr" />';
	 		include('text_view.php');
			break;
		}
case 'emp_add': // to change the home  page content
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>Add Home Page Content</b></div><hr class="hr" />';
	 		include('emp_add.php');
			break;
		}
		case 'emp_view':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>View Home Page Content</b></div><hr class="hr" />';
	 		include('emp_view.php');
			break;
		}
case 'job_add': // to change the home  page content
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>Add Home Page Content</b></div><hr class="hr" />';
	 		include('job_add.php');
			break;
		}
		case 'job_view':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>View Home Page Content</b></div><hr class="hr" />';
	 		include('job_view.php');
			break;
		}

		case 'welcome_text_add': // to change the home  page content
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>Add Home Page Content</b></div><hr class="hr" />';
	 		include('welcome_text_add.php');
			break;
		}
		case 'welcome_text_view':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>View Home Page Content</b></div><hr class="hr" />';
	 		include('welcome_text_view.php');
			break;
		}

	    
		case 'about_add': // to change the about us page content
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>Add Home Page Content</b></div><hr class="hr" />';
	 		include('about_add.php');
			break;
		}
		case 'about_view':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>View Home Page Content</b></div><hr class="hr" />';
	 		include('about_view.php');
			break;
		}
		case 'recentwork_add': // to change the about us page content
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>Add Home Page Content</b></div><hr class="hr" />';
	 		include('recentwork_add.php');
			break;
		}
		case 'recentwork_view':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>View Home Page Content</b></div><hr class="hr" />';
	 		include('recentwork_view.php');
			break;
		}
		 // to change the services page content
		 case 'testimonial_add':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>Add Home Page Content</b></div><hr class="hr" />';
	 		include('testimonial_add.php');
			break;
		}
		case 'testimonial_view':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>View Home Page Content</b></div><hr class="hr" />';
	 		include('testimonial_view.php');
			break;
		}
		 case 'ourclient_add':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>Add Home Page Content</b></div><hr class="hr" />';
	 		include('ourclient_add.php');
			break;
		}
		case 'ourclient_view':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>View Home Page Content</b></div><hr class="hr" />';
	 		include('ourclient_view.php');
			break;
		}
		case 'ourservice_add': // to change the about us page content
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>Add Home Page Content</b></div><hr class="hr" />';
	 		include('ourservice_add.php');
			break;
		}
		case 'ourservice_view':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>View Home Page Content</b></div><hr class="hr" />';
	 		include('ourservice_view.php');
			break;
		}

		case 'ourteam_add': // to change the services page content
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>Add Home Page Content</b></div><hr class="hr" />';
	 		include('ourteam_add.php');
			break;
		}
		case 'ourteam_view':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>View Home Page Content</b></div><hr class="hr" />';
	 		include('ourteam_view.php');
			break;
		}
			
		
		case 'service2_add': // to change the services page content
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>Add Home Page Content</b></div><hr class="hr" />';
	 		include('service2_add.php');
			break;
		}
		case 'service2_view':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>View Home Page Content</b></div><hr class="hr" />';
	 		include('service2_view.php');
			break;
		}
		case 'home_add': // to change the services page content
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>Add Home Page Content</b></div><hr class="hr" />';
	 		include('gallery2_add.php');
			break;
		}
		case 'gallery2_view':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>View Home Page Content</b></div><hr class="hr" />';
	 		include('gallery2_view.php');
			break;
		}
		case 'enquirey_view':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>View Home Page Content</b></div><hr class="hr" />';
	 		include('enquirey_view.php');
			break;
		}
		
		
		case 'contact_add': // to change the services page content
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>Add Home Page Content</b></div><hr class="hr" />';
	 		include('contact_add.php');
			break;
		}
		case 'contact_view':
		{
			echo'<div class="optionhead" id="optionhead" align="center"><b>View Home Page Content</b></div><hr class="hr" />';
	 		include('contact_view.php');
			break;
		}
		
		
		
		case 'password': // to change password
		{
			echo'<div class="optionhead">Change Admin Password</div><hr class="hr" />';
			include('change_pass.php');
			break;
		}
	}
}
 echo '<b align="center">'; include('include/footer.php'); echo '</b>';
?>