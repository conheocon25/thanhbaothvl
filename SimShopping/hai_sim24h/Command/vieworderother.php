<?php
	session_start();
	
	require_once 'PHPTAL/PHPTAL.php';
	require_once 'PDOConnection.php';
	
	// create a new template object
	if ($_SESSION["UID"] != "")
	{
		$pathHTML = '../Template/ViewOrderAdmin.html';
		$UserName = $_SESSION["UID"];
	}
	else
	{
		$pathHTML = '../Template/ViewOrder.html';
		$UserName = "";
	}
	
	$template = new PHPTAL($pathHTML);	
	$connetionPDO = new PDOConnection();
	
	if (!isset($_GET['idorder']))
	{
		$_GET['idorder'] = null;
	}
	
	if (!isset($_GET['idorderdel']))
	{
		$_GET['idorderdel'] = null;
	}
	
	if ($_GET['idorder'] != "")
	{			
		$result = $connetionPDO->updateOrder($_GET['idorder']);	
		
	}
	
	if ($_GET['idorderdel'] != "")
	{			
		$result = $connetionPDO->deleteCustomer($_GET['idorderdel']);	
		if($result == true)
		{			
			$result = $connetionPDO->deleteOrder($_GET['idorderdel']);	
		}
	}
	$ViewOrder = $connetionPDO->findAllViewOrderOther();			
	
	$ListOrder = $connetionPDO->findOrder(0,10);
	$PhoneNumberHotLine = $connetionPDO->findPhoneHotNumber();
	
	$template->UserName = $UserName;
	$template->title = 'Danh Sách Sim Số Khách Hàng Đặt';
	$template->ViewOrder = $ViewOrder;
	$template->ListOrder = $ListOrder;
	$template->PhoneNumberHotLine = $PhoneNumberHotLine;
	
	try {
		echo $template->execute();
	}
	catch (Exception $e){
		echo $e;
	}
?>