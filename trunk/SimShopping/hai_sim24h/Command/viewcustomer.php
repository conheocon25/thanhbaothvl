<?php
	session_start();
	
	require_once 'PHPTAL/PHPTAL.php';
	require_once 'PDOConnection.php';
	
	// create a new template object
	if ($_SESSION["UID"] != "")
	{
		$pathHTML = '../Template/ViewCustomer.html';
		$UserName = $_SESSION["UID"];
	}
	
	$template = new PHPTAL($pathHTML);	
	$connetionPDO = new PDOConnection();
	
	if (!isset($_GET['id']))
	{
		$_GET['id'] = null;
	}	
	
		$ViewOrder = $connetionPDO->findViewCustomerByID($_GET['id']);
		$backcmd = "../Command/totalincome.php";
		$cmdtext="Chấp Nhận Đặt Hàng";
	
	
	$ListOrder = $connetionPDO->findOrder(0,10);
	$PhoneNumberHotLine = $connetionPDO->findPhoneHotNumber();
	
	$template->cmdtext = $cmdtext;
	$template->UserName = $UserName;
	$template->title = 'Xem Thông tin Khách Hàng';
	$template->ViewOrders = $ViewOrder;
	$template->backcmd = $backcmd;
	$template->ListOrder = $ListOrder;
	$template->PhoneNumberHotLine = $PhoneNumberHotLine;
	
	try {
		echo $template->execute();
	}
	catch (Exception $e){
		echo $e;
	}
?>