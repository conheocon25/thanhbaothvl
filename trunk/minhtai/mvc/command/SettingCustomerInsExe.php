<?php
	namespace MVC\Command;	
	class SettingCustomerInsExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$IdCustomer = $request->getProperty('IdCustomer');
			$Prefix = $request->getProperty('Prefix');
			$Name = $request->getProperty('Name');
			$Alias = $request->getProperty('Alias');
			$Phone = $request->getProperty('Phone');
			$Address = $request->getProperty('Address');
			$Note = $request->getProperty('Note');
			$Debt = $request->getProperty('Debt');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mCustomer = new \MVC\Mapper\Customer();
					
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($Name)||$Name=="")
				return self::statuses('CMD_OK');
				
			$Customer = new \MVC\Domain\Customer(
				null,
				"",
				$Prefix,
				$Name,
				$Alias,
				$Phone,
				$Address,
				$Note,
				$Debt
			);												
			$mCustomer->insert($Customer);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			return self::statuses('CMD_OK');
		}
	}
?>
