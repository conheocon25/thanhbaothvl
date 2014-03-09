<?php		
	namespace MVC\Command;	
	class ReportStoreDetail extends Command {
		function doExecute( \MVC\Controller\Request $request ){
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
			$mStore = new \MVC\Mapper\Store();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Stores = $mStore->findAll();
			$Sum = 0;
			$Stores->rewind();
			while ($Stores->valid()){
				$Sum += $Stores->current()->getValue();
				$Stores->next();
			}
			$NSum = new \MVC\Library\Number($Sum);
			
			$Stores1 = $mStore->findAll();
			$Title = "TỒN KHO";
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Title', $Title);
			$request->setProperty('SumPrint', $NSum->formatCurrency()." đ");
			$request->setProperty('SumStrPrint', $NSum->readDigit()." đồng");
			$request->setObject('Stores', $Stores);
			$request->setObject('Stores1', $Stores1);
			
		}
	}
?>