<?php
	namespace MVC\Command;	
	class App extends Command {
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
			require_once("mvc/base/mapper/MapperDefault.php");
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			//$CategoryBTypeAll = $mCategoryBType->findAll();
			$CategoryNewsAll = $mCategoryNews->findAll();
			$CategoryVideoAll = $mCategoryVideo->findAll();			
			$CategoryAskAll = $mCategoryAsk->findAll();			
			
			$AlbumAll = $mAlbum->findAll();
			$ConfigAll = $mConfig->findAll();		
			
			$Title = "QUẢN LÝ";
			$Navigation = array(
				array("TRANG CHỦ", "/trang-chu")
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setObject("CategoryBTypeAll", $CategoryBTypeAll);
			$request->setObject("CategoryNewsAll", $CategoryNewsAll);
			$request->setObject("CategoryVideoAll", $CategoryVideoAll);
			$request->setObject("CategoryAskAll", $CategoryAskAll);
			
			$request->setObject('AlbumAll', $AlbumAll);
			
			$request->setObject('ConfigAll', $ConfigAll); 
			
			$request->setObject('Navigation', $Navigation);
			$request->setProperty("Title", $Title);			
			$request->setProperty("ActiveAdmin", 'Admin');
		}
	}
?>