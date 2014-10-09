<?php
	namespace MVC\Command;
	require_once("mvc/base/Command.php");
	class Signin extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			
			//$UserName = $request->getProperty('UserName');
			//$UserName = "tuan";
			if(isset($UserName)) {
				
				//$Pass = $request->getProperty('Pass');
				$mUser = new \MVC\Mapper\User();
				//$IdUser = $mUser->check($UserName, $Pass);
				$IdUser = 1;
				if ($IdUser > 0){
					$User = $mUser->find($IdUser);
					@$temp = \MVC\Base\SessionRegistry::setCurrentIdUser($IdUser);
					@$temp = \MVC\Base\SessionRegistry::setCurrentUser($UserName);
					@$temp1 = \MVC\Base\SessionRegistry::setCurrentPermission($User->getType());
					return self::statuses('CMD_OK');
				}
			}
			return self::statuses('CMD_DEFAULT');
		}
	}
?>