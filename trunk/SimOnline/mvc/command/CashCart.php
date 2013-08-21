<?php
	namespace MVC\Command;
	use MVC\Library\CartShopping;
	use MVC\Library\Captcha;
	require_once("mvc/base/Command.php");
	class CashCart extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
		
			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			$SimCart = $Session->getCurrentCart();			
			$mNumber = new \MVC\Mapper\Number();
			$Captcha = $Session->getCurrentCaptchaCode();
			
			$CaptchaCode = $request->getProperty('CaptchaCode');
			
			if(!isset($Captcha))
			{
				$mCaptcha = new Captcha();
				$mCaptcha->createSecurityCode();				
				$mCaptcha->createImage();
				$Session->setCurrentCaptchaCode($mCaptcha);	
				$Code = $Captcha->getSecurityCode();				
			}
			else
			{
				$Code = $Captcha->getSecurityCode();
			}
			if(($CaptchaCode == $Code) && (isset($Code)) )
			{
				//echo "Vo ne : ".$Code;
				
				$Date = date("Y-m-d H:i:s");
				$Name = $request->getProperty('ordername');
				$Phone = $request->getProperty('orderphone');
				$Email = $request->getProperty('orderemail');
				$request->setProperty('CustomerEmail',$Email);
				$Address = $request->getProperty('DiaChiGiaoHang')." , ".$request->getProperty('cboQuanHuyen')." , ".$request->getProperty('cboTinhThanh');
				$Note = $request->getProperty('ordernote');
				if (isset($Name)){
					$dCustomer = new \MVC\Domain\Customer(
						null,
						$Name,
						"",
						$Phone,
						$Address,
						$Email
					);
					$mCustomer = new \MVC\Mapper\Customer();
					$mCustomer->Insert($dCustomer);
					
					//-----------Thêm Vào Order-------------
					$IdCustomer =  $dCustomer->getId();
					if(isset($IdCustomer)){
						if(isset($SimCart))
						{
							$i= 0;
							$mOrder = new \MVC\Mapper\Order();
							$mNumber = new \MVC\Mapper\Number();
										
							while ($i < $SimCart->count()){					
								$DNumber = $mNumber->find($SimCart->getId($i));

								$dOrder = new \MVC\Domain\Order(
									null,
									$IdCustomer,
									$DNumber->getNumber(),
									0,
									$Date,
									$Note,
									""
								);								
								$mOrder->Insert($dOrder);
								
								$i++; 
							}
							$SimCart->clear();	
						}	
						
					}	
					
					return self::statuses('CMD_OK');
				}
			}
			else
			{				
				$Captcha->createSecurityCode();				
				$Captcha->createImage();
			}
			
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
			
			$Title_Network = "Danh sách nhà mạng";
			$request->setProperty("Title_Network", $Title_Network);
			$Title_Category = "Sim đẹp phân loại";
			$request->setProperty("Title_Category", $Title_Category);
			//---------------------------------------
			$Title = mb_strtoupper("ĐẶT MUA SIM", 'UTF-8');
			$request->setProperty("Title", $Title);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>