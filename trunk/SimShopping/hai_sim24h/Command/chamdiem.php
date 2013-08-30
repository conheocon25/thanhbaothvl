<?php
	session_start();
	
	require_once 'PHPTAL/PHPTAL.php';
	require_once 'PDOConnection.php';
	
	// create a new template object
	if ($_SESSION["UID"] != "")
	{
		$pathHTML = '../Template/ChamdiemAdmin.html';
		$UserName = $_SESSION["UID"];
	}
	else
	{
		$pathHTML = '../Template/Chamdiem.html';
		$UserName = "";
	}
	
	$template = new PHPTAL($pathHTML);
	
	$connetionPDO = new PDOConnection();
	
	$template->UserName = $UserName;
	$ListOrder = $connetionPDO->findOrder(0,10);
	$PhoneNumberHotLine = $connetionPDO->findPhoneHotNumber();
	
	$template->title = 'Danh Sách Sim Số ';	
	$template->ListOrder = $ListOrder;
	$template->PhoneNumberHotLine = $PhoneNumberHotLine; 	
	try {
		echo $template->execute();
	}
	catch (Exception $e){
		echo $e;
	}				
?>