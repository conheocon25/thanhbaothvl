<?php		
	namespace MVC\Command;	
	class AplReportUser extends Command {
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
			$SalarydailyByTimes = $mSalarydaily->findByEmployeeByTime(array($User->getId(), $Report->getDateStart(), $Report->getDateEnd()));
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Title = "TỔNG KẾT ĐIỂM THÙ LAO";
			
			$Value = $mSalarydaily->SumPointEmployeeTime(array($User->getId(), $Report->getDateStart(), $Report->getDateEnd()));
			$NTotal = new \MVC\Library\Number($Value);
			
			$DateCurrent = "Vĩnh Long, ngày ".\date("d")." tháng ".\date("m")." năm ".\date("Y");
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setProperty('Title', $Title);
			$request->setProperty('SalarydailyByTimes', $SalarydailyByTimes);
			$request->setProperty('DateCurrent', $DateCurrent);
			$request->setProperty('User', $User);
			$request->setProperty('Report', $Report);
			$request->setObject('NTotal', $NTotal);			
		}
	}
?>