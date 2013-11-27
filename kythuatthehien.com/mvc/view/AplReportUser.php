<?php	
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/AplReportUser.html");
	echo $Viewer->pdf();
?>
