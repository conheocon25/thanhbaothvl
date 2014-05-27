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
	$strd = $todaytime->format('Y/m/d H:i:s');	
	
	$date = new \DateTime("2014/05/27 4:33:33");
	echo $strd;
	echo "<br />";
	$trtr = $date->format('Y/m/d H:i:s');
	echo $trtr;
	echo "<br />";
	echo $todaytime->diff($date)->format('%R%D%H');
	if ($todaytime->diff($date)->format('%R') == '+') {
	  echo "OK";		
	}
	
	echo "<br />"; 	
	
	//echo isPast($d1[0]);
?>


