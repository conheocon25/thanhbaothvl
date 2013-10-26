<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Salarydaily extends Object{

    private $Id;
	private $Id_caterory;
	private $Id_employee;
	private $Content;
	private $Count;
	private $Date_work;
	private $Date_note;
	private $Note;
	
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $Id_caterory=null, $Id_employee=null, $Content=null, $Count=null, $Date_work=null, $Date_note=null, $Note=null ) {
        $this->Id = $Id;
		$this->Id_caterory = $Id_caterory;
		$this->Id_employee = $Id_employee;
		$this->Content = $Content;
		$this->Count = $Count;
		$this->Date_work = $Date_work;
		$this->Date_note = $Date_note;
		$this->Note = $Note;
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
    function getId_employee( ) {
        return $this->Id_employee;
    }
    function setId_employee( $Id_employee ) {
        $this->Id_employee = $Id_employee;
        $this->markDirty();
    }
    function getContent( ) {
        return $this->Content;
    }
    function setContent( $Content ) {
        $this->Content = $Content;
        $this->markDirty();
    }
    function getCount( ) {
        return $this->Count;
    }
    function setCount( $Count ) {
        $this->Count = $Count;
        $this->markDirty();
    }
    function getDate_work( ) {
        return $this->Date_work;
    }
    function setDate_work( $Date_work ) {
        $this->Date_work = $Date_work;
        $this->markDirty();
    }
	
	function getDate_note( ) {
        return $this->Date_note;
    }
    function setDate_note( $Date_note ) {
        $this->Date_note = $Date_note;
        $this->markDirty();
    }
	function getNote( ) {
        return $this->Note;
    }
    function setNote( $Note ) {
        $this->Note = $Note;
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
