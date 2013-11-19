<?php	
	namespace MVC\Command;
	require_once("mvc/base/Command.php");
	class AplAppChangeTime extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
											
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$mMonth = $request->getProperty('mMonth');	
			$mYear = $request->getProperty('mYear');				
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------															
			
			if (isset($mMonth)) {
				$Session->setCurrentMonth($mMonth);			
				$Session->setCurrentYear($mYear);	
			}
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>