<?php
	namespace MVC\Command;	
	class AplRewardPageLoad extends Command {
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
			$Page = $request->getProperty('Page');						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------	
				
				$mConfig = new \MVC\Mapper\Config();
				$mSalarydaily = new \MVC\Mapper\Salarydaily();
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
				if (!isset($Page)) $Page = 1;
				$Config = $mConfig->findByName("ROW_PER_PAGE");
			
				$SalarydailyAlls = $mSalarydaily->findByEmployee(array($User->getId(), $mCurrentMonth, $mCurrentYear));	
				$SalarydailyAll = $mSalarydaily->findByEmployeePage(array($User->getId(), $mCurrentMonth, $mCurrentYear, $Page, $Config->getValue()));	
				$PN = new \MVC\Domain\PageNavigation($SalarydailyAlls->count(), $Config->getValue(), '/thu-lao/reward');			
								
				$request->setObject("SalarydailyAll", $SalarydailyAll);				
				
				$request->setProperty("Page", $Page);				
				$request->setObject('PN', $PN); 
												
		}
	}
?>