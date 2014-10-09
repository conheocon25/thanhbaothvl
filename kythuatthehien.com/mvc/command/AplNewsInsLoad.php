<?php
	namespace MVC\Command;	
	class AplNewsInsLoad extends Command {
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
			$mCategoryNews = new \MVC\Mapper\CategoryNews();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------										
			
			$CategoryNewsAll = $mCategoryNews->findAll();
			
						
			$Category = $mCategoryNews->find($IdCategory);
			
			
			$Title = "THÊM MỚI";
			$Navigation = array(				
				array("TIN TỨC", "/thu-lao/news")
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setProperty('Title', $Title);
			$request->setObject( 'Navigation', $Navigation );			
			
			$request->setObject( 'CategoryNewsAll', $CategoryNewsAll );			
			$request->setObject( 'Category', $Category );
			$request->setProperty('ActiveAdmin', "News");
			
		}
	}
?>
