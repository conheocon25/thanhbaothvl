<?php
	namespace MVC\Command;	
	use MVC\Library\Encrypted;
	class AplScheduleUpdExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdSchedule = $request->getProperty('IdSchedule');		
			$DateStart = $request->getProperty('DateStart');
			$DateEnd = $request->getProperty('DateEnd');
			$ScheduleName = $request->getProperty('ScheduleName');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mSchedule = new \MVC\Mapper\Schedule();
			$User = $Session->getCurrentUser();						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($IdSchedule)||$DateStart=="")
				return self::statuses('CMD_NO_AUTHOR');
				
			$domainSchedule = $mSchedule->find($IdSchedule);			
			$domainSchedule->setName($ScheduleName);
			$domainSchedule->setDateStart($DateStart);
			$domainSchedule->setDateEnd($DateEnd);
			
			$mSchedule->update($domainSchedule);
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>