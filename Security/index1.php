<?php

	require_once("Date.php" );
	function isPast($time)
	{
		return (strtotime($time) < time());
	}

	function isFuture($time)
	{
		return (strtotime($time) > time());
	}
	/*
	$d1 = explode(' ', "27/05/2014 4:33:33 CH");
	echo $d1[0] ." ". $d1[1];
	echo "<br />"; 
	$MDate1 = new Date($d1[0]);
	$time1 = explode(':', $d1[1]);
	*/
	$todaytime = new \DateTime();
	$todaytime->setTime(0, 0, 0);
	$strd = $todaytime->format('Y/m/d H:i:s');	

	$date = new \DateTime("2014/06/10 4:33:33");
	$date->setTime(0, 0, 0);
	echo $strd;

	$DateArray = explode(' ', "5/04/2014 11:33:33 CH");
	$CurDate = explode('/',$DateArray[0]);
	$CNewDate = $CurDate[2] . "/". $CurDate[1] . "/" . $CurDate[0] . " " . $DateArray[1];
	//Cong them 5h do lech muoi gio quoc te
	$interval = new \DateInterval('P0Y0DT5H0M');
	$todaytime = new \DateTime();	
	$todaytime->add($interval);
	//tao ngay từ rss	
	$date = new \DateTime($CNewDate);	
	echo $todaytime->diff($date)->format('%R%D%H');

	echo "<br />";
	if (($todaytime->diff($date)->format('%D') <= 0) && ($todaytime->diff($date)->format('%R') == '-')) {
		echo "OK";		
	}
	
?>


