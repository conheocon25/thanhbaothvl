<?php
	namespace MVC\Command;	
	use MVC\Library\Encrypted;
	class AplRewardUpdateExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdReward = $request->getProperty('IdReward');		
			$IdCategory = $request->getProperty('IdCategory');
			$DateStart = $request->getProperty('DateStart');
			$Count = $request->getProperty('Count');
			$Content = $request->getProperty('Content');
			$Note = $request->getProperty('Note');			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			require_once("mvc/base/mapper/MapperDefault.php");				
			$User = $Session->getCurrentUser();						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($IdReward)||$DateStart=="")
				return self::statuses('CMD_NO_AUTHOR');
				
			$CurSalarydaily = $mSalarydaily->find($IdReward);
			
			$CurSalarydaily->setId_category($IdCategory);
			$CurSalarydaily->setDate_work($DateStart);
			$CurSalarydaily->setCount($Count);
			$CurSalarydaily->setContent($Content);
			$CurSalarydaily->setNote($Note);
			
			$mSalarydaily->update($CurSalarydaily);
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>