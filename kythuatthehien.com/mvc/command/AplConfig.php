<?php
	namespace MVC\Command;	
	class AplConfig extends Command{
		function doExecute( \MVC\Controller\Request $request ){
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
			
			$CategoryNewsAll = $mCategoryNews->findAll();
			$CategoryVideoAll = $mCategoryVideo->findAll();
			
			$AlbumAll = $mAlbum->findAll();
			
			$ConfigAll = $mConfig->findAll();
			
			$Title = "CẤU HÌNH";
			$Navigation = array(
				array("TRANG CHỦ", "/trang-chu"),
				array("QUẢN LÝ", "/app")
			);
			
			if (!isset($Page)) $Page=1;			
			$Config = $mConfig->findByName("ROW_PER_PAGE");
			$ConfigAll1 = $mConfig->findByPage(array($Page, $Config->getValue() ));
			$PN = new \MVC\Domain\PageNavigation($ConfigAll->count(), $Config->getValue(), "/app/config" );
					
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			
			$request->setObject("CategoryNewsAll", $CategoryNewsAll);
			$request->setObject("CategoryVideoAll", $CategoryVideoAll);
			
			$request->setObject('AlbumAll', $AlbumAll);
			
			$request->setObject('ConfigAll', $ConfigAll); 
			
			
			$request->setObject('ConfigAll1', $ConfigAll1);
			$request->setObject('Navigation', $Navigation);
			$request->setObject('PN', $PN);
			$request->setProperty("Title", $Title);
			$request->setProperty("Page", $Page);
			
			$request->setProperty("ActiveAdmin", 'ChangePass');
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>