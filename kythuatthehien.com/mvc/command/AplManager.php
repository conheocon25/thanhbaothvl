<?php
	namespace MVC\Command;	
	class AplManager extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
			$User = $Session->getCurrentUser();						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
									
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------	
			require_once("mvc/base/mapper/MapperDefault.php");
			
			$mCategory = new \MVC\Mapper\Category();
			
			$CategoryProgrameAll = null;
			
			if ( $User->isAdmin() == true ){
				$CategoryProgrameAll = $mCategory->findAll();
			} else {
				$CategoryProgrameAll = $mCategory->findByPosition($User->getIdPosition());
				
			}
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			//$CategoryBTypeAll = $mCategoryBType->findAll();
			$CategoryNewsAll = $mCategoryNews->findAll();
			$CategoryVideoAll = $mCategoryVideo->findAll();			
			$CategoryAskAll = $mCategoryAsk->findAll();			
			
			$AlbumAll = $mAlbum->findAll();
			$ConfigAll = $mConfig->findAll();		
			
			$Title = "CẬP NHẬT DANH MỤC CHƯƠNG TRÌNH";
			$Navigation = array(			
				array("QUẢN LÝ", "/thu-lao")
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			
			$request->setObject("CategoryNewsAll", $CategoryNewsAll);
			$request->setObject("CategoryVideoAll", $CategoryVideoAll);
			$request->setObject("CategoryAskAll", $CategoryAskAll);
			$request->setObject("CategoryProgrameAll", $CategoryProgrameAll);
			
			$request->setObject('AlbumAll', $AlbumAll);
			
			$request->setObject('ConfigAll', $ConfigAll); 
			
			$request->setObject('Navigation', $Navigation);
			$request->setProperty("Title", $Title);			
			$request->setProperty("ActiveAdmin", 'Manager');
		}
	}
?>