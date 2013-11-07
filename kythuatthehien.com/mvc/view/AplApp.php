<?php
	require_once("mvc/base/Viewer.php");	
	$Viewer = new Viewer("mvc/templates/AplApp.html");	
	echo $Viewer->html();
?>
