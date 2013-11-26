<?php
	namespace MVC\Command;	
	class AplChangePassExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
				$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
				$NewPass1 = $request->getProperty('NewPass1');								
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------	
				$mUser = new \MVC\Mapper\User();
				
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
						
				if (isset($NewPass1))	{			
					$dUser = $Session->getCurrentUser();
					$dUser->setPass($NewPass1);
					$mUser->update($dUser);					
				}
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
				return self::statuses('CMD_OK');
		}
	}
?>