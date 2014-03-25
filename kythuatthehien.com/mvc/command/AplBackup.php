<?php
	namespace MVC\Command;	
	use MVC\Library\DBStatus;
	use MVC\Library\Encrypted;
	class AplBackup extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
			$User = $Session->getCurrentUser();						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
									
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------	
			
			$mEncrypted = new Encrypted("","","");
			$res = $mEncrypted->readStrConnection();
			$StrConnection = explode(" ", $res);
			
			
			$mDBStatus =  new \MVC\Library\DBStatus( $StrConnection[0] , $StrConnection[1], $StrConnection[2], $StrConnection[3]);			
			
			$mDBStatus->connect();
			$mDBStatus->getNameTables('ktth_');
			$ScripDB = $mDBStatus->getScriptBackup();
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			
			$Title = "NHẬT KÝ CHƯƠNG TRÌNH";
			$Navigation = array(
				//array("TRANG CHỦ", "/thu-lao/app"),
				array("SAO LƯU DỮ LIỆU", "/thu-lao/backup")
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			
			
			//$request->setObject("CategoryVideoAll", $CategoryVideoAll);
			//$request->setObject("CategoryAskAll", $CategoryAskAll);
			//$request->setObject("CategoryProgrameAll", $CategoryProgrameAll);
			
			//$request->setObject('AlbumAll', $AlbumAll);
			
			$request->setObject('ScripDB', $ScripDB); 
			
			$request->setObject('Navigation', $Navigation);
			$request->setProperty("Title", $Title);			
			$request->setProperty("ActiveAdmin", 'Backup');
		}
	}
?>