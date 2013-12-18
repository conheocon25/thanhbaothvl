<?php
	namespace MVC\Command;
	require_once("mvc/base/Command.php");
	class ViewNumberByCategory extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
						
			$Id = $request->getProperty("Id");
			
			$Session = \MVC\Base\SessionRegistry::instance();
			$PageCurrent = $request->getProperty('Page');			
			if (!isset($PageCurrent)){
				$PageCurrent = $Session->getCurrentPage();
			}
			
			$mCategory = new \MVC\Mapper\Category();
			$Category = $mCategory->find($Id);
			$request->setObject("Category", $Category);
			
			$mOrder = new \MVC\Mapper\Order();
			$Orders = $mOrder->findAll();
			$request->setObject("Orders", $Orders);
			
			$mNumber = new \MVC\Mapper\Number();
			$HotNumbers = $mNumber->findHotNumber();
			$request->setObject("HotNumbers", $HotNumbers);
			
			$Numbers1 = $Category->getNumbersByPage($PageCurrent,25);
			$request->setObject("Numbers1", $Numbers1);
			$Session->setCurrentPage($PageCurrent);
			
			$Numbers = $Category->getNumbers();
			$SPN = new \MVC\Domain\PageNavigation($Numbers->count(), 25, "?cmd=ViewNumberByCategory&Id=".$Id);
			$SPN->setCurrent($PageCurrent);
			$Pages = $SPN->getPagesReduce();			
			$request->setObject("Pages", $Pages);
												
			$Title = mb_strtoupper("CÁC SỐ  » ".$Category->getName()." (".$Numbers->count().") sim » trang ".$PageCurrent, 'UTF-8');
			$request->setProperty("Title", $Title);
			
			$mNetwork = new \MVC\Mapper\Network();
			$Networks = $mNetwork->findAll();
			$request->setObject("Networks", $Networks);
			
			$mCategory = new \MVC\Mapper\Category();
			$Categorys = $mCategory->findAll();
			$request->setObject("Categorys", $Categorys);
			
			$Title_Network ="Danh sách nhà mạng";
			$request->setProperty("Title_Network", $Title_Network);
			
			$Title_Category ="Sim đẹp phân loại";
			$request->setProperty("Title_Category", $Title_Category);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>