<?php
	session_start();
	
	require_once 'PHPTAL/PHPTAL.php';
	require_once 'PDOConnection.php';
	
	// create a new template object	
	$template = new PHPTAL('../Template/EditNumber.html');	
	
	$connetionPDO = new PDOConnection();
	
	if ($_SESSION["UID"] != "")
	{		
		$UserName = $_SESSION["UID"];
	}
	
	if (!isset($_GET['idnumber']))
	{
		$_GET['idnumber'] = null;
	}
	if ($_GET['idnumber'] != "")
	{	
		$phone = $connetionPDO->findPhoneNumberbyID($_GET['idnumber']);
	}
	else
	{	
		$phone = null;
	}
	if (!isset($_GET['delnumber']))
	{
		$_GET['delnumber'] = null;
	}
	if ($_GET['delnumber'] != "")
	{		
		$result = $connetionPDO->deletePhoneNumberbyID($_GET['delnumber']);
		if($result == true)
		{
			$PHP_SELF = "../index.php";
			header("Location: $PHP_SELF");
		}
	}
	
	if (!isset($_POST['currentIdNumber']))
	{
		$_POST['currentIdNumber'] = null;
	}
	
	if ($_POST['currentIdNumber'] != "")
	{			
		$result = $connetionPDO->updatePhoneNumberbyID($_POST['phoneformatnumber'], $_POST['phoneprice'], $_POST['phonestate'],$_POST['currentIdCategory'], $_POST['phonenumber'], $_POST['currentIdNumber']);
		if($result == true)
		{
			$PHP_SELF = "../index.php";
			header("Location: $PHP_SELF");
		}
	}	
	
	$ViewOrder = $connetionPDO->findAllViewOrder();			
	
	$ListOrder = $connetionPDO->findOrder(0,10);
	$Categorys = $connetionPDO->findAllCategory();
	$PhoneNumberHotLine = $connetionPDO->findPhoneHotNumber();
	
	$template->UserName = $UserName;	
	$template->title = 'Danh Sách Sim Số ';
	$template->ViewOrder = $ViewOrder;
	$template->Categorys = $Categorys;
	$template->PhoneNumber = $phone;
	$template->ListOrder = $ListOrder;
	$template->PhoneNumberHotLine = $PhoneNumberHotLine;
	
	try {
		echo $template->execute();
	}
	catch (Exception $e){
		echo $e;
	}
?>