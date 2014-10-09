<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Schedule extends Object{

    private $Id;
    private $IdPosition;
	private $Name;
	private $DateStart;
	private $DateEnd;
	private $Description;	
	private $Note;	
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( $Id=null, $IdPosition=Null, $Name=Null, $DateStart=null, $DateEnd=null, $Description=null, $Note=null ){
		$this->Id = $Id;
		$this->IdPosition = $IdPosition;
		$this->Name = $Name;
		$this->DateStart = $DateStart;
		$this->DateEnd = $DateEnd;
		$this->Description = $Description;
		$this->Note = $Note;
		parent::__construct( $Id );
	}
    function getId() {return $this->Id;}	   		
	
	function getIdPosition() {return $this->IdPosition;}	
	function setIdPosition( $IdPosition ){$this->IdPosition = $IdPosition;$this->markDirty();}  
	
	function setName( $Name ){$this->Name = $Name;$this->markDirty();}   
	function getName( ) {return $this->Name;}
		
	function setDateStart( $DateStart ){$this->DateStart = $DateStart;$this->markDirty();}   
	function getDateStart( ) {return $this->DateStart;}
	function getDateStartPrint( ){$D = new \MVC\Library\Date($this->DateStart);return $D->getDateFormat();}
	
	function setDateEnd( $DateEnd ){$this->DateEnd = $DateEnd;$this->markDirty();}   
	function getDateEnd( ) {return $this->DateEnd;}
	function getDateEndPrint( ){$D = new \MVC\Library\Date($this->DateEnd);return $D->getDateFormat();}
	
	function getImage(){
		$first_img = '';
		\ob_start();
		\ob_end_clean();
		if(preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $this->Description, $matches)){
			$first_img = $matches[1][0];
		}
		else {
			$first_img = "/data/images/thu-lao/schedule.jpg";
		}
		return $first_img;
	}
	
	function setDescription( $Description ){$this->Description = $Description;$this->markDirty();}   
	function getDescription( ) {return $this->Description;}
	
	function setNote( $Note ){$this->Note = $Note;$this->markDirty();}   
	function getNote( ) {return $this->Note;}
	
	
	
	//-------------------------------------------------------------------------------
	//GET LISTs
	//-------------------------------------------------------------------------------
	function getPosition(){		
			$mPositions = new \MVC\Mapper\Positions();
			$this->Position = $mPositions->find($this->IdPosition);		
		return $this->Position;
	}
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	
	
	function getURLScheduleUser(){return "/thu-lao/schedule/".$this->getId()."/print/user";}
	function getURLScheduleDepartment(){return "/thu-lao/schedule/".$this->getId()."/print/department";}
	function getURLScheduleAll(){return "/thu-lao/schedule/".$this->getId()."/print/all";}
	function getURLScheduleSummary(){return "/thu-lao/schedule/".$this->getId()."/print/summary";}
	
	function getURLViewLoad(){return "/thu-lao/schedule/".$this->getId()."/view";}
	
	function getURLUpdLoad(){return "/thu-lao/schedule/".$this->getId()."/upd/load";}
	function getURLUpdExe(){return "/thu-lao/schedule/".$this->getId()."/upd/exe";}
	
	function getURLDelLoad(){return "/thu-lao/schedule/".$this->getId()."/del/load";}	
	function getURLDelExe(){return "/thu-lao/schedule/".$this->getId()."/del/exe";}
	
	
	//--------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	
}
?>