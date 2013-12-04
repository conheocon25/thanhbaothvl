<?php
	namespace MVC\Command;
	require_once("mvc/base/Command.php");
	class ViewNetworks extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
						
			$mNetwork = new \MVC\Mapper\Network();
			$Networks = $mNetwork->findAll();
			$request->setObject("Networks", $Networks);
			
			$mCategory = new \MVC\Mapper\Category();
			$Categorys = $mCategory->findAll();
			$request->setObject("Categorys", $Categorys);

			$Title_Network = mb_strtoupper("Danh sách nhà mạng", 'UTF-8');
			$request->setProperty("Title_Network", $Title_Network);
			
			$Title_Category = mb_strtoupper("Danh sách loại sim", 'UTF-8');
			$request->setProperty("Title_Category", $Title_Category);

			return self::statuses('CMD_DEFAULT');
		}
	}
?>
