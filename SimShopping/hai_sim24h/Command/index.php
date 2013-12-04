<?php
	session_start();
	
	require_once 'PHPTAL/PHPTAL.php';	
	require_once 'PDOConnection.php';
	
	$template = new PHPTAL('../Template/login.html');	
	$connetionPDO = new PDOConnection();
	$ListOrder = $connetionPDO->findOrder(0,10);
	$PhoneNumberHotLine = $connetionPDO ->findPhoneNumber(0,5);
	
	$template->title = 'Đăng nhập Sim Số ';	
	$template->ListOrder = $ListOrder;
	$template->PhoneNumberHotLine = $PhoneNumberHotLine; 	
	try {
		echo $template->execute();
	}
	catch (Exception $e){
		echo $e;
	}				
?>