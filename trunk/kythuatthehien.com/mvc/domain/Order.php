<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Order extends Object{

    private $Id;
	private $IdCustomer;
	private $IdSim;
    private $Type;
    private $Date;
    private $Note;
	private $State;
	
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $IdCustomer=null, $IdSim=null, $Type=null, $Date=null, $Note=null, $State=null ) {
        $this->Id = $Id;
		$this->IdCustomer = $IdCustomer;
		$this->IdSim = $IdSim;
		$this->Type = $Type;
		$this->Date = $Date;
		$this->Note = $Note;
		$this->State = $State;
        parent::__construct( $Id );
    }
    function getId( ) {
        return $this->Id;
    }	
    function setId( $Id ) {
        $this->Id = $Id;
        $this->markDirty();
    }
    function getIdCustomer( ) {
        return $this->IdCustomer;
    }
	function setIdCustomer( $IdCustomer ) {
        $this->IdCustomer = $IdCustomer;
        $this->markDirty();
    }
	function getIdSim( ) {
        return $this->IdSim;
    }
	function getTitleOrder( ) {
        return "Đã Mua ".$this->IdSim;
    }
	function setIdSim( $IdSim ) {
        $this->IdSim = $IdSim;
        $this->markDirty();
    }
	function getType( ) {
        return $this->Type;
    }
    function setType( $Type ) {
        $this->Type = $Type;
        $this->markDirty();
    }
	function getDate( ) {
        return $this->Date;
    }
    function setDate( $Date ) {
        $this->Date = $Date;
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
	function setNote( $Note ) {
        $this->Note = $Note;
        $this->markDirty();
    }
    function getNote( ) {
        return $this->Note;
    }
	function getCustomer(){
		$mCustomer = new \MVC\Mapper\Customer();
		$Customer = $mCustomer->find($this->IdCustomer);
		return $Customer;
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
