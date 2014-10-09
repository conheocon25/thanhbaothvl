<?php
	namespace MVC\Command;	
	class AplSearchCategoryType extends Command {
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
							$SalarydailyAll = $mSalarydaily->findByCateroryAllYearGroupBy(array($mCurrentYear));
						}else {
							$SalarydailyAll = $mSalarydaily->findByCateroryAllGroupBy(array($Month, $mCurrentYear));
						}
												
					} else {
						if($Month == 13) {						
							$SalarydailyAll = $mSalarydaily->findByCateroryYearGroupBy(array($IdCategory, $mCurrentYear));
						}else {
							$SalarydailyAll = $mSalarydaily->findByCateroryGroupBy(array($IdCategory, $Month, $mCurrentYear));
						}
					}
					
				
						
				$request->setObject("SalarydailyAll", $SalarydailyAll);
				
		}
	}
?>