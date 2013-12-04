<?php
	session_start();
	
	require_once 'PHPTAL/PHPTAL.php';
	require_once 'PDOConnection.php';
	
	// create a new template object
	if ($_SESSION["UID"] != "")
	{
		$pathHTML = '../Template/ViewTotalIncome.html';
		$UserName = $_SESSION["UID"];
	}
	
	if (!isset($_POST["fromdate"]))
	{
		$_POST["fromdate"] = null;
		$_POST["todate"] = null;
	}
	$FromDate = $_POST["fromdate"];
	$ToDate = $_POST["todate"];
	
	$template = new PHPTAL($pathHTML);	
	$connetionPDO = new PDOConnection();	
			
	$Totals = $connetionPDO->findTotalIncome($FromDate,$ToDate);
	$SumTotal = $connetionPDO->sumTotalIncome($FromDate,$ToDate);
	
	$ListOrder = $connetionPDO->findOrder(0,10);
	$PhoneNumberHotLine = $connetionPDO->findPhoneHotNumber();
	
	$template->Totals = $Totals;
	$template->SumTotal = "Tổng thu nhập: ". number_format($SumTotal,0,',','.') ." VNĐ";
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