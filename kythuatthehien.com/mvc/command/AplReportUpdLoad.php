<?php
	namespace MVC\Command;	
	class AplReportUpdLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
				$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
				$IdReport = $request->getProperty('IdReport');								
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------	
				$mCategory = new \MVC\Mapper\Category();
				$mCategoryNews = new \MVC\Mapper\CategoryNews();				
				$mCategoryVideo = new \MVC\Mapper\CategoryVideo();
				$mAlbum= new \MVC\Mapper\Album();
				$mConfig = new \MVC\Mapper\Config();
				$mReport = new \MVC\Mapper\Report();
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
				
				$CategoryProgrameAll = $mCategory->findAll();
				$CategoryNewsAll = $mCategoryNews->findAll();
				$CategoryVideoAll = $mCategoryVideo->findAll();	

				
				$dReport = $mReport->find($IdReport);			
								
				
				
				$AlbumAll = $mAlbum->findAll();
				$ConfigAll = $mConfig->findAll();		
				
				$Title = "CẬP NHẬT THỜI GIAN BÁO CÁO";
				$Navigation = array(
					array("TRANG CHỦ", "/trang-chu"),
					array("QUẢN LÝ THÙ LAO", "/thu-lao/app"),
					array("BÁO CÁO", "/thu-lao/report")
				);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
				
				$request->setObject("CategoryNewsAll", $CategoryNewsAll);
				$request->setObject("CategoryVideoAll", $CategoryVideoAll);			
				$request->setObject("CategoryProgrameAll", $CategoryProgrameAll);
				
				$request->setObject('Report', $dReport);	
				
				$request->setObject('AlbumAll', $AlbumAll);				
				$request->setObject('ConfigAll', $ConfigAll);				
				$request->setObject('Navigation', $Navigation);
				$request->setProperty("Title", $Title);			
				$request->setProperty("ActiveAdmin", 'Admin');
		}
	}
?>