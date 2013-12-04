<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class HeadNetwork extends Object{
	private $Id;
	private $Name;
	private $IdNetwork;
	
	function __construct( $Id=null, $IdNetwork=null, $Name=Null) {
		$this->Id = $Id;
		$this->IdNetwork = $IdNetwork;
		$this->Name = $Name;		
		parent::__construct( $Id );
	}

	function getId() {
		return $this->Id;
	}

	function getIdNetwork() {
	return $this->IdNetwork;
	}

	function setIdNetwork( $IdNetwork ) {
		$this->IdNetwork = $IdNetwork;
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
		$Numbers = $mNumber->findBy(array($this->Name));
		return $Numbers;
	}
	
	function getNumbersByPage($CurrentPage, $RowsPage ){
		$mNumber = new \MVC\Mapper\Number();
		$Numbers = $mNumber->findByPage(array($this->Name, $CurrentPage, $RowsPage));
		return $Numbers;
	}
	
	function getNotInPageNumbers(){
		$mNumber = new \MVC\Mapper\Number();
		$Numbers = $mNumber->findNotInPage(array($this->Name));
		return $Numbers;
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
