<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Network extends Object{

    private $Id;
	private $Name;
	private $Picture;
	
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $Name=null, $Picture=null ) {
        $this->Id = $Id;
		$this->Name = $Name;
		$this->Picture = $Picture;
        parent::__construct( $Id );
    }
    function getId( ) {
        return $this->Id;
    }	
	
    function setId( $Id ) {
        $this->Id = $Id;
        $this->markDirty();
    }
	function getName( ) {
        return $this->Name;
    }	
	
    function setName( $Name) {
        $this->Name = $Name;
        $this->markDirty();
    }
    function getPicture( ) {
        return $this->Picture;
    }
	//--------------------------------------------------
	function getNumbers(){
		$mNumber = new \MVC\Mapper\Number();
		$Numbers = $mNumber->findBy($this->Id);
		//print_r($Numbers);
		return $Numbers;
	}
	function getNumbersByPage($CurrentPage, $RowsPage ){
		$mNumber = new \MVC\Mapper\Number();
		$Numbers = $mNumber->findByNetworkPage(array($this->Id, $CurrentPage, $RowsPage));
		return $Numbers;
	}
	//--------------------------------------------------
	function getURLNumber( ) {
       return "?cmd=ViewNumberByNetwork&Id=".$this->Id;
    }
	function getImage( ) {
       return "mvc/templates/theme/base/images/app/".$this->Picture;
    }
	//--------------------------------------------------
    function setPicture( $Picture ) {
        $this->Picture = $Picture;
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
