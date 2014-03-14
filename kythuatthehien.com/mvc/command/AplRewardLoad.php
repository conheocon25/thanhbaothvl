<?php
	namespace MVC\Command;	
	class AplRewardLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
			$User = $Session->getCurrentUser();
			$mCurrentMonth = $Session->getCurrentMonth();			
			$mCurrentYear = $Session->getCurrentYear();				
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
							
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------	
				
				$mSalarydaily = new \MVC\Mapper\Salarydaily();
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
						
				$SumPointEmployeeCurMonth = $mSalarydaily->SumPointEmployeeMonth(array($User->getId(), $mCurrentMonth, $mCurrentYear));
				
				$ValueABC = round((($SumPointEmployeeCurMonth /$User->getRulePrint() ) * 50 ) , 2);
				
				//$NTotal = new \MVC\Library\Number($SumPointEmployeeCurMonth);
				//$NTotalABC = new \MVC\Library\Number($ValueABC);
				
				$data = array('NTotal' => $SumPointEmployeeCurMonth, 'NTotalABC' => $ValueABC);
			
			echo json_encode($data);	
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
				
		}
	}
?>