<?php
	namespace MVC\Command;
	use MVC\Library\CartShopping;
	require_once("mvc/base/Command.php");
	class ViewCart extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
		
			$Session = \MVC\Base\SessionRegistry::instance();
			$SimCart = $Session->getCurrentCart();
			
			$Id = $request->getProperty('IdNumber');			
			$mNumber = new \MVC\Mapper\Number();			
			
			if(isset($Id))
			{
				$Num = $mNumber->find($Id);
			}
			
			if(isset($Num))
			{
				$SimCart->add($Num->getId());				
			}
			if(isset($SimCart))
			{
				$i= 0;
				$ListDNumber = $mNumber->findNull();			
				while ($i < $SimCart->count()){					
					$DNumber = $mNumber->find($SimCart->getId($i));
					$DNumber->setId($i);
					$subDN = $ListDNumber->add($DNumber);									
					$i++; 
				}	
			}			
			$request->setObject("ListNumber", $ListDNumber); 
		
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
			return self::statuses('CMD_DEFAULT');
		}
	}
?>