<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Salarydaily extends Object{

    private $id;
	private $id_category;
	private $id_employee;
	private $content;
	private $count;
	private $date_work;
	private $date_note;
	private $note;
	
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $id=null, $id_category=null, $id_employee=null, $content=null, $count=null, $date_work=null, $date_note=null, $note=null ) {
        $this->id = $id;
		$this->id_category = $id_category;
		$this->id_employee = $id_employee;
		$this->content = $content;
		$this->count = $count;
		$this->date_work = $date_work;
		$this->date_note = $date_note;
		$this->note = $note;
        parent::__construct( $id );
    }
	
	public function toJSON(){
		$json = array(
			'id' 			=> $this->getid(),
			'id_category'	=> $this->getid_category(),
		 	'id_employee'	=> $this->getid_employee(),
		 	'content'		=> $this->getcontent(),
		 	'count'			=> $this->getcount(),
		 	'date_work'		=> $this->getdate_work(),
		 	'date_note'		=> $this->getdate_note(),
		 	'note'			=> $this->getnote()
		);
		return json_encode($json);
	}
	function setArray( $Data ){
        $this->id = 			$Data[0];
		$this->id_category = 	$Data[1];
		$this->id_employee = 	$Data[2];
		$this->content = 		$Data[3];
		$this->count =		 	$Data[4];
		$this->date_work = 		$Data[5];
		$this->date_note = 		$Data[6];
		$this->note = 			$Data[7];
    }
	
    function getid( ) {
        return $this->id;
    }	
	
    function setid( $id ) {
        $this->id = $id;
        $this->markDirty();
    }
    function getid_category( ) {
        return $this->id_category;
    }
    function setid_category( $id_category ) {
        $this->id_category = $id_category;
        $this->markDirty();
    }
    function getid_employee( ) {
        return $this->id_employee;
    }
    function setid_employee( $id_employee ) {
        $this->id_employee = $id_employee;
        $this->markDirty();
    }
    function getcontent( ) {
        return $this->content;
    }
    function setcontent( $content ) {
        $this->content = $content;
        $this->markDirty();
    }
    function getcount( ) {
        return $this->count;
    }
    function setcount( $count ) {
        $this->count = $count;
        $this->markDirty();
    }
    function getdate_work( ) {
        return $this->date_work;
    }
	
    function setdate_work( $date_work ) {
        $this->date_work = $date_work;
        $this->markDirty();
    }
	
	function getDateWorkPrint( ){
		$D = new \MVC\Library\Date($this->date_work);
		return $D->getDateFormat();
	}
	
	function getdate_note( ) {
        return $this->date_note;
    }
    function setdate_note( $date_note ) {
        $this->date_note = $date_note;
        $this->markDirty();
    }
	
	function getDatenotePrint( ){
		$D = new \MVC\Library\Date($this->date_note);
		return $D->getDateFormat();
	}
	
	function getnote( ) {
        return $this->note;
    }
    function setnote( $note ) {
        $this->note = $note;
        $this->markDirty();
    }
	
	function getURLRewardUpdateLoad(){return "/thu-lao/reward/update/".$this->getid();}
	function getURLRewardUpdateExe(){return "/thu-lao/reward/update/".$this->getid()."/exe";}
	function getURLRewardDeleteLoad(){return "/thu-lao/reward/delete/".$this->getid();}
	function getURLRewardDeleteExe(){return "/thu-lao/reward/delete/".$this->getid()."/exe";}
	
	function getEmployee(){
		$mEmployee = new \MVC\Mapper\User();
		$Employee = $mEmployee->find( $this->id_employee );
		return $Employee;
	}
	
	function getCategory(){
		$mCategory = new \MVC\Mapper\Category();
		$Category = $mCategory->find( $this->id_category );
		return $Category;
	}	

	function getcountTechnique(){		
		$Value = (($this->getCategory()->getFactory()) * $this->getcount() * $this->getEmployee()->getRule());
		return $Value;
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
