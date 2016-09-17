<?php
//This function will provide the date of birth pulldown and restriction for 18 year age
function dob_pulldown($name,$d='',$m='',$y='',$age_allowed=18)
{
	date_default_timezone_set('Asia/Kolkata');
	$stamp = time();
	$getdate = getdate($stamp);
	
	$months = array(1 => 'January','February','March','April','May','June','July','August','September','October','November','December');
	//pulldown for date starts here
	echo'Date:<select name="'.$name.'date">';
	echo'<option value=""></option>';
	for($date = 1; $date <= 31; $date++)
	{
		echo'<option value="'.$date.'"';if($d == $date) echo'selected="selected"'; echo'>'.$date.'</option>\n';
	}
	echo'</select>';
	
	//pulldown for month starts here
	echo' Month:<select name="'.$name.'month">';
	echo'<option value=""></option>';
	foreach($months as $key => $value)
	{
		echo'<option value="'.$key.'"';if($m == $key) echo'selected="selected"'; echo'>'.$value.'</option>\n';
	}
	echo'</select>';
	
	// pulldown for year starts here
	echo' Year:<select name="'.$name.'year">';
	echo'<option value=""></option>';
	for($year = 1930; $year <= ($getdate['year'] - $age_allowed); $year++)
	{
		echo'<option value="'.$year.'"';if($y == $year) echo'selected="selected"'; echo'>'.$year.'</option>\n';
	}
	echo'</select>';
}
?>