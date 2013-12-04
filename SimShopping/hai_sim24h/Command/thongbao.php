<?php
	session_start();
	
	require_once 'PHPTAL/PHPTAL.php';
	require_once 'PDOConnection.php';
	
	// create a new template object
	if ($_SESSION["UID"] != "")
	{
		$pathHTML = '../Template/thongbao.html';
		$UserName = $_SESSION["UID"];
	}
	else
	{
		$pathHTML = '../Template/thongbao.html';
		$UserName = "";
	}	
	$thongbao ="Sim Số Đẹp Giá rẻ";
	$template = new PHPTAL($pathHTML);	
	$connetionPDO = new PDOConnection();
	if( !isset($_GET['num']))
	{	
		$_GET['num'] = null;
	}
	
	if( !isset($_GET['msg']))
	{	
		$_GET['msg'] = null;
	}
	else
	{		
		if ($_GET['msg'] == 1 )
		{
			$thongbao = "Quý Khách đã đặt Sim số: ".$_GET['num']. "! Thành công!";
		}		
		if ($_GET['msg'] == 2 )
		{
			$thongbao = "Bạn Đã Thay Đổi Giá Sim Thành Công!";
		}		
	}
	
	$ListOrder = $connetionPDO->findOrder(0,10);
	$PhoneNumberHotLine = $connetionPDO->findPhoneHotNumber();
	//--------------------------------------------------------------------------------------------------------------------------------------------------
	$template->UserName = $UserName;
	$template->title = 'Thông Báo';	
	$template->ListOrder = $ListOrder;	
	$template->txtthongbao = $thongbao;
	$template->PhoneNumberHotLine = $PhoneNumberHotLine; 
	// execute the template
	try {
		echo $template->execute();
	}
	catch (Exception $e){
		echo $e;
	}				
?>