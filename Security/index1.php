<?php
	
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


