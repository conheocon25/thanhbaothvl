<?php
	namespace MVC\Command;	
	class AppNewsUpdLoad extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			//$IdCategory = $Session->getCurrentCategoryNews();
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdNews = $request->getProperty('IdNews');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			
			$mCategoryNews = new \MVC\Mapper\CategoryNews();
			
			
			$mNews = new \MVC\Mapper\News();			
			
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			
			$CategoryNewsAll = $mCategoryNews->findAll();
			
			$News = $mNews->find($IdNews);			
			
			$Title = mb_strtoupper($News->getTitle(), 'UTF8');
			$Navigation = array(
				array("TRANG CHỦ", "/trang-chu"),
				array("QUẢN LÝ", "/app"),
				array("TIN TỨC", "/app/category/news"),
				array(mb_strtoupper($News->getCategory()->getName(),'UTF8') , $News->getCategory()->getURLView())
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			
			$request->setObject( 'CategoryNewsAll', $CategoryNewsAll );
				
			$request->setObject( 'News', $News );
			
			$request->setObject( 'Navigation', $Navigation );
			$request->setProperty("ActiveItem", 'Home');
			$request->setProperty("Title", $Title);			
		}
	}
?>
