<?php
	namespace MVC\Command;	
	use MVC\Library\Encrypted;
	class AplRewardInsExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdCategory = $request->getProperty('IdCategory');
			$DateStart = $request->getProperty('DateStart');
			$Count = $request->getProperty('Count');
			$Content = $request->getProperty('Content');
			$Note = $request->getProperty('Note');
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			require_once("mvc/base/mapper/MapperDefault.php");				
			$User = $Session->getCurrentUser();						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($IdCategory)||$DateStart=="")
				return self::statuses('CMD_NO_AUTHOR');
				
			$dSalarydaily = new \MVC\Domain\Salarydaily(
				null,
				$IdCategory,
				$User->getId(),
				$Content,
				$Count,
				$DateStart,
				null,
				$Note				
			);
			
			$mSalarydaily->insert($dSalarydaily);
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>