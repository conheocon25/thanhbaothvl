<?php
	namespace MVC\Command;	
	use MVC\Library\Encrypted;
	class AplReportUpdExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdReport = $request->getProperty('IdReport');		
			$DateStart = $request->getProperty('DateStart');
			$DateEnd = $request->getProperty('DateEnd');
			$ReportName = $request->getProperty('ReportName');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mReport = new \MVC\Mapper\Report();
			$User = $Session->getCurrentUser();						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($IdReport)||$DateStart=="")
				return self::statuses('CMD_NO_AUTHOR');
				
			$domainReport = $mReport->find($IdReport);			
			$domainReport->setName($ReportName);
			$domainReport->setDateStart($DateStart);
			$domainReport->setDateEnd($DateEnd);
			
			$mReport->update($domainReport);
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>