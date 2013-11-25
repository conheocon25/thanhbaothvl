<?php
	namespace MVC\Command;	
	class AplSignoutLoad extends Command {
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
			$mCategoryNews = new \MVC\Mapper\CategoryNews();
			
			
			$mNews = new \MVC\Mapper\News();
			
			$mConfig = new \MVC\Mapper\Config();
			
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Title = "WEB SITE KỸ THUẬT THỂ HIỆN";												
		
							
			$CategoriesNews = $mCategoryNews->findAll();
			
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty("Title", "ĐÓNG ỨNG DỤNG");			
			$request->setProperty("ActiveItem", 'Home');
			
			$request->setObject("CategoriesNews", $CategoriesNews);
			
		}
	}
?>