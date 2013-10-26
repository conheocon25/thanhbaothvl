<?php
	namespace MVC\Command;
	require_once("mvc/base/Command.php");
	class ViewNumberByNetwork extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
						
			$Id = $request->getProperty("Id");
			
			$Session = \MVC\Base\SessionRegistry::instance();
			$PageCurrent = $request->getProperty('Page');			
			if (!isset($PageCurrent)){
				$PageCurrent = $Session->getCurrentPage();
			}
			
			$mNetwork = new \MVC\Mapper\Network();
			$Network = $mNetwork->find($Id);
			$request->setObject("Network", $Network);
			
			$mOrder = new \MVC\Mapper\Order();
			$Orders = $mOrder->findAll();
			$request->setObject("Orders", $Orders);
			
			$mNumber = new \MVC\Mapper\Number();
			$HotNumbers = $mNumber->findHotNumber();
			$request->setObject("HotNumbers", $HotNumbers);
			
			$Numbers1 = $Network->getNumbersByPage($PageCurrent,25);
			$request->setObject("Numbers1", $Numbers1);
			$Session->setCurrentPage($PageCurrent);
			
			$Numbers = $Network->getNumbers();
			$SPN = new \MVC\Domain\PageNavigation($Numbers->count(), 25, "?cmd=ViewNumberByNetwork&Id=".$Id);
			$SPN->setCurrent($PageCurrent);
			$Pages = $SPN->getPagesReduce();			
			$request->setObject("Pages", $Pages);
												
			$Title = mb_strtoupper("CÁC SỐ  » ".$Network->getName()." (".$Numbers->count().") sim » trang ".$PageCurrent, 'UTF-8');
			$request->setProperty("Title", $Title);
			
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
