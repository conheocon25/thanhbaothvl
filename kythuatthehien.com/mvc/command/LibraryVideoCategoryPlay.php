<?php
	namespace MVC\Command;	
	class LibraryVideoCategoryPlay extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			
			$KCategory = $request->getProperty('KCategory');
			$KVideoLibrary = $request->getProperty('KVideoLibrary');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------						
			require_once("mvc/base/mapper/MapperDefault.php");
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------												
			
			$Category = $mCategoryVideo->findByKey($KCategory);			
			$Video = $mVideo->findByKey($KVideoLibrary);			
			$VLs = $mVideoLibrary->findByLimit(array($Category->getId()));			
			$CategoryAskAll = $mCategoryAsk->findAll();
			$CategoryNewsAll = $mCategoryNews->findAll();
			$CategoriesVideo = $mCategoryVideo->findAll();			
			$Users = $mUser->findAll();			
			
			$Video->setCount( $Video->getCount()+1 );
			$mVideo->update($Video);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setObject("CategoryAskAll", $CategoryAskAll);
			$request->setObject("CategoryNewsAll", $CategoryNewsAll);
			$request->setObject("CategoriesVideo", $CategoriesVideo);
			$request->setObject("Users", $Users);			
			$request->setObject("Category", $Category);			
			$request->setObject("Video", $Video);
			$request->setObject("VLs", $VLs);
							
			$request->setProperty("ActiveItem", 'LibraryVideo');
			return self::statuses('CMD_DEFAULT');
		}
	}
?>