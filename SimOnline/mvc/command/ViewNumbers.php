<?php
	namespace MVC\Command;	
	use MVC\Library\CartShopping;
	require_once("mvc/base/Command.php");
	
	class ViewNumbers extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
		
			$Session = \MVC\Base\SessionRegistry::instance();									
			$temp = $Session->getCurrentCart();
			if(!isset($temp))
			{
				$SimCart = new CartShopping();
				$Session->setCurrentCart($SimCart);
			}
			
			$PageCurrent = $request->getProperty('Page');			
			if (!isset($PageCurrent)){
				$PageCurrent = $Session->getCurrentPage();
			}
			$mNumber = new \MVC\Mapper\Number();			
			$Numbers = $mNumber->findByPage(array($PageCurrent, 25));
			$Numbers1 = $mNumber->findAll();
		//	print_r($Numbers);
			
			$mOrder = new \MVC\Mapper\Order();
			$Orders = $mOrder->findAll();
			$request->setObject("Orders", $Orders);
			
			$HotNumbers = $mNumber->findHotNumber();
			$request->setObject("HotNumbers", $HotNumbers);
			
			$Session->setCurrentPage($PageCurrent);
			
			$mNetwork = new \MVC\Mapper\Network();
			$Networks = $mNetwork->findAll();
			$request->setObject("Networks", $Networks);
			
			$mCategory = new \MVC\Mapper\Category();
			$Categorys = $mCategory->findAll();
			$request->setObject("Categorys", $Categorys);

			$Title_Network = "Danh sách nhà mạng";
			$request->setProperty("Title_Network", $Title_Network);
			
			$Title_Category = "Sim đẹp phân loại";
			$request->setProperty("Title_Category", $Title_Category);
			
			$Title = mb_strtoupper("Danh sách (".$Numbers1->count().") » trang ".$PageCurrent, 'UTF-8');
			$request->setObject("Numbers", $Numbers);
			$request->setProperty("Title", $Title);
			
			$PN = new \MVC\Domain\PageNavigation($Numbers1->count(), 25, "?cmd=ViewNumbers");
			$PN->setCurrent($PageCurrent);
			$Pages = $PN->getPagesReduce();
			$request->setObject("Pages", $Pages);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>
