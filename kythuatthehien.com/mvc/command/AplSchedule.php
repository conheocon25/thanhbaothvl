<?php
	namespace MVC\Command;	
	class AplSchedule extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
							
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------	
				$mSchedule = new \MVC\Mapper\Schedule();
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
				$Schedules = $mSchedule->findAll();		
				
				$Title = "THEO KHOẢN THỜI GIAN";
				$Navigation = array(					
					array("BÁO CÁO", "/thu-lao/schedule")
				);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
				
				
				$request->setObject("CategoryNewsAll", $CategoryNewsAll);
				$request->setObject("CategoryVideoAll", $CategoryVideoAll);
			
				$request->setObject("CategoryProgrameAll", $CategoryProgrameAll);
				
				
				$request->setObject('AlbumAll', $AlbumAll);
				
				$request->setObject('ConfigAll', $ConfigAll); 
				
				$request->setObject('Schedules', $Schedules);
				$request->setObject('Navigation', $Navigation);
				$request->setProperty("Title", $Title);			
				$request->setProperty("ActiveAdmin", 'Schedule');
		}
	}
?>