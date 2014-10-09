<?php		
	namespace MVC\Command;	
	class AplReportDepartment extends Command {
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
			$mUser = new \MVC\Mapper\User();
			$mReport = new \MVC\Mapper\Report();
			$mSalarydaily = new \MVC\Mapper\Salarydaily();
			
			$Report = $mReport->find($IdReport);
			$Users = null;
			if ($User->isAdmin() == true) {
				$Users = $mUser->findByID();
			}else {		$Users = $mUser->findByPosition(array($User->getIdPosition()));
			}
			
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Title = "TỔNG KẾT ĐIỂM CHUYÊN MÔN";
						
			
			$Value = 0;				
			$CurUser = null;
			$SalarydailyByTimes = null;
			while ($Users->valid()){
			
					$CurUser = $Users->current();	
					$Value = $mSalarydaily->SumPointEmployeeTime(array( $CurUser->getId(), $Report->getDateStart(), $Report->getDateEnd()));
					//$Value = 45;
					$CurUser->setNTotal($Value);
					
				$Users->next();
			}
			//$NTotal = new \MVC\Library\Number($Value);
			
			
			$DateCurrent = "TP Vĩnh Long, ngày ".\date("d")." tháng ".\date("m")." năm ".\date("Y");
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setProperty('Title', $Title);
			$request->setProperty('SalarydailyByTimes', $SalarydailyByTimes);
			$request->setProperty('DateCurrent', $DateCurrent);
			$request->setProperty('User', $User);
			$request->setProperty('Users', $Users);
			$request->setProperty('Report', $Report);			
		}
	}
?>