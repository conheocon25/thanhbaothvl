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
			//$IdCategory = $request->getProperty('IdCategory');
			//$DateStart = $request->getProperty('DateStart');
			//$Count = $request->getProperty('Count');
			//$Content = $request->getProperty('Content');			
			
			$OjData = $request->getObject('Data');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			require_once("mvc/base/mapper/MapperDefault.php");				
			$User = $Session->getCurrentUser();						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($OjData[0])||$OjData[1]=="")
				return self::statuses('CMD_NO_AUTHOR');
				
			$dSalarydaily = new \MVC\Domain\Salarydaily(
				null,
				$IdCategory,
				$User->getId(),
				$Content,
				$Count,
				$DateStart,
				null,
				''				
			);
			
			$mSalarydaily->insert($dSalarydaily);
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>