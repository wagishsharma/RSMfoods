<!-- This will keep the site wide settings -->
<?php
//For localhost environment.
if($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == 'localhost:8080')
{
	
	//define('home','c:\wamp\www\Arsh group\admin\user_upload\image'); 
	
	define('GALLERY_TEMP_FOLDER','c:\\wamp\\www\\aliste\\admin\\user_upload\\image'); // to hold gallery images temporary
	
	define('PICTURE_TEMP_FOLDER','c:\\wamp\\www\\aliste\\admin');   //product replaced by picture
	
	define('gallery','c:\wamp\www\aliste\admin\user_upload\gallery');
	define('img','C:\xampp\htdocs\SriRam\admin\upload\img');
	

	
	define('SYM','\\'); //use to hold the special symbol for dirctory navigation in windows
	
}
else
{
	//For online site
	define('PICTURE_TEMP_FOLDER','/home/vinti123/public_html/mnvsgroup.chemtech.in/admin/user_upload/images'); 
	define('GALLERY_TEMP_FOLDER','/home/vinti123/public_html/mnvsgroup.chemtech.in/admin/user_upload/gallery'); // to hold gallery images temporary
	//define('picture','/home/vinti123/public_html/thevedicastrology.in/admin/user_upload/images');
	define('PICTURE_TEMP_FOLDER','/home/vinti123/public_html/mnvsgroup.chemtech.in/admin/user_upload/images');
	define('picture','/home/vinti123/public_html/mnvsgroup.chemtech.in/admin/user_upload/picture');
	define('SYM','/'); //use to hold the special symbol for directory navigation in linux
}
?>
