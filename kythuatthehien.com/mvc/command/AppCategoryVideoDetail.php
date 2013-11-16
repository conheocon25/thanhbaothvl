<?php
	namespace MVC\Command;	
	class AppCategoryVideoDetail extends Command{
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
			$IdCategory = $request->getProperty('IdCategory');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			require_once("mvc/base/mapper/MapperDefault.php");
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$CategoryVideoAll = $mCategoryVideo->findAll();						
			$Category = $mCategoryVideo->find($IdCategory);
			
			if (!isset($Page)) $Page = 1;
			$Config = $mConfig->findByName("ROW_PER_PAGE");
			$VLAll = $mVideoLibrary->findByPage(array($IdCategory, $Page, $Config->getValue() ));
			$PN = new \MVC\Domain\PageNavigation($Category->getVLs()->count(), $Config->getValue(), $Category->getURLVideo());
			
			$Title = mb_strtoupper($Category->getName(), 'UTF8');
			$Navigation = array(
				array("TRANG CHỦ", "/trang-chu"),
				array("QUẢN LÝ", "/app"),
				array("VIDEO", "/app/category/video")
			);
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setObject("CategoryVideoAll", $CategoryVideoAll);			
			$request->setObject("Category", $Category);
			$request->setObject("VLAll", $VLAll);
			$request->setObject("PN", $PN);
			$request->setObject('Navigation', $Navigation);
			$request->setProperty("Page", $Page);
			$request->setProperty("Title", $Title);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>