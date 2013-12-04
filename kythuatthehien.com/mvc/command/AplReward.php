<?php
	namespace MVC\Command;	
	class AplReward extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$Page = $request->getProperty('Page');						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------	
				$mCategory = new \MVC\Mapper\Category();
				$mCategoryNews = new \MVC\Mapper\CategoryNews();
				
				$mCategoryVideo = new \MVC\Mapper\CategoryVideo();
				$mAlbum= new \MVC\Mapper\Album();
				$mConfig = new \MVC\Mapper\Config();
				$mSalarydaily = new \MVC\Mapper\Salarydaily();
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			
				$CategoryProgrameAll = $mCategory->findAll();
				
				$CategoryNewsAll = $mCategoryNews->findAll();
				$CategoryVideoAll = $mCategoryVideo->findAll();			
				
				
				$User = $Session->getCurrentUser();
				$mCurrentMonth = $Session->getCurrentMonth();			
				$mCurrentYear = $Session->getCurrentYear();			
				
				$AlbumAll = $mAlbum->findAll();
				$ConfigAll = $mConfig->findAll();		
				
				$Title = "QUẢN LÝ";
				$Navigation = array(
					array("TRANG CHỦ", "/trang-chu"),
					array("QUẢN LÝ THÙ LAO", "/thu-lao/app"),
					array("NHẬP ĐIỂM", "/thu-lao/reward")
				);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
				if (!isset($Page)) $Page = 1;
				$Config = $mConfig->findByName("ROW_PER_PAGE");
			
				$SalarydailyAlls = $mSalarydaily->findByEmployee(array($User->getId(), $mCurrentMonth, $mCurrentYear));	
				$SalarydailyAll = $mSalarydaily->findByEmployeePage(array($User->getId(), $mCurrentMonth, $mCurrentYear, $Page, $Config->getValue()));	
				$PN = new \MVC\Domain\PageNavigation($SalarydailyAlls->count(), $Config->getValue(), 'thu-lao/reward');			
				
				$request->setObject("CategoryNewsAll", $CategoryNewsAll);
				$request->setObject("CategoryVideoAll", $CategoryVideoAll);
			
				$request->setObject("CategoryProgrameAll", $CategoryProgrameAll);
				$request->setObject("SalarydailyAll", $SalarydailyAll);
				
				$request->setObject('AlbumAll', $AlbumAll);
				$request->setProperty("Page", $Page);
				$request->setObject('ConfigAll', $ConfigAll); 
				$request->setProperty("Page", $Page);
				$request->setObject('PN', $PN); 
				
				$request->setObject('Navigation', $Navigation);
				$request->setProperty("Title", $Title);			
				$request->setProperty("ActiveAdmin", 'Admin');
		}
	}
?>