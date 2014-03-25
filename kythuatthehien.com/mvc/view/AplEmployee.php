<?php
	require_once("mvc/base/Viewer.php");	
	$Viewer = new Viewer("mvc/templates/AplEmployee.html");	
	echo $Viewer->html();
?>
