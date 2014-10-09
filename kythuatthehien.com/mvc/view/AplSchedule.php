<?php
	require_once("mvc/base/Viewer.php");	
	$Viewer = new Viewer("mvc/templates/AplSchedule.html");	
	echo $Viewer->html();
?>
