<?php function small($name,$w,$h)
{
	$original = imagecreatefromjpeg($name) or die("Error Opening original");
	list($width, $height, $type, $attr) = getimagesize($name);
	if($width > $height)
	{	
		$newWidth = $h;
		$newHeight = $w;
	}
	else
	{
		$newWidth = $w;
		$newHeight = $h;
	}
	// Resample the image.
	$tempImg = imagecreatetruecolor($newWidth, $newHeight) or die("Cant create temp image");
	imagecopyresized($tempImg, $original, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height) or die("Cant resize copy");
	
    // Create the new file name.
	$newName = $name;
	
    // Save the image.
	imagejpeg($tempImg, "$newName", 90) or die("Cant save image");
	
    // Clean up.
	imagedestroy($original);
	imagedestroy($tempImg);
	return true;
}?>