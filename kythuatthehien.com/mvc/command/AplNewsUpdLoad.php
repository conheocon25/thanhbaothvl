<?php
	namespace MVC\Command;	
	class AplNewsUpdLoad extends Command{
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
			
			$Title = "CẬP NHẬT TIN TỨC";
			$Navigation = array(			
				array("TIN TỨC", "/thu-lao/news")
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			
			$request->setObject( 'CategoryNewsAll', $CategoryNewsAll );
				
			$request->setObject( 'News', $News );
			
			$request->setObject( 'Navigation', $Navigation );
			$request->setProperty('ActiveAdmin', "News");
			$request->setProperty("Title", $Title);			
		}
	}
?>
