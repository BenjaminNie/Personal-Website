<?php

function getFileName ($month, $year) 
{
	//convert month to string and get new json file name
	return "{$currentYear}" . "-" . sprintf("%02s", $currentMonth) . ".json";
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
