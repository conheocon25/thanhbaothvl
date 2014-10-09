<?php
	namespace MVC\Command;	
	class AplSearchCategory extends Command {
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
			$Month = $request->getProperty('Month');
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
						if($Month == 13) {						
							$SalarydailyAll = $mSalarydaily->findByCateroryAllYear(array($mCurrentYear));
						}else {
							$SalarydailyAll = $mSalarydaily->findByCateroryAll(array($Month, $mCurrentYear));
						}
												
					} else {
						if($Month == 13) {						
							$SalarydailyAll = $mSalarydaily->findByCateroryYear(array($IdCategory, $mCurrentYear));
						}else {
							$SalarydailyAll = $mSalarydaily->findByCaterory(array($IdCategory, $Month, $mCurrentYear));
						}
					}
					
				
						
				$request->setObject("SalarydailyAll", $SalarydailyAll);
				
		}
	}
?>