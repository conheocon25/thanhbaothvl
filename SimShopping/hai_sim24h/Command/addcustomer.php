<?php
	session_start();
	
	require_once 'PHPTAL/PHPTAL.php';
	require_once 'PDOConnection.php';
		
	$template = new PHPTAL('../Template/GioHang.html');
	$connetionPDO = new PDOConnection();
	
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
	
	if( !isset($_GET['idnumber']))
	{	
		$_GET['idnumber'] = null;
	}
	
	if( !isset($_GET['delete']))
	{	
		$_GET['delete'] = null;
	}
	
	if( !isset($_POST['payhoten']))
	{	
		$_POST['payhoten'] = null;
	}
	
	if( !isset($_POST['paynumber']))
	{	
		$_POST['paynumber'] = null;
	}
	
	$IdNumber = $_GET['idnumber'];
	$IdNumberDelete = $_GET['delete'];
	
	$payHoTen = $_POST['payhoten'];
	$payNumber = $_POST['paynumber'];	
	
	if ($IdNumber != "")
	{		
		$PhoneNumber = $connetionPDO->findPhoneNumberbyIdNumber($IdNumber);		
		if ($PhoneNumber[0]->id != "")
		{
			$CartId = $PhoneNumber[0]->id;
			$CartFormatNumber = $PhoneNumber[0]->formatnumber;
			$CartNumber = $PhoneNumber[0]->number;
			$CartPrice = number_format($PhoneNumber[0]->price,0,',','.');
			$CartDeleteLinked = "addcustomer.php?delete=".$PhoneNumber[0]->id;
		}
	}	
	else
	{
		$PhoneNumber = null;
	}
	
	if (($payHoTen != "") && ($payNumber != "") && ($txterror==""))
	{		
		//$address = "Số ".$_POST['txtSoNha'].", ".$_POST['txtPhuongXa'].", ".$_POST['txtQuanHuyen'].", ".$_POST['cboTinhThanh'];
		$address = "Số ".$_POST['DiaChiGiaoHang'].", ".$_POST['cboQuanHuyen'].", ".$_POST['cboTinhThanh'];
		$result = $connetionPDO->insertCustomer($payHoTen, $_POST['paydienthoai'], $address, $_POST['payemail'].$_POST['payghichu']) ;	
		if( $result == true )
		{	
			$resultcart = $connetionPDO->insertOrder($payNumber, 1, $_POST['payghichu']) ;
			if($resultcart == true)
			{
				$PHP_SELF = "../Command/thongbao.php?msg=1";
				header("Location: $PHP_SELF");
			}
		}		
	}
	else
	{
		if ($payNumber != "")
		{
			$PHP_SELF = "../Command/addcustomer.php?idnumber=".$payNumber;
			header("Location: $PHP_SELF");					
		}		
	}
	
	if ($IdNumberDelete != "")
	{
		$PHP_SELF = "../index.php";
		header("Location: $PHP_SELF");
	}
	
	$ListOrder = $connetionPDO->findOrder(0,10);
	$PhoneNumberHotLine = $connetionPDO->findPhoneHotNumber();
	
	$template->title = 'Danh Sách Sim Số ';	
	$template->txterror = $txterror;
	$template->ListOrder = $ListOrder;
	$template->CartId = $CartId;
	$template->CartNumber = $CartNumber;
	$template->CartFormatNumber = $CartFormatNumber;
	$template->CartPrice = $CartPrice;	
	$template->CartDeleteLinked = $CartDeleteLinked;
	$template->PhoneNumbers = $PhoneNumber;	
	$template->PhoneNumberHotLine = $PhoneNumberHotLine; 
	
	
	try {
		echo $template->execute();
	}
	catch (Exception $e){
		echo $e;
	}				
?>