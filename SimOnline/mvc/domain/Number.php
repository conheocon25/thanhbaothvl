<?php
 namespace MVC\Domain;
 require_once( "mvc/base/domain/DomainObject.php" );
 class Number extends Object{

    private $Id;
	private $Number;
	private $FormatNumber;
    private $Price;
	private $State;
	private $IdCategory;
	private $HeadNetwork;
	
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $Number=null, $FormatNumber=null, $Price=null, $State=null, $IdCategory=null ) {
        $this->Id = $Id;
		$this->Number = $Number;
		$this->FormatNumber = $FormatNumber;
		$this->Price = $Price;
		$this->State = $State;
		$this->IdCategory = $IdCategory;
        parent::__construct( $Id );
    }
    function getId( ) {
        return $this->Id;
    }	
	
    function setId( $Id ) {
        $this->Id = $Id;
        $this->markDirty();
    }
    function getNumber( ) {
        return $this->Number;
    }
	function setNumber( $Number ) {
        $this->Number = $Number;
        $this->markDirty();
    }
	function getFormatNumber( ) {
        return $this->FormatNumber;
    }
	function setFormatNumber( $FormatNumber ) {
        $this->FormatNumber = $FormatNumber;
        $this->markDirty();
    }
	function getPrice( ) {
        return $this->Price;
    }
    function setPrice( $Price ) {
        $this->Price = $Price;
        $this->markDirty();
    }
	function setState( $State ) {
        $this->State = $State;
        $this->markDirty();
    }
    function getState( ) {
        return $this->State;
    }
	function getStatePrint( ) {
        if($this->State==0){
			return "Chưa Bán";
		}else{
			return "Đã Bán";
		}
    }
	function getNumberCart() {
		return "?cmd=ViewCart&IdNumber=".$this->Id;
	}
	function setIdCategory( $IdCategory ) {
        $this->IdCategory = $IdCategory;
        $this->markDirty();
    }
    function getIdCategory( ) {
        return $this->IdCategory;
    }
	function getCategory(){
		$mCategory = new \MVC\Mapper\Category();
		$Category = $mCategory->find($this->IdCategory);
		//print_r($Category);
		return $Category;
	}
	function getHead(){
		if(strlen($this->Number)==10){
			$Head = substr($this->Number,0,3);
		}elseif(strlen($this->Number)==11){
			$Head = substr($this->Number,0,4);
		}
		return $Head;
	}
	
	
	function getURLDeleteCart(){
		return "?cmd=DeleteCart&IdDelete=".$this->Id;
	}
	function getURLImage(){
		$a = array(
			"090"=>"Mobifone.png",
			"093"=>"Mobifone.png",
			"0120"=>"Mobifone.png",
			"0121"=>"Mobifone.png",
			"0122"=>"Mobifone.png",
			"0126"=>"Mobifone.png",
			"0128"=>"Mobifone.png",
			"091"=>"Vinaphone.png",
			"094"=>"Vinaphone.png",
			"0123"=>"Vinaphone.png",
			"0124"=>"Vinaphone.png",
			"0125"=>"Vinaphone.png",
			"0127"=>"Vinaphone.png",
			"0129"=>"Vinaphone.png",
			"097"=>"Viettel.png",
			"098"=>"Viettel.png",
			"016"=>"Viettel.png",
			"0188"=>"Vietnamemobile.png",
			"092"=>"Vietnamemobile.png",
			"099"=>"Beeline.png",
			"0199"=>"Beeline.png",
			"095"=>"Sfone.png",
			"096"=>"EvnTelecom.png"
			);
		$Head = $this->getHead();
		$HN ="$Head";
		return "mvc/templates/theme/base/images/app/".$a[$HN];
	}
	function getTitleCartLinked(){
		return "Bạn chọn để mua Sim ".$this->FormatNumber;	
	}	
    static function findAll() {
        $finder = self::getFinder( __CLASS__ ); 
        return $finder->findAll();
    }
    static function find( $id ) {
        $finder = self::getFinder( __CLASS__ ); 
        return $finder->find( $id );
    }	
}

?>
