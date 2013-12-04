<?php
	session_start();
	
	require_once 'PHPTAL/PHPTAL.php';
	require_once 'PDOConnection.php';
	
	// create a new template object
	if ($_SESSION["UID"] != "")
	{
		$pathHTML = '../Template/EditSimByPrice.html';
		$UserName = $_SESSION["UID"];
	}
	
	if (!isset($_POST["fromprice"]))
	{
		$_POST["fromprice"] = null;		
	}
	if (!isset($_POST["idNetwork_"]))
	{
		$_POST["idNetwork_"] = null;		
	}
	if (!isset($_POST["toprice"]))
	{
		$_POST["toprice"] = null;		
	}
	$FromPrice = $_POST["fromprice"];
	$ToPrice = $_POST["toprice"];
	$IDNetwork = $_POST["idNetwork_"];
	
	$template = new PHPTAL($pathHTML);	
	$connetionPDO = new PDOConnection();	
	
	if ($FromPrice != "")
	{
		$result = $connetionPDO->updatePricebyPrice($FromPrice, $ToPrice, $IDNetwork);		
		if ($result == true)
		{
			$PHP_SELF = "../Command/thongbao.php?msg=2";
			header("Location: $PHP_SELF");
		}
	}
	
	$ListOrder = $connetionPDO->findOrder(0,10);
	$PhoneNumberHotLine = $connetionPDO->findPhoneHotNumber();
		
	$Networks = $connetionPDO-> findAllNetwork();
	
	$template->UserName = $UserName;
	$template->title = 'Danh Sách Sim Số ';	
	$template->ListOrder = $ListOrder;
	$template->PhoneNumberHotLine = $PhoneNumberHotLine;
	$template->Networks = $Networks;
	
	try {
		echo $template->execute();
	}
	catch (Exception $e){
		echo $e;
	}
?>