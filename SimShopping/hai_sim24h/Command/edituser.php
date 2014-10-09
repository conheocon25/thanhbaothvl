<?php
	session_start();
	
	require_once 'PHPTAL/PHPTAL.php';
	require_once 'PDOConnection.php';
	
	// create a new template object	
	$template = new PHPTAL('../Template/changepass.html');	
	
	$connetionPDO = new PDOConnection();
	
	if ($_SESSION["UID"] != "")
	{		
		$UserName = $_SESSION["UID"];
		$Users = $connetionPDO->findUserbyID($UserName);
	}

	if (!isset($_POST['idusername']))
	{
		$_POST['idusername'] = null;
	}
	
	if ($_POST['idusername'] != "")
	{		
		$result = $connetionPDO->updateUserbyID($_POST['username'], $_POST['newpass'], $_POST['fullname'],$_POST['idusername']);
		if($result == true)
		{
			$_SESSION["UID"] = null;
			$PHP_SELF = "../admin_hns";
			header("Location: $PHP_SELF");
		}
	}	
	
	
	
	$ListOrder = $connetionPDO->findOrder(0,10);
	$Categorys = $connetionPDO->findAllCategory();
	$PhoneNumberHotLine = $connetionPDO->findPhoneHotNumber();
	
	$template->UserName = $UserName;	
	$template->title = 'Danh Sách Sim Số ';
	$template->Users = $Users;
	$template->Categorys = $Categorys;	
	$template->ListOrder = $ListOrder;
	$template->PhoneNumberHotLine = $PhoneNumberHotLine;
	
	try {
		echo $template->execute();
	}
	catch (Exception $e){
		echo $e;
	}
?>