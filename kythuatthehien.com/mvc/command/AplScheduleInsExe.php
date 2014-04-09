<?php
	namespace MVC\Command;	
	use MVC\Library\Encrypted;
	class AplScheduleInsExe extends Command {
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
			$DateStart = $request->getProperty('DateStart');
			$DateEnd = $request->getProperty('DateEnd');
			$ScheduleName = $request->getProperty('ScheduleName');
			$Decription = $request->getProperty('Decription');
			$Note = $request->getProperty('Note');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mSchedule = new \MVC\Mapper\Schedule();
			$User = $Session->getCurrentUser();						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($DateStart)||$ScheduleName=="")
				return self::statuses('CMD_NO_AUTHOR');
			
			$domainSchedule = new \MVC\Domain\Schedule(
				null,
				$IdPosition,
				$ScheduleName,
				$DateStart,
				$DateEnd,
				$Decription,
				$Note
			);			
			
			
			$mSchedule->insert($domainSchedule);
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>