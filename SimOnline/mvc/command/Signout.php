<?php	
	namespace MVC\Command;
	require_once("mvc/base/Command.php");
	class Signout extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			$ses = \MVC\Base\SessionRegistry::instance();
			$ses->setCurrentUser("");
			//unset($User);
			return self::statuses('CMD_OK');
		}
	}
?>