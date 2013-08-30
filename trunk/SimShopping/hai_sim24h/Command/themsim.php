<?php
	session_start();
	
	require_once 'PHPTAL/PHPTAL.php';
	require_once 'PDOConnection.php';
		
	$template = new PHPTAL('../Template/ThemSim.html');
	
	$connetionPDO = new PDOConnection();
	
	if ($_SESSION["UID"] != "")
	{		
		$UserName = $_SESSION["UID"];
	}
	if (!isset($_POST["NewSimNumber"]))
	{
		$_POST["NewSimNumber"] = null;
	}
	if (!isset($_POST["idCategory_"]))
	{
		$_POST["idCategory_"] = null;
	}
	
	$NewSimNumber = $_POST['NewSimNumber'];	
	
	if ($NewSimNumber != null)
	{
		$len = strlen($NewSimNumber); 
		
		if ($len >= 10)
		{			
			$result = $connetionPDO->InsertPhoneNumber($NewSimNumber, $_POST['FormatSimNumber'], $_POST['SalePrice'],$_POST["idCategory_"] ); 			
			if( $result == true )
			{	
				$result = $connetionPDO->insertCurrentNumberHot();
				$PHP_SELF = "../index.php?num=$NewSimNumber&page=1";
				header("Location: $PHP_SELF");			
			}
		}		
	}
	
	$ListOrder = $connetionPDO->findOrder(0,10);
	$PhoneNumberHotLine = $connetionPDO->findPhoneHotNumber();
	$Categorys = $connetionPDO->findAllCategory();
	
	$template->Categorys = $Categorys;	
	$template->UserName = $UserName;	
	$template->title = 'Danh Sách Sim Số ';
	$template->ListOrder = $ListOrder;
	$template->PhoneNumberHotLine = $PhoneNumberHotLine; 	
	try {
		echo $template->execute();
	}
	catch (Exception $e){
		echo $e;
	}				
?>