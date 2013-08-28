<?php
Namespace MVC\Library;
class Statistic{

    private $Id;
	private $Name;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( ){
                
    }
    static function getCount(){		
		$mConfig = new \MVC\Mapper\Config();
		$Config = $mConfig->findByName('GUEST_VISIT');
		return $Config->getValue();
	}
	static function getCountPrint(){
		$mConfig = new \MVC\Mapper\Config();
		$Config = $mConfig->findByName('GUEST_VISIT');
		$Config->setValue( $Config->getValue()+1 );
		$mConfig->update($Config);
		$N = new Number( $Config->getValue() );
		return $N->formatCurrency();
	}
	
	static function getOnlinePrint(){
		
		$mGuest = new \MVC\Mapper\Guest();
		//Lấy tham số về
		$IP = $_SERVER['REMOTE_ADDR'];
		$Agent = $_SERVER['REMOTE_ADDR']; //$_SERVER['USER_AGENT'];
		$EntryTime = \time();
		$ExitTime= \time()+(60*60*1);
		if (!isset($Agent))
			$Agent = "";
		
		//Kiểm tra dữ liệu có thực
		if(!empty($IP) || !empty($Agent)){
		
			//Kiểm tra IP có tồn tại trong CSDL hay chưa ?
			$Guests = $mGuest->findByIP(array($IP));
		
			//Nếu chưa có thì thêm mới vào CSDL
			if($Guests->count() == 0){
				$Guest = new \MVC\Domain\Guest(
					null,
					$IP,
					$Agent,
					$EntryTime,
					$ExitTime
				);
				$mGuest->insert($Guest);
			}
			$Guests = $mGuest->findAll();
			$N = new Number($Guests->count());
			$mGuest->delete(array($EntryTime));
						
			return $N->formatCurrency();
		}
		return 0;
	}
}	
?>