<?php
	namespace MVC\Command;	
	use MVC\Library\CartShopping;
	require_once("mvc/base/Command.php");
	
	class Home extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
		
			$Session = \MVC\Base\SessionRegistry::instance();									
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>
