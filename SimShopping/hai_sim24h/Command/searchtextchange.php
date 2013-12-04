<?php
	session_start();
	
	require_once 'PHPTAL/PHPTAL.php';
	require_once 'PDOConnection.php';
	
	///------------------------------------------------------------------------------------------------------------------------------------------------
	$connetionPDO = new PDOConnection();
		
	if (!isset($_POST["num"]))
	{
		$_POST["num"] = null;
	}
	$num = $_POST["num"];
	$Data = $connetionPDO->findNumberKeyDown($num, 0, 25);
	
	//echo json_encode($export);
	//echo json_encode($export);
	echo json_encode($Data);
?>