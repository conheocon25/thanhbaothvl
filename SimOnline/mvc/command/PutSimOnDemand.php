<?php
	namespace MVC\Command;
	use MVC\Library\CartShopping;
	require_once("mvc/base/Command.php");
	class PutSimOnDemand extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
		
			$Session = \MVC\Base\SessionRegistry::instance();
					
			$mNumber = new \MVC\Mapper\Number();
			
			$Date = date("Y-m-d H:i:s");
			$Name = $request->getProperty('Name');
			$Phone = $request->getProperty('Phone');
			$Email = $request->getProperty('Email');
			$Address = $request->getProperty('DiaChiGiaoHang')." , ".$request->getProperty('QuanHuyen')." , ".$request->getProperty('cboTinhThanh');
			$Note = $request->getProperty('Note');
			if (isset($Name)){
				$dCustomer = new \MVC\Domain\Customer(
					null,
					$Name,
					"",
					$Phone,
					$Address,
					$Email
				);
				$mCustomer = new \MVC\Mapper\Customer();
				$mCustomer->Insert($dCustomer);
				
				//-----------Thêm Vào Order-------------
				$IdCustomer =  $dCustomer->getId();
				$PutPhone = $request->getProperty('PutPhone');
				if(isset($IdCustomer)){
				$dOrder = new \MVC\Domain\Order(
					null,
					$IdCustomer,
					$PutPhone,
					"",
					$Date,
					$Note,
					""
				);
					$mOrder = new \MVC\Mapper\Order();
					$mOrder->Insert($dOrder);
				}
				return self::statuses('CMD_OK');
			}
			
			
			$mOrder = new \MVC\Mapper\Order();
			$Orders = $mOrder->findAll();
			$request->setObject("Orders", $Orders);
			
			$HotNumbers = $mNumber->findHotNumber();
			$request->setObject("HotNumbers", $HotNumbers);
			
			$mNetwork = new \MVC\Mapper\Network();
			$Networks = $mNetwork->findAll();
			$request->setObject("Networks", $Networks);
			
			$mCategory = new \MVC\Mapper\Category();
			$Categorys = $mCategory->findAll();
			
			$request->setObject("Categorys", $Categorys);
			$Title = mb_strtoupper("ĐẶT MUA SIM", 'UTF-8');
			$request->setProperty("Title", $Title);
			
			$Title_Network = "Danh sách nhà mạng";
			$request->setProperty("Title_Network", $Title_Network);
			$Title_Category = "Sim đẹp phân loại";
			$request->setProperty("Title_Category", $Title_Category);
			//---------------------------------------
			$Title = mb_strtoupper("ĐẶT MUA SIM", 'UTF-8');
			$request->setProperty("Title", $Title);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>