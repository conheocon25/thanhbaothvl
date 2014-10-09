<?php
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/AplNews.html");
	echo $Viewer->html();
?>
