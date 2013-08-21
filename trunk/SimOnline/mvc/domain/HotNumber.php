<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class HotNumber extends Object{

    private $Id;
	private $IdNumber;
	private $Date;
	
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $IdNumber=null, $Date=null ) {
        $this->Id = $Id;
		$this->IdNumber = $IdNumber;
		$this->Date = $Date;
        parent::__construct( $Id );
    }
    function getId( ) {
        return $this->Id;
    }	
	
    function setId( $Id ) {
        $this->Id = $Id;
        $this->markDirty();
    }
	function getIdNumber( ) {
        return $this->IdNumber;
    }	
	
    function setIdNumber( $IdNumber ) {
        $this->IdNumber = $IdNumber;
        $this->markDirty();
    }
    function getDate( ) {
        return $this->Date;
    }
    function setDate( $Date ) {
        $this->Date = $Date;
        $this->markDirty();
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
