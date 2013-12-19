<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Category extends Object{

    private $Id;
	private $Name;
	private $Id_position;
	private $Factory;
	private $Position;
	
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $Id_position=null, $Name=null, $Factory=null ) {
        $this->Id = $Id;
		$this->Id_position = $Id_position;
		$this->Name = $Name;
		$this->Factory = $Factory;		
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
	
	function getId_position( ) {
        return $this->Id_position;
    }
    function setId_position( $Id_position ) {
        $this->Id_position = $Id_position;
        $this->markDirty();
    }
	function getPosition(){		
			$mPositions = new \MVC\Mapper\Positions();
			$Position = $mPositions->find($this->getId_position());		
		return $Position;
	}
	
	function getFactory( ) {
        return $this->Factory;
    }
    function setFactory( $Factory ) {
        $this->Factory = $Factory;
        $this->markDirty();
    }
	
	function getURLUpdLoad(){return "/thu-lao/manager/".$this->getId() ."/upd/load";}
	function getURLUpdExe(){return "/thu-lao/manager/".$this->getId() ."/upd/exe";}
	function getURLDelLoad(){return "/thu-lao/manager/".$this->getId()."/del/load";}
	function getURLDelExe(){return "/thu-lao/manager/".$this->getId()."/del/exe";}
	
	
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
