<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Positions extends Object{
	private $Id;
	private $Name;
	private $Count;
	private $Note;
	
	function __construct( $Id=null, $Name=null, $Count=Null, $Note=Null) {
		$this->Id = $Id;
		$this->Name = $Name;
		$this->Count = $Count;		
		$this->Note = $Note;		
		parent::__construct( $Id );
	}

	function getId() {
		return $this->Id;
	}

	function getCount() {
	return $this->Count;
	}

	function setCount( $Count ) {
		$this->Count = $Count;
		$this->markDirty();
	}

	function getName( ) {
		return $this->Name;
	}

	function setName( $Name ) {
		$this->Name = $Name;
		$this->markDirty();
	}
	
	function getNote( ) {
		return $this->Note;
	}

	function setNote( $Note ) {
		$this->Note = $Note;
		$this->markDirty();
	}	
		
	function getURLUpdate(){
		return "?cmd=UpdateHeadNetwork&IdHeadNetwork=".$this->Id;
	}
	function getURLView(){
		return "?cmd=ViewNumbers&IdHeadNetwork=".$this->Id;
	}
	function getURLViewHeads(){
		return "?cmd=ViewHeadNetworks&IdNetwork=".$this->IdNetwork;
	}
	function getURLDelete(){
		return "?cmd=DeleteHeadNetwork&IdHeadNetwork=".$this->Id;
	}
	
	static function findAll() {
		$finder = self::getFinder( __CLASS__ ); 
		return $finder->findAll();
	}

	static function find( $Id ) {
		$finder = self::getFinder( __CLASS__ ); 
		return $finder->find( $Id );
	}
}

?>
