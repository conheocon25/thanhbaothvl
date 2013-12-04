<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Category extends Object{

    private $Id;
	private $Name;
	
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $Name=null ) {
        $this->Id = $Id;
		$this->Name = $Name;
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
    function setName( $Name ) {
        $this->Name = $Name;
        $this->markDirty();
    }
	function getNumbers(){
		$mNumber = new \MVC\Mapper\Number();
		$Numbers = $mNumber->findByCategory($this->Id);
		//print_r($Numbers);
		return $Numbers;
	}
	function getNumbersByPage($CurrentPage, $RowsPage ){
		$mNumber = new \MVC\Mapper\Number();
		$Numbers = $mNumber->findByCategoryPage(array($this->Id, $CurrentPage, $RowsPage));
		return $Numbers;
	}
	function getURLNumber( ) {
        return "?cmd=ViewNumberByCategory&Id=".$this->Id;
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
