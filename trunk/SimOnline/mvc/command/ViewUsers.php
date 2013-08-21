<?php
	namespace MVC\Command;
	require_once("mvc/base/Command.php");
	class ViewUsers extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
						
			$mUser = new \MVC\Mapper\User();
			$Users = $mUser->findAll();
			$request->setObject("Users", $Users);

			$Title = mb_strtoupper("Danh sách người dùng", 'UTF-8');
			$request->setProperty("Title", $Title);

			return self::statuses('CMD_DEFAULT');
		}
	}
?>
