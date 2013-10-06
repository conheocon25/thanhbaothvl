<?php
	session_start();
	
	require_once 'Command/PHPTAL/PHPTAL.php';
	require_once 'Command/PDOConnection.php';
	require_once 'Command/page.php';
	require_once 'Command/getpage.php';
	
	///------------------------------------------------------------------------------------------------------------------------------------------------
	$connetionPDO = new PDOConnection();
	
	// create a new template object
	if (!isset($_SESSION["UID"]))
	{
		$_SESSION["UID"] = null;
	}
	
	if ($_SESSION["UID"] != "")
	{
		$pathHTML = 'Template/indexAdmin.html';
		$UserName = $_SESSION["UID"];
	}
	else
	{
		$pathHTML = 'Template/index.html';
		$UserName = "";
		
	}
	
	$template = new PHPTAL($pathHTML);	
	
	//--------------------------------------------------------------------------------------------------------------------------------------------------
	$template->currentpage = $currentpage;
	$template->title = $tilte;	
	$template->UserName = $UserName;
	$template->PhoneNumbers = $PhoneNumber;	
	$template->ListOrder = $ListOrder;	
	$template->PhoneNumberHotLine = $PhoneNumberHotLine; 	
	
	try {
		echo $template->execute();
	}
	catch (Exception $e){
		echo $e;
	}				
?>