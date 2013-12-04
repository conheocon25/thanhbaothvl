<?php
	namespace MVC\Command;
	require_once("mvc/base/Command.php");
	class InsertOrder extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
		
			$Date = date("Y-m-d H:i:s");
			$Name = $request->getProperty('Name');
			$Phone = $request->getProperty('Phone');
			$Email = $request->getProperty('Email');
			$IdSim = $request->getProperty('IdSim');
			$Address = $request->getProperty('SoNha')." , ".$request->getProperty('QuanHuyen')." , ".$request->getProperty('cboTinhThanh');
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
				if(isset($IdCustomer)){
				$dOrder = new \MVC\Domain\Order(
					null,
					$IdCustomer,
					$IdSim,
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
			
			
			//---------------------------------------
			$Title = mb_strtoupper("Thông tin đặt hàng", 'UTF-8');
			$request->setProperty("Title", $Title);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>
