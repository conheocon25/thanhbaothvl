<?php		
	namespace MVC\Command;	
	class AplReportSummary extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			$User = $Session->getCurrentUser();		
			
			$IdReport = $request->getProperty('IdReport');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
		
			$mReport = new \MVC\Mapper\Report();
			$mSalarydaily = new \MVC\Mapper\Salarydaily();
			
			$Report = $mReport->find($IdReport);
			
			
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Title = "TỔNG KẾT SỐ LƯỢNG THỰC HIỆN CHƯƠNG TRÌNH";
			
			$SalarydailyAll = $mSalarydaily->findGroupBy(array( $Report->getDateStart(), $Report->getDateEnd()));
				
			//$NTotal = new \MVC\Library\Number($Value);
			
			
			$DateCurrent = "TP Vĩnh Long, ngày ".\date("d")." tháng ".\date("m")." năm ".\date("Y");
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setProperty('Title', $Title);
			$request->setProperty('SalarydailyAll', $SalarydailyAll);
			$request->setProperty('DateCurrent', $DateCurrent);			
			$request->setProperty('Report', $Report);			
		}
	}
?>