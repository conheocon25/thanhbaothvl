<?php	
	namespace MVC\Command;
	require_once("mvc/base/Command.php");
	class DeleteCart extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			$Session = \MVC\Base\SessionRegistry::instance();
			$IdDel = $request->getProperty('IdDelete');
			$SimCart = $Session->getCurrentCart();
			if(isset($IdDel))
			{	
				if($IdDel == 0)
				{
					return self::statuses('CMD_ERROR');
				}
				$SimCart->remove($IdDel);	
				return self::statuses('CMD_OK');
			}							
			
		}
	}
?>
