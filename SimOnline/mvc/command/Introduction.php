<?php
	namespace MVC\Command;
	require_once("mvc/base/Command.php");
	class Introduction extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
						
			$mNetwork = new \MVC\Mapper\Network();
			$Networks = $mNetwork->findAll();
			$request->setObject("Networks", $Networks);
			
			$mOrder = new \MVC\Mapper\Order();
			$Orders = $mOrder->findAll();
			$request->setObject("Orders", $Orders);
			
			$mCategory = new \MVC\Mapper\Category();
			$Categorys = $mCategory->findAll();
			$request->setObject("Categorys", $Categorys);
			
			$mNumber = new \MVC\Mapper\Number();
			$HotNumbers = $mNumber->findHotNumber();
			$request->setObject("HotNumbers", $HotNumbers);
			
			$Title_Network = "Danh sách nhà mạng";
			$request->setProperty("Title_Network", $Title_Network);
			
			$Title_Category = "Sim đẹp phân loại";
			$request->setProperty("Title_Category", $Title_Category);

			return self::statuses('CMD_DEFAULT');
		}
	}
?>
