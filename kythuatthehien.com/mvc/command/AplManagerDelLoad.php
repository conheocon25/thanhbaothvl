<?php
	namespace MVC\Command;	
	class AplManagerDelLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
				$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdCategory = $request->getProperty('IdCategory');								
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
				$CurSalarydaily = $mSalarydaily->find($IdReward);							
				$Category = $mCategory->find($IdCategory);
				$CategoryNewsAll = $mCategoryNews->findAll();
				$CategoryVideoAll = $mCategoryVideo->findAll();			
								
				$User = $Session->getCurrentUser();
				$mCurrentMonth = $Session->getCurrentMonth();			
				$mCurrentYear = $Session->getCurrentYear();			
				
				$AlbumAll = $mAlbum->findAll();
				$ConfigAll = $mConfig->findAll();		
				
				$Title = "QUẢN LÝ";
				$Navigation = array(					
					array("NHẬP ĐIỂM", "/thu-lao/reward")
				);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
				
				$request->setObject("CategoryNewsAll", $CategoryNewsAll);
				$request->setObject("CategoryVideoAll", $CategoryVideoAll);			
				$request->setObject("Category", $Category);
				
				$request->setObject('CurSalarydaily', $CurSalarydaily);				
				$request->setObject('AlbumAll', $AlbumAll);				
				$request->setObject('ConfigAll', $ConfigAll);				
				$request->setObject('Navigation', $Navigation);
				$request->setProperty("Title", $Title);			
				$request->setProperty("ActiveAdmin", 'Admin');
		}
	}
?>