<?php
	namespace MVC\Command;
	require_once("mvc/base/Command.php");
	class ViewCategorys extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
						
			$mCategory = new \MVC\Mapper\Category();
			$Categorys = $mCategory->findAll();
			$request->setObject("Categorys", $Categorys);

			//$Title = mb_strtoupper("Danh sách nhà mạng", 'UTF-8');
			//$request->setProperty("Title", $Title);

			return self::statuses('CMD_DEFAULT');
		}
	}
?>
