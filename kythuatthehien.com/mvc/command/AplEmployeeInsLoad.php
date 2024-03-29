<?php
	namespace MVC\Command;	
	class AplEmployeeInsLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
				$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
				$IdEmployee = $request->getProperty('IdEmployee');								
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------	
				$mEmployee = new \MVC\Mapper\User();
				$mCategoryNews = new \MVC\Mapper\CategoryNews();				
				$mCategoryVideo = new \MVC\Mapper\CategoryVideo();
				$mAlbum= new \MVC\Mapper\Album();
				$mConfig = new \MVC\Mapper\Config();
				$mPositions = new \MVC\Mapper\Positions();
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
				
				$PositionAll = $mPositions->findAll();
				$CategoryNewsAll = $mCategoryNews->findAll();
				$CategoryVideoAll = $mCategoryVideo->findAll();	

				
				$dEmployee = $mEmployee->find($IdEmployee);			
								
				
				
				$AlbumAll = $mAlbum->findAll();
				$ConfigAll = $mConfig->findAll();		
				
				$Title = "THÊM NHÂN VIÊN MỚI";
				$Navigation = array(					
					array("QUẢN LÝ DOANH MỤC", "/thu-lao/manager")
				);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
				
				$request->setObject("CategoryNewsAll", $CategoryNewsAll);
				$request->setObject("CategoryVideoAll", $CategoryVideoAll);			
				$request->setObject("PositionAll", $PositionAll);
				
				$request->setObject('Employee', $dEmployee);	
				
				$request->setObject('AlbumAll', $AlbumAll);				
				$request->setObject('ConfigAll', $ConfigAll);				
				$request->setObject('Navigation', $Navigation);
				$request->setProperty("Title", $Title);			
				$request->setProperty("ActiveAdmin", 'Employee');
		}
	}
?>