<?php
	namespace MVC\Command;
	require_once("mvc/base/Command.php");
	class Search extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			
			$Session = \MVC\Base\SessionRegistry::instance();
			$Content = $request->getProperty("Content");
			$PageCurrent = $request->getProperty('Page');			
			if (!isset($PageCurrent)){
				$PageCurrent = $Session->getCurrentPage();
			}
			$mNumber = new \MVC\Mapper\Number();
			$Numbers = $mNumber->findNumber(array($Content, $PageCurrent, 25));
			//print_r($Numbers);
			//echo $Content1;
			
			$mNetwork = new \MVC\Mapper\Network();
			$Networks = $mNetwork->findAll();
			$request->setObject("Networks", $Networks);
			
			$mOrder = new \MVC\Mapper\Order();
			$Orders = $mOrder->findAll();
			$request->setObject("Orders", $Orders);
			
			$mCategory = new \MVC\Mapper\Category();
			$Categorys = $mCategory->findAll();
			$request->setObject("Categorys", $Categorys);
			
			$HotNumbers = $mNumber->findHotNumber();
			$request->setObject("HotNumbers", $HotNumbers);
			
			$Title_Network = mb_strtoupper("Danh sách nhà mạng", 'UTF-8');
			$request->setProperty("Title_Network", $Title_Network);
			
			$Title_Category = mb_strtoupper("Danh sách loại sim", 'UTF-8');
			$request->setProperty("Title_Category", $Title_Category);
			
			$Number1s = $mNumber->findNumber1(array($Content));
			$request->setObject("Numbers", $Numbers);
			$request->setObject("Number1s", $Number1s);
			//print_r($Number1s);
			$Session->setCurrentPage($PageCurrent);
			
			$Title = mb_strtoupper("Danh sách (".$Number1s->count()." SĐT Tìm Được ) » trang ".$PageCurrent, 'UTF-8');
			$request->setProperty("Title", $Title);
			
			$SPN = new \MVC\Domain\PageNavigation($Number1s->count(), 25, "?cmd=Search&Content=".$Content);
			$SPN->setCurrent($PageCurrent);
			$Pages = $SPN->getPagesReduce();
			$request->setObject("Pages", $Pages);

			return self::statuses('CMD_DEFAULT');
		}
	}
?>
