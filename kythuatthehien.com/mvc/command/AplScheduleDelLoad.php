<?php
	namespace MVC\Command;	
	class AplScheduleDelLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
				$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
				$IdSchedule= $request->getProperty('IdSchedule');								
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------	
				$mCategory = new \MVC\Mapper\Category();
				$mCategoryNews = new \MVC\Mapper\CategoryNews();				
				$mCategoryVideo = new \MVC\Mapper\CategoryVideo();
				$mAlbum= new \MVC\Mapper\Album();
				$mConfig = new \MVC\Mapper\Config();
				$mSchedule = new \MVC\Mapper\Schedule();
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
				$DSchedule = $mSchedule->find($IdSchedule);							
				
				$CategoryProgrameAll = $mCategory->findAll();
				$CategoryNewsAll = $mCategoryNews->findAll();
				$CategoryVideoAll = $mCategoryVideo->findAll();			
				
				$AlbumAll = $mAlbum->findAll();
				$ConfigAll = $mConfig->findAll();		
				
				$Title = "XÓA NHẬT KÝ BÁO CÁO";
				$Navigation = array(					
					array("BÁO CÁO", "/thu-lao/schedule")
				);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
				
				$request->setObject("CategoryNewsAll", $CategoryNewsAll);
				$request->setObject("CategoryVideoAll", $CategoryVideoAll);			
				$request->setObject("CategoryProgrameAll", $CategoryProgrameAll);
				
				$request->setObject('Schedule', $DSchedule);				
				$request->setObject('AlbumAll', $AlbumAll);				
				$request->setObject('ConfigAll', $ConfigAll);				
				$request->setObject('Navigation', $Navigation);
				$request->setProperty("Title", $Title);			
				$request->setProperty("ActiveAdmin", 'Schedule');
		}
	}
?>