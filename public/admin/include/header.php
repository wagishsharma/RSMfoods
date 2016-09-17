<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/structure.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>Welcome to Admin</title>
<!-- OF COURSE YOU NEED TO ADAPT NEXT LINE TO YOUR tiny_mce.js PATH -->
<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>

<!-- This script will open up the pop up window -->
<script type="text/javascript">
function PopupCenter(pageURL, title,w,h) {
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2);
var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
}
</script>

<!-- This script will open up the pop up window scrolling yes option -->
<script type="text/javascript">
function PopupCenter1(pageURL, title,w,h) {
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2);
var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
}
</script>
<style type="text/css">
/* main menu styles */
#nav {
    display:inline-block;
	font-size:17px;
	text-transform:capitalize;
    width:100%;
    margin:0px auto;
    padding:0;
	color:#CCC;
	margin-bottom:50px;
    background:#66C;

    border-radius:10px; /*some css3*/
    -moz-border-radius:10px;
    -webkit-border-radius:10px;
    box-shadow:0 2px 2px rgba(0,0,0, .5);
    -moz-box-shadow:0 2px 2px rgba(0,0,0, .5);
    -webkit-box-shadow:0 2px 2px rgba(0,0,0, .5);
}
#nav li {
    margin:10px;
    float:left;
    position:relative;
    list-style:none;
}
#nav a {
    font-weight:bold;
    color:#e7e5e5;
    text-decoration:none;
    display:block;
    padding:8px 20px;

    border-radius:10px; /*some css3*/
    -moz-border-radius:10px;
    -webkit-border-radius:10px;
    text-shadow:0 2px 2px rgba(0,0,0, .7);
}

/* selected menu element */
#nav .current a, #nav li:hover > a {
    background:url(../images/bg.png) repeat-x 0 -20px;
    color:#000;
    border-top:1px solid #f8f8f8;

    box-shadow:0 2px 2px rgba(0,0,0, .7); /*some css3*/
    -moz-box-shadow:0 2px 2px rgba(0,0,0, .7);
    -webkit-box-shadow:0 2px 2px rgba(0,0,0, .7);
    text-shadow:0 2px 2px rgba(255,255,255, 0.7);
}

/* sublevels */
#nav ul li:hover a, #nav li:hover li a {
    background:none;
    border:none;
    color:#000;
}
#nav ul li a:hover {
    background:#66C;
    color:#fff;

    border-radius:10px; /*some css3*/
    -moz-border-radius:10px;
    -webkit-border-radius:10px;
    text-shadow:0 2px 2px rgba(0,0,0, 0.7);
}

#nav ul li:first-child > a {
    -moz-border-radius-topleft:10px; /*some css3*/
    -moz-border-radius-topright:10px;
    -webkit-border-top-left-radius:10px;
    -webkit-border-top-right-radius:10px;
}
#nav ul li:last-child > a {
    -moz-border-radius-bottomleft:10px; /*some css3*/
    -moz-border-radius-bottomright:10px;
    -webkit-border-bottom-left-radius:10px;
    -webkit-border-bottom-right-radius:10px;
}

/* drop down */
#nav li:hover > ul {
    opacity:1;
    visibility:visible;
}
#nav ul {
    opacity:0;
    visibility:hidden;
    padding:0;
    width:220px;
	margin:auto;
    position:absolute;
    background:#66C;
    border:1px solid #7788aa;

    border-radius:10px; /*some css3*/
    -moz-border-radius:10px;
    -webkit-border-radius:10px;
    box-shadow:0 2px 2px rgba(0,0,0, .5);
    -moz-box-shadow:0 2px 2px rgba(0,0,0, .5);
    -webkit-box-shadow:0 2px 2px rgba(0,0,0, .5);

    -moz-transition:opacity .25s linear, visibility .1s linear .1s;
    -webkit-transition:opacity .25s linear, visibility .1s linear .1s;
    -o-transition:opacity .25s linear, visibility .1s linear .1s;
    transition:opacity .25s linear, visibility .1s linear .1s;
}
#nav ul li {
    float:none;
    margin:0;
}
#nav ul a {
    font-weight:normal;
    text-shadow:0 2px 2px rgba(255,255,255, 0.7);
}
#nav ul ul {
    left:200px;
    top:0px;
}
</style>
</head>

<body>
<div id="header"></div>
<div id="wrapper">
  <div id="left">
    <a style="background-color:#F4E1A2; color:#7A770A; font-size:14px; font-weight:bold; border:1px solid #7A770A; margin:10px; padding:7px; display:block; text-align:center; text-decoration:none; letter-spacing:1px;" href="index.php">HOME</a><hr />
    <ul id="nav">
      	<li>Home            
       <ul>
       
       <li><a href="">Welcome Text</a>
       <ul>
       <li><a href="index.php?option=ourservice_add" title="add content page data">Add New Content</a></li>
        <li><a href="index.php?option=ourservice_view&search=ALL" title="view content page data">View New Content</a></li>
       </ul>
       </li>
       <li><a href="">PACKAGING INDUSTRIES</a>
       <ul>
       <li><a href="index.php?option=slider_add" title="add content page data">Add New Content</a></li>
        <li><a href="index.php?option=slider_view&search=ALL" title="view content page data">View New Content</a></li>
       </ul>
       </li>
       
       
       
       <!--<li><a href="">Satiesfied client words</a>
       <ul>
		 <li><a href="index.php?option=home_add" title="add content page data">Add New Content</a></li>
        <li><a href="index.php?option=home_view&search=ALL" title="view content page data">View New Content</a></li>
	  </ul>
       </li>-->
       	  </ul>
          <li>What we Stand For
          <ul>
          <li><a href="#">Images</a>
          
                 
       <ul>
		<li><a href="index.php?option=emp_add" title="add content page data">Add New Content</a></li>
        <li><a href="index.php?option=emp_view&search=ALL" title="view content page data">View New Content</a></li>
         
         </ul>
         </li>
         <li><a href="#">What we Stand For Content</a>
              
       <ul>
		<li><a href="index.php?option=gi_add" title="add content page data">Add New Content</a></li>
        <li><a href="index.php?option=gi_view&search=ALL" title="view content page data">View New Content</a></li>
	  </ul>
         </li>
	 </ul> 
	</li>
        <li>About Us            
       <ul>
       
       
       <li><a href="index.php?option=welcome_text_add" title="add content page data">Add New Content</a></li>
        <li><a href="index.php?option=welcome_text_view&search=ALL" title="view content page data">View Content</a></li>
        
   
	  </ul>    
	</li>
   
    <li>Why Us      
       <ul>
		<li><a href="index.php?option=servi_add" title="add content page data">Add New Content</a></li>
        <li><a href="index.php?option=servi_view&search=ALL" title="view content page data">View New Content</a></li>
	  </ul>    
	</li>
    <li>Downloads     
       <ul>
		<li><a href="index.php?option=pro_add" title="add content page data">Add New Content</a></li>
        <li><a href="index.php?option=pro_view&search=ALL" title="view content page data">View New Content</a></li>
	  </ul>    
	</li>
   <!-- <li>Training Methodology    
       <ul>
		<li><a href="index.php?option=uppro_add" title="add content page data">Add New Content</a></li>
        <li><a href="index.php?option=uppro_view&search=ALL" title="view content page data">View New Content</a></li>
	  </ul>    
	</li>-->
    
    
    
    
    
     <li>Contact Us           
       <ul>
		<li><a href="index.php?option=contact_add" title="add content page data">Add New Content</a></li>
     <li><a href="index.php?option=contact_view&search=ALL" title="view content page data">View New Content</a></li>
	  </ul>    
	</li>


    
              <li>Miscellaneous
        <ul>
          <li><a href="index.php?option=password" title="To change the admin password">Change Password</a></li>
          <li><a href="logout.php" title="to logout of admin panel">Logout</a></li>
        </ul>
      </li>

                 	        
          </ul>
</div>
<div id="right">