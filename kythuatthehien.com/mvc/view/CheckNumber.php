<?php	
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();
		
	$Result = $request->getProperty('Result');	
	echo json_encode($Result);
?>
