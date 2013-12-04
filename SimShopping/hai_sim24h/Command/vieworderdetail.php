<?php
	session_start();
	
	require_once 'PHPTAL/PHPTAL.php';
	require_once 'PDOConnection.php';
	
	// create a new template object
	if ($_SESSION["UID"] != "")
	{
		$pathHTML = '../Template/ViewOrderDetailAdmin.html';
		$UserName = $_SESSION["UID"];
	}
	else
	{
		$pathHTML = '../Template/ViewOrderDetail.html';
		$UserName = "";
	}
	
	$template = new PHPTAL($pathHTML);	
	$connetionPDO = new PDOConnection();
	
	if (!isset($_GET['id']))
	{
		$_GET['id'] = null;
	}	
	if (!isset($_GET['type']))
	{
		$_GET['type'] = null;
	}
	$Type = $_GET['type'];
		
	if ( $Type == 1 && $_GET['id'] != "")
	{
		$ViewOrder = $connetionPDO->findViewOrderByID($_GET['id']);
		$backcmd = "../Command/vieworder.php";
		$cmdtext="Chấp Nhận Bán";
	}
	if ( $Type == 0 && $_GET['id'] != "")
	{
		$ViewOrder = $connetionPDO->findViewOrderOtherByID($_GET['id']);
		$backcmd = "../Command/vieworderother.php";
		$cmdtext="Chấp Nhận Đặt Hàng";
	}
	
	$ListOrder = $connetionPDO->findOrder(0,10);
	$PhoneNumberHotLine = $connetionPDO->findPhoneHotNumber();
	
	$template->cmdtext = $cmdtext;
	$template->UserName = $UserName;
	$template->title = 'Xem Thông tin Khách Hàng ';
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