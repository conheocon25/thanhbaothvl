<?php
	namespace MVC\Command;	
	use MVC\Library\Encrypted;
	class AplReportInsExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			
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
			if (!isset($DateStart)||$ReportName=="")
				return self::statuses('CMD_NO_AUTHOR');
			
			$domainReport = new \MVC\Domain\Report(
				null,
				$User->getId(),
				$ReportName,
				$DateStart,
				$DateEnd,
				null
			);			
			
			
			$mReport->insert($domainReport);
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>