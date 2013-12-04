<?php	
	namespace MVC\Command;
	require_once("mvc/base/Command.php");
	class ClearCart extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			$Session = \MVC\Base\SessionRegistry::instance();			
			$SimCart = $Session->getCurrentCart();			    
			$SimCart->clear();	
			return self::statuses('CMD_OK');			
		}
	}
?>
