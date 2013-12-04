<?php
	session_start();
	
	require_once 'Command/PHPTAL/PHPTAL.php';
	require_once 'Command/PDOConnection.php';
	require_once 'Command/page.php';
	require_once 'Command/getpage.php';
	
	///------------------------------------------------------------------------------------------------------------------------------------------------
	$connetionPDO = new PDOConnection();
	
	// create a new template object
	if (!isset($_SESSION["UID"]))
	{
		$_SESSION["UID"] = null;
	}
	
	if ($_SESSION["UID"] != "")
	{
		$pathHTML = 'Template/indexAdmin.html';
		$UserName = $_SESSION["UID"];
	}
	else
	{
		$pathHTML = 'Template/index.html';
		$UserName = "";
		
	}
	
	$template = new PHPTAL($pathHTML);	
	
	if (!isset($_POST["num"]))
	{
		$_POST["num"] = null;
	}	
	else
	{
		$SearchNumber = $_POST['num'];			
	}
	if (!isset($_GET["num"]))
	{
		$_GET["num"] = null;
	}
	else
	{
		$SearchNumber = $_GET['num'];		
	}
	
	if (!isset($_GET["SearchPrice"]))
	{
		$_GET["SearchPrice"] = null;
	}
	if (!isset($_GET["SearchNetwork"]))
	{
		$_GET["SearchNetwork"] = null;
	}	
	if (!isset($_GET["idcategory"]))
	{
		$_GET["idcategory"] = null;
	}
	if (!isset($_GET["page"]))
	{
		$_GET["page"] = 1;
	}
	
	
	
	$SearchPrice = $_GET['SearchPrice'];
	$SearchNetwork = $_GET['SearchNetwork'];	
	$idcategory = $_GET['idcategory'];
	///----Phân trang-----------------------------------------------------------------------------------------------------------------------------------
	$currentpage = $_GET['page'];
	$toSearch = 25;
	$fromSearch = ($currentpage*25) - 25;
	///------------------------------------------------------------------------------------------------------------------------------------------------
		
	if ($SearchPrice != null)
	{
		
		switch ($SearchPrice)
		{
			case '01':	
				$count = $connetionPDO->countPhoneNumberbyPrice(0,500000);	
				if($count > 0)
				{
					$totalpage = getTotalPage($count);
					$LinkPage = getPage($currentpage, $totalpage,"index.php?SearchPrice=".$SearchPrice);
					$LastLinked = getLastLinked($totalpage, "index.php?SearchPrice=".$SearchPrice);
					$FirstLinked = getFirstLinked("index.php?SearchPrice=".$SearchPrice);
					$PhoneNumber = $connetionPDO->findPhoneNumberbyPrice(0,500000,$fromSearch,$toSearch);
				}
				$tilte = "Danh sách sim giá < 500.000 đồng";
			break;
			case '02':
				$count = $connetionPDO->countPhoneNumberbyPrice(500000,1000000);							
				if($count > 0)
				{
					$totalpage = getTotalPage($count);
					$LinkPage = getPage($currentpage, $totalpage,"index.php?SearchPrice=".$SearchPrice);
					$LastLinked = getLastLinked($totalpage, "index.php?SearchPrice=".$SearchPrice);
					$FirstLinked = getFirstLinked("index.php?SearchPrice=".$SearchPrice);		
					$PhoneNumber = $connetionPDO->findPhoneNumberbyPrice(500000, 1000000, $fromSearch,$toSearch);
				}
					$tilte = "Danh sách Sim giá từ 500.000 đồng - 1.000.000 đồng";
			break;
			case '03':
				$count = $connetionPDO->countPhoneNumberbyPrice(1000000,3000000);
				if($count > 0)
				{
					$totalpage = getTotalPage($count);
					$LinkPage = getPage($currentpage, $totalpage,"index.php?SearchPrice=".$SearchPrice);
					$LastLinked = getLastLinked($totalpage, "index.php?SearchPrice=".$SearchPrice);
					$FirstLinked = getFirstLinked("index.php?SearchPrice=".$SearchPrice);
					$PhoneNumber = $connetionPDO->findPhoneNumberbyPrice(1000000, 3000000, $fromSearch,$toSearch);
				}
				$tilte = "Danh sách Sim giá từ 1.000.000 đồng - 3.000.000 đồng";					
			break;
			case '04':
				$count = $connetionPDO->countPhoneNumberbyPrice(3000000,5000000);							
				if($count > 0)
				{
					$totalpage = getTotalPage($count);
					$LinkPage = getPage($currentpage, $totalpage,"index.php?SearchPrice=".$SearchPrice);
					$LastLinked = getLastLinked($totalpage, "index.php?SearchPrice=".$SearchPrice);
					$FirstLinked = getFirstLinked("index.php?SearchPrice=".$SearchPrice);
					$PhoneNumber = $connetionPDO->findPhoneNumberbyPrice(3000000, 5000000, $fromSearch,$toSearch);
				}
				$tilte = "Danh sách Sim giá từ 3.000.000 đồng - 5.000.000 đồng";
			break;
			case '05':
				$count = $connetionPDO->countPhoneNumberbyPrice(5000000,10000000);							
				if($count > 0)
				{
					$totalpage = getTotalPage($count);
					$LinkPage = getPage($currentpage, $totalpage,"index.php?SearchPrice=".$SearchPrice);
					$LastLinked = getLastLinked($totalpage, "index.php?SearchPrice=".$SearchPrice);
					$FirstLinked = getFirstLinked("index.php?SearchPrice=".$SearchPrice);
					$PhoneNumber = $connetionPDO->findPhoneNumberbyPrice(5000000, 10000000, $fromSearch,$toSearch);
				}
				$tilte = "Danh sách Sim giá từ 5.000.000 đồng - 10.000.000 đồng";					
			break;
			case '06':
				$count = $connetionPDO->countPhoneNumberbyPrice(10000000,30000000);							
				if($count > 0)
				{
					$totalpage = getTotalPage($count);
					$LinkPage = getPage($currentpage, $totalpage,"index.php?SearchPrice=".$SearchPrice);
					$LastLinked = getLastLinked($totalpage, "index.php?SearchPrice=".$SearchPrice);
					$FirstLinked = getFirstLinked("index.php?SearchPrice=".$SearchPrice);
					$PhoneNumber = $connetionPDO->findPhoneNumberbyPrice(10000000, 30000000, $fromSearch,$toSearch);
				}
				$tilte = "Danh sách Sim giá từ 10.000.000 đồng - 30.000.000 đồng";				
			break;
			case '07':
				$count = $connetionPDO->countPhoneNumberbyPrice(30000000,50000000);							
				if($count > 0)
				{
					$totalpage = getTotalPage($count);
					$LinkPage = getPage($currentpage, $totalpage,"index.php?SearchPrice=".$SearchPrice);
					$LastLinked = getLastLinked($totalpage, "index.php?SearchPrice=".$SearchPrice);
					$FirstLinked = getFirstLinked("index.php?SearchPrice=".$SearchPrice);
					$PhoneNumber = $connetionPDO->findPhoneNumberbyPrice(30000000, 50000000, $fromSearch,$toSearch);
				}
				$tilte = "Danh sách Sim giá từ 30.000.000 đồng - 50.000.000 đồng";
			break;
			case '08':
				$count = $connetionPDO->countPhoneNumberbyPrice(50000000,50000000000, $fromSearch,$toSearch);							
				if($count > 0)
				{
					$totalpage = getTotalPage($count);
					$LinkPage = getPage($currentpage, $totalpage,"index.php?SearchPrice=".$SearchPrice);
					$LastLinked = getLastLinked($totalpage, "index.php?SearchPrice=".$SearchPrice);
					$FirstLinked = getFirstLinked("index.php?SearchPrice=".$SearchPrice);
					$PhoneNumber = $connetionPDO->findPhoneNumberbyPrice(50000000, 5000000000, $fromSearch,$toSearch);
				}
				$tilte = "Danh sách Sim giá từ 50.000.000 đồng trở lên";
				
			break;
			default:
				$tilte = "Danh sách Sim";
			break;
		}		
	}
		
	if ($idcategory != null)
	{
		$count = $connetionPDO->countPhoneNumberbyIdCategory($idcategory);
		
		if($count > 0)
		{
			$totalpage = getTotalPage($count);
			$LastLinked = getLastLinked($totalpage, "index.php?idcategory=".$idcategory);
			$FirstLinked = getFirstLinked("index.php?idcategory=".$idcategory);
			$LinkPage = getPage($currentpage, $totalpage,"index.php?idcategory=".$idcategory);		
			$PhoneNumber = $connetionPDO->findPhoneNumberbyIdCategory($idcategory, $fromSearch,$toSearch);
		}
		else
		{
			$LinkPage=null;
			$PhoneNumber = null;
			$LastLinked = null;
			$FirstLinked = null;
		}
		switch ($idcategory)
		{
			case '1':				
				$tilte = "Sim Số Đẹp Giá Rẻ - Đẹp Tự Nhiên";
			break;
			case '2':				
				$tilte = "Sim Số Đẹp Giá Rẻ - Ngũ-Lục-Quý";
			break;
			case '3':				
				$tilte = "Sim Số Đẹp Giá Rẻ - Tứ Quý";				
			break;
			case '4':				
				$tilte = "Sim Số Đẹp Giá Rẻ - Taxi";				
			break;			
			case '5':				
				$tilte = "Sim Số Đẹp Giá Rẻ - Tam Hoa";				
			break;
			case '6':				
				$tilte = "Sim Số Đẹp Giá Rẻ - Số Tiến";				
			break;			
			case '7':
				$tilte = "Sim Số Đẹp Giá Rẻ - Lộc Phát";				
			break;
			case '8':
				$tilte = "Sim Số Đẹp Giá Rẻ - Thần Tài";				
			break;
			case '9':
				$tilte = "Sim Số Đẹp Giá Rẻ - Gánh Lặp Kép";				
			break;
			case '10':
				$tilte = "Sim Số Đẹp Giá Rẻ - Năm Sinh";				
			break;
			case '11':
				$tilte = "Sim Số Đẹp Giá Rẻ - Dễ Nhớ Độc Đáo";				
			break;
			case '12':				
				$tilte = "Sim Số Đẹp Giá Rẻ - Thổ Địa";				
			break;
			case '13':				
				$tilte = "Sim Số Đẹp Giá Rẻ - Số Cặp";				
			break;
			default:
			//	$PhoneNumber = $connetionPDO ->findPhoneNumber(0,25);
			break;
		}		
	}
	
	///------------------------------------------------------------------------------------------------------------------------------------------------
	
	if ($SearchNumber != null && $currentpage != null)
	{	
		//ECHO "VAO NE";
		$count = $connetionPDO->countPhoneNumberbyNumber($SearchNumber);		
			if($count > 0)
			{
				$totalpage = getTotalPage($count);
				$LinkPage = getPage($currentpage, $totalpage,"index.php?num=".$SearchNumber);
				$LastLinked = getLastLinked($totalpage, "index.php?num=".$SearchNumber);
				$FirstLinked = getFirstLinked("index.php?num=".$SearchNumber);
				$PhoneNumber = $connetionPDO->findPhoneNumberbyNumber($SearchNumber, $fromSearch,$toSearch);
			}
		$tilte = "Danh sách các Sim cần tìm";
	}
	
	if ($SearchNumber == "Nhập số Sim bạn cần tìm!")
	{		
		$count = $connetionPDO->countPhoneNumber();		
		if($count > 0)
		{
			$totalpage = getTotalPage($count);
			$LinkPage = getPage($currentpage, $totalpage,"index.php?p=0");			
			$LastLinked = getLastLinked($totalpage, "index.php?p=0");
			$FirstLinked = getFirstLinked("index.php?p=0");
			$PhoneNumber = $connetionPDO ->findPhoneNumber($fromSearch,$toSearch);
		}
		$tilte = "Sim Số Đẹp Giá Rẻ";
	}
	
	if ($SearchNetwork != null)
	{		
		$count = $connetionPDO ->countPhoneNumberbyNetwork($SearchNetwork);	
				
		if($count > 0)
		{
			$totalpage = getTotalPage($count);
			$LinkPage = getPage($currentpage, $totalpage,"index.php?SearchNetwork=".$SearchNetwork);			
			$LastLinked = getLastLinked($totalpage, "index.php?SearchNetwork=".$SearchNetwork);
			$FirstLinked = getFirstLinked("index.php?SearchNetwork=".$SearchNetwork);
			$PhoneNumber = $connetionPDO ->findPhoneNumberbyNetwork($SearchNetwork, $fromSearch,$toSearch);
		}
		switch ($SearchNetwork)
		{
			case '1':				
				$tilte = "Sim Số Đẹp Giá Rẻ Mạng Viettel";
			break;
			case '2':
				$tilte = "Sim Số Đẹp Giá Rẻ Mạng MobiFone";
			break;
			case '3':
				$tilte = "Sim Số Đẹp Giá Rẻ Mạng VinaPhone";
			break;
			case '4':
				$tilte = "Sim Số Đẹp Giá Rẻ Mạng VietNamobile";
			break;
			case '5':
				$tilte = "Sim Số Đẹp Giá Rẻ Mạng Beeline";
			break;
			case '6':
				$tilte = "Sim Số Đẹp Giá Rẻ Mạng SFone";				
			break;
			case '7':
				$tilte = "Sim Số Đẹp Giá Rẻ Mạng EVN Telecom";				
			break;
			default:
				$tilte = "Sim Số Đẹp Giá Rẻ";
			break;
		}
	}	
	if (!isset($PhoneNumber))
	{
		$PhoneNumber = null;
	}
	if(($PhoneNumber == null ) && ($SearchNumber == null ) && ($SearchPrice == null ) && ($SearchNetwork == null )&& ($idcategory == null ))
	{
		$count = $connetionPDO->countPhoneNumber();			
		if($count > 0)
		{
			$totalpage = getTotalPage($count);
			$LinkPage = getPage($currentpage, $totalpage,"index.php?p=0");			
			$LastLinked = getLastLinked($totalpage, "index.php?p=0");
			$FirstLinked = getFirstLinked("index.php?p=0");
			$PhoneNumber = $connetionPDO ->findPhoneNumber($fromSearch,$toSearch);
		}		
		$tilte = "Sim Số Đẹp Giá Rẻ";
	}
	
	if(!isset($LinkPage))
	{
		$template->LinkPage = null;
		$template->firstpage = null;
		$template->lastpage = null;
	}
	else
	{
		$template->LinkPage = $LinkPage;		
		$template->firstpage = $FirstLinked;
		$template->lastpage = $LastLinked;
	}
	$ListOrder = $connetionPDO->findOrder(0,10);
	$PhoneNumberHotLine = $connetionPDO ->findPhoneHotNumber();
	//--------------------------------------------------------------------------------------------------------------------------------------------------
	$template->currentpage = $currentpage;
	$template->title = $tilte;	
	$template->UserName = $UserName;
	$template->PhoneNumbers = $PhoneNumber;	
	$template->ListOrder = $ListOrder;	
	$template->PhoneNumberHotLine = $PhoneNumberHotLine; 	
	
	try {
		echo $template->execute();
	}
	catch (Exception $e){
		echo $e;
	}				
?>