<?php

function getFileName ($month, $year) 
{
	//convert month to string and get new json file name
	return "{$year}" . "-" . sprintf("%02s", $month) . ".json";
}

function getNewDate(&$month, &$year)
{
	//entering previous year
	if ($month == 1) { 
		$month = 12;
		$year--;
	}
	
	else {
		$month--;
	}
	
	return;
}

?>
