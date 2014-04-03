<?php
	namespace MVC\Command;	
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
			
			$mysqlHostName ='localhost';
			$mysqlDatabaseName = $StrConnection[1];
			$mysqlUserName = $StrConnection[2];
			$mysqlPassword = $StrConnection[3];
			$mysqlPath ="D:\\xampp\\mysql\\bin\\";
			
			$backupFileName = $mysqlDatabaseName. "_" . date("d-m-Y-H-i-s") . '.sql';
			$backupPathFileName = ".\\data\\". $backupFileName ;
			
			//$backupPathFileName = $_SERVER['DOCUMENT_ROOT'] ;			
			
			$command = $mysqlPath ."mysqldump --opt -h". $mysqlHostName ." -u". $mysqlUserName ." -p". $mysqlPassword ." ". $mysqlDatabaseName ." > ". $backupPathFileName ;
			exec($command);
			
			/* in content html hien tai 			
			header("Content-Type: application/force-download");
			header("Content-Type:audio/mpeg");
			header("Content-Type: application/download");;
			header("Content-Disposition: attachment;filename=".$backupfile);
			*/
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			
			$Title = "SAO LƯU CƠ SỞ DỮ LIỆU";
			$Navigation = array(				
				array("SAO LƯU DỮ LIỆU", "/thu-lao/backup")
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			
			$request->setObject('FileNameDB', $backupFileName); 
			$request->setObject('PathFileName', $backupPathFileName); 
			
			$request->setObject('Navigation', $Navigation);
			$request->setProperty("Title", $Title);			
			$request->setProperty("ActiveAdmin", 'Backup');
		}
		
	}
?>