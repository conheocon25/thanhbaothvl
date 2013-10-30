<?php
	namespace MVC\Command;	
	class AppLibraryAlbumDelLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdAlbum = $request->getProperty('IdAlbum');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			
			$mCategoryNews = new \MVC\Mapper\CategoryNews();
			
			$mAlbum = new \MVC\Mapper\Album();			
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------							
			
			$CategoryNewsAll = $mCategoryNews->findAll();
			
			$Album = $mAlbum->find($IdAlbum);			
			
			$Title = mb_strtoupper($Album->getName(), 'UTF8');
			$Navigation = array(
				array("TRANG CHỦ", "/trang-chu"),
				array("QUẢN LÝ", "/app"),
				array("HÌNH ẢNH", "/app/album")
			);
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setObject("CategoryNewsAll", $CategoryNewsAll);			
			$request->setObject('Album', $Album);
			$request->setProperty('Title', $Title);			
			$request->setObject('Navigation', $Navigation);		
			$request->setProperty('ActiveItem', 'Home');
		}
	}
?>