<?php	
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/ReportPondPrintGeneral.html");
	echo $Viewer->pdf();
?>
