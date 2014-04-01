<?php
	namespace MVC\Command;	
	use MVC\Library\Encrypted;
	class AplEmployeeUpdExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdEmployee = $request->getProperty('IdEmployee');			
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
			if (!isset($IdEmployee)||$User=="")
				return self::statuses('CMD_NO_AUTHOR');
				
			$domainUser = $mUser->find($IdEmployee);
			
			$domainUser->setIdPosition($IdPosition);
			$domainUser->setUser($User);
			$domainUser->setPass($Pass);
			$domainUser->setGender($Gender);
			$domainUser->setNote($Note);
			$domainUser->setType($Type);
			$domainUser->setRule($Rule);
			
			$mUser->update($domainUser);
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>