<?php
	require_once("mvc/base/Viewer.php");	
	$Viewer = new Viewer("mvc/templates/AplBackup.html");	
	echo $Viewer->html();
?>
