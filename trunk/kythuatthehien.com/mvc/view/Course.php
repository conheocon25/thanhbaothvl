<?php
	require_once("mvc/base/Viewer.php");	
	$Viewer = new Viewer("mvc/templates/Course.html");
	echo $Viewer->html();
?>
