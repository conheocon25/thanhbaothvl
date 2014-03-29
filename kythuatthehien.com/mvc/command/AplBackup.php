<?php
	namespace MVC\Command;	
	use MVC\Library\DBBackup;
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
			
			$connection =new \MVC\Library\DBBackup($StrConnection[0],$StrConnection[1],$StrConnection[2], $StrConnection[3]);
			$connection->backup_tables();			
			$FileName = $connection->getFileNameBackup();			
			$connection->closeConnection();
			
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
			
			$request->setObject('ScriptDB', $FileName); 
			
			$request->setObject('Navigation', $Navigation);
			$request->setProperty("Title", $Title);			
			$request->setProperty("ActiveAdmin", 'Backup');
		}
		
	}
?>