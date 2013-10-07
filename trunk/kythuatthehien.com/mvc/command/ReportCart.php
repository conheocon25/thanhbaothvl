<?php
	namespace MVC\Command;
	use MVC\Library\CartShopping;
	use MVC\Library\Mail;
	require_once("mvc/base/Command.php");
	class ReportCart extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
		
			$Session = \MVC\Base\SessionRegistry::instance();
			//$SimCart = $Session->getCurrentCart();	
			$mNumber = new \MVC\Mapper\Number();						
			$CustomerEmail = $request->getProperty("CustomerEmail");
			$message = "Bạn đã đặt mua thành công ! \n";
			/*
			if(isset($SimCart))
			{
				$i = 0;
				while ($i < $SimCart->count()){					
				$DNumber = $mNumber->find($SimCart->getId($i));
				$message += "Sim :".$DNumber->getNumber()." \n";
				}
			}*/
			if(isset($CustomerEmail))
			{				
				$AdminMailName = "thegioisim24h.com";
				$AdminMail ="contact@123app.net";
				$ToMail = $CustomerEmail;
				$MailSubject = "Đăng Ký mua Sim Số tại thegioisim24h.com";
				$MailContent = "					
					Cám ơn Quý Khách Đã Ủng Hộ Chúng tôi! \n
					Rất mong các bạn đóng góp cho chúng tôi!
				";				
				$mMail = new Mail('mail.123app.net', 'contact@123app.net', 'contact@123app.net', 'admin123456');
				$mMail->SendMail( $AdminMailName, $AdminMail, $ToMail, $MailSubject, $MailContent);
			}			
			//$SimCart->clear();				
						
			$request->setProperty("Msg", $CustomerEmail);
			
			$mOrder = new \MVC\Mapper\Order();
			$Orders = $mOrder->findAll();
			$request->setObject("Orders", $Orders);
			
			$HotNumbers = $mNumber->findHotNumber();
			$request->setObject("HotNumbers", $HotNumbers);
			
			$mNetwork = new \MVC\Mapper\Network();
			$Networks = $mNetwork->findAll();
			$request->setObject("Networks", $Networks);
			
			$mCategory = new \MVC\Mapper\Category();
			$Categorys = $mCategory->findAll();
			
			$request->setObject("Categorys", $Categorys);
			$Title = mb_strtoupper("ĐẶT MUA SIM", 'UTF-8');
			$request->setProperty("Title", $Title);
			
			$Title_Network = mb_strtoupper("Danh sách nhà mạng", 'UTF-8');
			$request->setProperty("Title_Network", $Title_Network);
			
			$Title_Category = mb_strtoupper("Danh sách loại sim", 'UTF-8');
			$request->setProperty("Title_Category", $Title_Category);
			return self::statuses('CMD_DEFAULT');
		}
	}
?>