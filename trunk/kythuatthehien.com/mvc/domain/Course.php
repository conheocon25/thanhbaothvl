<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Course extends Object{

    private $Id;
	private $Name;
	private $DateStart;
	private $DateEnd;
	private $Description;
	private $Order;
	private $Key;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( $Id=null, $Name=Null, $DateStart=null, $DateEnd=null, $Description=null, $Order=null, $Key=null){$this->Id = $Id;$this->Name = $Name;$this->DateStart = $DateStart;$this->DateEnd = $DateEnd;$this->Description = $Description;$this->Order = $Order; $this->Key = $Key;parent::__construct( $Id );}
    function getId() {return $this->Id;}	
	function getIdPrint(){return "e" . $this->getId();}	
		
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
			$first_img = "/data/images/app/course.jpg";
		}
		return $first_img;
	}
	
	function setDescription( $Description ){$this->Description = $Description;$this->markDirty();}   
	function getDescription( ) {return $this->Description;}
	
	function setOrder( $Order ){$this->Order = $Order;$this->markDirty();}
	function getOrder( ) {return $this->Order;}
	
	function setKey( $Key ) {$this->Key = $Key;$this->markDirty();}
	function getKey( ) {return $this->Key;}
	function reKey( ) {
		$Str = new \MVC\Library\String($this->Name);
		$this->Key = $Str->converturl();
	}
	
	//-------------------------------------------------------------------------------
	//GET LISTs
	//-------------------------------------------------------------------------------
	function getLessions(){
		$mCL = new \MVC\Mapper\CourseLession();
		$CLs = $mCL->findByCourse( array($this->getId()) );
		return $CLs;
	}
	
	function getLessionNear(){
		$mCL = new \MVC\Mapper\CourseLession();
		$CLs = $mCL->findByNear( array($this->getId()) );
		return $CLs->current();
	}
	function getLessionNext(){
		$mCL = new \MVC\Mapper\CourseLession();
		$CLs = $mCL->findByNext( array($this->getId()) );
		return $CLs->current();
	}
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLRead(){return "/dao-tao/".$this->getKey();}
	
	function getURLUpdLoad(){return "/app/course/".$this->getId()."/upd/load";}
	function getURLUpdExe(){return "/app/course/".$this->getId()."/upd/exe";}
	
	function getURLDelLoad(){return "/app/course/".$this->getId()."/del/load";}	
	function getURLDelExe(){return "/app/course/".$this->getId()."/del/exe";}
	
	function getURLLession(){return "/app/course/".$this->getId();}
	function getURLLessionInsLoad(){return "/app/course/".$this->getId()."/ins/load";}
	function getURLLessionInsExe(){return "/app/course/".$this->getId()."/ins/exe";}
			
	//--------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	
}
?>