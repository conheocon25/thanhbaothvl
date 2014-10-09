<?php
	namespace MVC\Command;	
	use MVC\Library\Encrypted;
	class AplManagerInsExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdPosition = $request->getProperty('IdPosition');			
			$Name = $request->getProperty('Name');
			$Factory = $request->getProperty('Factory');
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mCategory = new \MVC\Mapper\Category();
			$User = $Session->getCurrentUser();						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($IdPosition)||$Name=="")
				return self::statuses('CMD_NO_AUTHOR');
			
			$domainCategory = new \MVC\Domain\Category(
				null,
				$IdPosition,
				$Name,
				$Factory			
			);			
			
			
			$mCategory->insert($domainCategory);
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>