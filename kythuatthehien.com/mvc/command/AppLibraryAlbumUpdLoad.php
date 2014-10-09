<?php
	namespace MVC\Command;	
	class AppLibraryAlbumUpdLoad extends Command{
		function doExecute( \MVC\Controller\Request $request ){
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
			$Album = $mAlbum->find($IdAlbum);			
			$Title = "QUẢN LÝ / ALBUM / ".$Album->getName()." / CẬP NHẬT";
			
			$CategoryNewsAll = $mCategoryNews->findAll();			
			
			$Title = mb_strtoupper($Album->getName(), 'UTF8');
			$Navigation = array(
				array("TRANG CHỦ", "/trang-chu"),
				array("QUẢN LÝ", "/app"),
				array("HÌNH ẢNH", "/app/album")
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setObject('Album', $Album);
			
			$request->setObject("CategoryNewsAll", $CategoryNewsAll);
			
			$request->setObject('Navigation', $Navigation);	
			$request->setProperty('Title', $Title);
			$request->setProperty('ActiveItem', 'Home');
		}
	}
?>
