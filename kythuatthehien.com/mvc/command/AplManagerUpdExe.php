<?php
	namespace MVC\Command;	
	use MVC\Library\Encrypted;
	class AplManagerUpdExe extends Command {
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
			$CategoryName = $request->getProperty('Name');
			$IdPosition = $request->getProperty('IdPosition');
			$Factory = $request->getProperty('Factory');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mCategory = new \MVC\Mapper\Category();
			$User = $Session->getCurrentUser();						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($IdCategory)||$CategoryName=="")
				return self::statuses('CMD_NO_AUTHOR');
				
			$domainCategory = $mCategory->find($IdCategory);			
			$domainCategory->setName($CategoryName);
			$domainCategory->setId_position($IdPosition);
			$domainCategory->setFactory($Factory);
			
			$mCategory->update($domainCategory);
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>