<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Report extends Object{

    private $Id;
    private $IdUser;
	private $Name;
	private $DateStart;
	private $DateEnd;
	private $Description;	
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( $Id=null, $IdUser=Null, $Name=Null, $DateStart=null, $DateEnd=null, $Description=null ){
		$this->Id = $Id;
		$this->IdUser = $IdUser;
		$this->Name = $Name;
		$this->DateStart = $DateStart;
		$this->DateEnd = $DateEnd;
		$this->Description = $Description;
		parent::__construct( $Id );
	}
    function getId() {return $this->Id;}	   	
	function getIdPrint(){return "e" . $this->getId();}
	
	function getIdUser() {return $this->IdUser;}	
	function setIdUser( $IdUser ){$this->IdUser = $IdUser;$this->markDirty();}  
	
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
			$first_img = "/data/images/thu-lao/report.jpg";
		}
		return $first_img;
	}
	
	function setDescription( $Description ){$this->Description = $Description;$this->markDirty();}   
	function getDescription( ) {return $this->Description;}
	
	
	
	//-------------------------------------------------------------------------------
	//GET LISTs
	//-------------------------------------------------------------------------------
	function getDepartment(){
		$mCL = new \MVC\thu-lao\reportLession();
		$CLs = $mCL->findByreport( array($this->getId()) );
		return $CLs;
	}
	
	
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	
	
	function getURLReportUser(){return "/thu-lao/report/".$this->getId()."/print/user";}
	function getURLReportDepartment(){return "/thu-lao/report/".$this->getId()."/print/department";}
	function getURLReportAll(){return "/thu-lao/report/".$this->getId()."/print/all";}
	
	function getURLUpdLoad(){return "/thu-lao/report/".$this->getId()."/upd/load";}
	function getURLUpdExe(){return "/thu-lao/report/".$this->getId()."/upd/exe";}
	
	function getURLDelLoad(){return "/thu-lao/report/".$this->getId()."/del/load";}	
	function getURLDelExe(){return "/thu-lao/report/".$this->getId()."/del/exe";}
	
	
	//--------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	
}
?>