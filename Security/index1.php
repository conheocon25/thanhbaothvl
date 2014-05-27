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
	
	$d1 = explode(' ', "27/05/2014 4:33:33 CH");
	echo $d1[1];
	echo "<br />"; 
	$MDate1 = new Date($d1[0]);
	$time1 = explode(':', $d1[1]);
	$todaytime = new \DateTime();
	$strd = $todaytime->format('d/m/Y H:i:s');	
	echo $strd; 
	echo "<br />"; 	
	
	echo isPast($d1[0]);
?>


