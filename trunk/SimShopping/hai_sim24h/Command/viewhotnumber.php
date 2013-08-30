<?php
	session_start();
	
	require_once 'PHPTAL/PHPTAL.php';
	require_once 'PDOConnection.php';
	
	// create a new template object
	
	$pathHTML = '../Template/ViewHotNumberAdmin.html';
	$UserName = $_SESSION["UID"];
	$template = new PHPTAL($pathHTML);	
	$connetionPDO = new PDOConnection();
	
	if (!isset($_GET['id']))
	{
		$_GET['id'] = null;
	}
	if ($_GET['id'] != "")
	{			
		$connetionPDO->deletePhoneHotNumber($_GET['id']);		
	}
	
	$ViewHotNumber = $connetionPDO->findAllPhoneHotNumber();			
	
	$ListOrder = $connetionPDO->findOrder(0,10);
	$PhoneNumberHotLine = $connetionPDO->findPhoneHotNumber();
	
	$template->UserName = $UserName;
	$template->title = 'Danh Sách Sim Số Hot Mới Về';
	$template->ViewHotNumber = $ViewHotNumber;
	$template->ListOrder = $ListOrder;
	$template->PhoneNumberHotLine = $PhoneNumberHotLine;
	
	try {
		echo $template->execute();
	}
	catch (Exception $e){
		echo $e;
	}
?>