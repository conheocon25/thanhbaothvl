<?php
	namespace MVC\Command;	
	class ReadCategoryDetail extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$Key1 = $request->getProperty('Key1');
			$Key2 = $request->getProperty('Key2');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			require_once("mvc/base/mapper/MapperDefault.php");
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$AlbumAll = $mAlbum->findAll();
			$CategoryAskAll = $mCategoryAsk->findAll();
			
			
			$Category = $mCategoryNews->findByKey($Key1);
			$CategoryNewsAll = $mCategoryNews->findAll();						
			$News = $mNews->findByKey($Key2);									
					
			
			
			
			
			
			$Title = mb_strtoupper( $News->getTitle(), 'UTF8');
			
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty("Title", $Title);			
			$request->setObject("Category", $Category);			
			$request->setProperty("ActiveItem", 'ReadCategory');			
			$request->setObject("CategoryNewsAll", $CategoryNewsAll);
			$request->setObject("CategoryAskAll", $CategoryAskAll);	
			$request->setObject("News", $News);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>
