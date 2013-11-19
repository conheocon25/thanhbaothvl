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
			require_once("mvc/base/mapper/MapperDefault.php");
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			
			$CategoryProgrameAll = $mCategory->findAll();
			$CategoryNewsAll = $mCategoryNews->findAll();
			$CategoryVideoAll = $mCategoryVideo->findAll();			
			$CategoryAskAll = $mCategoryAsk->findAll();	
			
			$User = $Session->getCurrentUser();
			
				
			
			$AlbumAll = $mAlbum->findAll();
			$ConfigAll = $mConfig->findAll();		
			
			$Title = "QUẢN LÝ";
			$Navigation = array(
				array("TRANG CHỦ", "/trang-chu"),
				array("QUẢN LÝ THÙ LAO", "/thu-lao"),
				array("NHẬP ĐIỂM", "/thu-lao/reward")
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			if (!isset($Page)) $Page = 1;
			$Config = $mConfig->findByName("ROW_PER_PAGE");
			$id_User = 30;
			$SalarydailyAlls = $mSalarydaily->findByEmployee(array($id_User, 9, 2013));	
			$SalarydailyAll = $mSalarydaily->findByEmployeePage(array($id_User, 9, 2013, $Page, 10));	
			$PN = new \MVC\Domain\PageNavigation($SalarydailyAlls->count(), 10, 'thu-lao/reward');			
			
			$request->setObject("CategoryNewsAll", $CategoryNewsAll);
			$request->setObject("CategoryVideoAll", $CategoryVideoAll);
			$request->setObject("CategoryAskAll", $CategoryAskAll);
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