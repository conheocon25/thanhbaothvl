<?php
	namespace MVC\Command;
	require_once("mvc/base/Command.php");
	class ViewOrders extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
						
			$mOrder = new \MVC\Mapper\Order();
			$Orders = $mOrder->findAll();
			$request->setObject("Orders", $Orders);

			$Title = mb_strtoupper("Danh sách đặt hàng", 'UTF-8');
			$request->setProperty("Title", $Title);

			return self::statuses('CMD_DEFAULT');
		}
	}
?>
