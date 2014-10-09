<?php
	session_start();
	
	require_once 'PHPTAL/PHPTAL.php';
	require_once 'PDOConnection.php';
	
	// create a new template object
	if ($_SESSION["UID"] != "")
	{
		$pathHTML = '../Template/DatsimAdmin.html';
		$UserName = $_SESSION["UID"];
	}
	else
	{
		$pathHTML = '../Template/Datsim.html';
		$UserName = "";
	}	
	
	if( !isset($_POST['txtCaptcha']))
	{	
		$_POST['txtCaptcha'] = null;
	}
	if( !isset($_SESSION['security_code']))
	{	
		$_SESSION['security_code'] = null;
	}
	
	if ($_POST["txtCaptcha"] != $_SESSION["security_code"])
	{
		$txterror = "Bạn phải nhập chính xác mã Xác nhận";
		
	}
	else
	{
		$txterror = "";
	}
	$template = new PHPTAL($pathHTML);
	
	$connetionPDO = new PDOConnection();
	
	if( !isset($_POST['ordersimnumber']))
	{	
		$_POST['ordersimnumber'] = null;
	}
	
	if( !isset($_POST['ordername']))
	{	
		$_POST['ordername'] = null;
	}
	
	$OrderSimNumber = $_POST['ordersimnumber'];
	$OrderName = $_POST['ordername'];	
	
	
	
	if (($OrderSimNumber != "") && ($OrderName != "") && ($txterror==""))
	{		
		
		$address = "Số ".$_POST['DiaChiGiaoHang'].", ".$_POST['cboQuanHuyen'].", ".$_POST['cboTinhThanh'];
		$result = $connetionPDO->insertCustomer($OrderName, $_POST['orderphone'], $address, $_POST['orderemail'].$_POST['ordernote']) ;	
		if( $result == true )
		{	
			$resultcart = $connetionPDO->insertOrder($OrderSimNumber, 0, $_POST['ordernote']) ;		
			$PHP_SELF = "../Command/thongbao.php?msg=1&num=".$OrderSimNumber;
			header("Location: $PHP_SELF");			
		}		
	}		
	$ListOrder = $connetionPDO->findOrder(0,10);
	$PhoneNumberHotLine = $connetionPDO->findPhoneHotNumber();
	//--------------------------------------------------------------------------------------------------------------------------------------------------
	$template->UserName = $UserName;
	$template->title = 'Danh Sách Sim Số ';	
	$template->ListOrder = $ListOrder;	
	$template->txterror = $txterror;
	$template->PhoneNumberHotLine = $PhoneNumberHotLine; 
	// execute the template
	try {
		echo $template->execute();
	}
	catch (Exception $e){
		echo $e;
	}				
?>