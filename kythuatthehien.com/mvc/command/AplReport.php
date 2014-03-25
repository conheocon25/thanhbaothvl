<?php
	namespace MVC\Command;	
	class AplReport extends Command {
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
				$mReport = new \MVC\Mapper\Report();
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
				$Reports = $mReport->findAll();		
				
				$Title = "THEO KHOẢN THỜI GIAN";
				$Navigation = array(
					array("TRANG CHỦ", "/trang-chu"),
					array("QUẢN LÝ THÙ LAO", "/thu-lao/app"),
					array("BÁO CÁO", "/thu-lao/Report")
				);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
				
				
				$request->setObject("CategoryNewsAll", $CategoryNewsAll);
				$request->setObject("CategoryVideoAll", $CategoryVideoAll);
			
				$request->setObject("CategoryProgrameAll", $CategoryProgrameAll);
				
				
				$request->setObject('AlbumAll', $AlbumAll);
				
				$request->setObject('ConfigAll', $ConfigAll); 
				
				$request->setObject('Reports', $Reports);
				$request->setObject('Navigation', $Navigation);
				$request->setProperty("Title", $Title);			
				$request->setProperty("ActiveAdmin", 'Report');
		}
	}
?>