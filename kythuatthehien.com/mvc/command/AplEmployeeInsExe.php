<?php
	namespace MVC\Command;	
	use MVC\Library\Encrypted;
	class AplEmployeeInsExe extends Command {
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
			$User = $request->getProperty('User');
			$Pass = $request->getProperty('Pass');
			$Gender = $request->getProperty('Gender');
			$Note = $request->getProperty('Note');
			$Type = $request->getProperty('Type');
			$Rule = $request->getProperty('Rule');
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mUser = new \MVC\Mapper\User();
								
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($IdPosition)||$User=="")
				return self::statuses('CMD_NO_AUTHOR');
			
			$domainUser = new \MVC\Domain\User(
				null,
				$IdPosition,
				$User,
				$Pass,			
				$Gender,			
				$Note,			
				$Type,			
				$Rule			
			);			
			
			
			$mUser->insert($domainUser);
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>