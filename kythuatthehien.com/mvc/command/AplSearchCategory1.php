<?php
	namespace MVC\Command;	
	class AplSearchCategory1 extends Command {
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
			$IdCategory = $request->getProperty('IdCategory');						
			$Y1 = $request->getProperty('Y1');
			$M1 = $request->getProperty('M1');
			$D1 = $request->getProperty('D1');
			$Y2 = $request->getProperty('Y2');
			$M2 = $request->getProperty('M2');
			$D2 = $request->getProperty('D2');			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------	
				$mCategory = new \MVC\Mapper\Category();			
				$mSalarydaily = new \MVC\Mapper\Salarydaily();
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
				$CategoryProgrameAll = null;
				$SalarydailyAll = null;
				
				$CategoryProgrameAll = $mCategory->findAll();
								
				if($IdCategory == 25000) {										
					$SalarydailyAll = $mSalarydaily->findByCateroryAllDate(array($Y1."-".$M1."-".$D1, $Y2."-".$M2."-".$D2));																		
				} else {
					$SalarydailyAll = $mSalarydaily->findByCateroryDate(array($IdCategory, $Y1."-".$M1."-".$D1, $Y2."-".$M2."-".$D2));						
				}
					
				
						
				$request->setObject("SalarydailyAll", $SalarydailyAll);
				
		}
	}
?>