<?php
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/ReportEmployeeDetail.html");
	echo $Viewer->html();
?>
