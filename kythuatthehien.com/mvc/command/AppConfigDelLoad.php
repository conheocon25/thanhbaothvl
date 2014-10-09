<?php
	namespace MVC\Command;	
	class AppConfigDelLoad extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdConfig = $request->getProperty('IdConfig');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			
			$mCategoryNews = new \MVC\Mapper\CategoryNews();
			$mCategoryVideo = new \MVC\Mapper\CategoryVideo();
					
			$mAlbum = new \MVC\Mapper\Album();
			$mConfig = new \MVC\Mapper\Config();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			
			$CategoryNewsAll = $mCategoryNews->findAll();
			$CategoryVideoAll = $mCategoryVideo->findAll();
			
			$AlbumAll = $mAlbum->findAll();
			
			$ConfigAll = $mConfig->findAll();					
			$Config = $mConfig->find($IdConfig);
			
			$Title = mb_strtoupper($Config->getParam(), 'UTF8');
			$Navigation = array(
				array("TRANG CHỦ", "/trang-chu"),
				array("QUẢN LÝ", "/app"),
				array("CẤU HÌNH", "/app/config")
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			
			$request->setObject("CategoryNewsAll", $CategoryNewsAll);
			$request->setObject("CategoryVideoAll", $CategoryVideoAll);
			
			
			
			$request->setObject('AlbumAll', $AlbumAll);			
			$request->setObject('ConfigAll', $ConfigAll);			
			$request->setObject('Config', $Config);
			
			$request->setObject('Navigation', $Navigation);
			$request->setProperty("Title", $Title);
			$request->setProperty("ActiveItem", 'Home');
			$request->setProperty("ActiveAdmin", 'Statistic');
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>