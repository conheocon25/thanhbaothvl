<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class User extends Object{

    private $Id;
	private $User;	
    private $Pass;
	private $Gender;
	private $Note;
	
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $User=null, $Pass=null, $Gender=null, $Note=null ) {
        $this->Id = $Id;
		$this->User = $User;
		$this->Pass = $Pass;		
		$this->Gender = $Gender;
		$this->Note = $Note;
        parent::__construct( $Id );
    }
    function getId( ) {
        return $this->Id;
    }	
	
    function setPass( $Pass ) {
        $this->Pass = $Pass;
        $this->markDirty();
    }
    function getPass( ) {
        return $this->Pass;
    }
	
    function setGender( $Gender ) {
        $this->Gender = $Gender;
        $this->markDirty();
    }
	
    function getGender( ) {
        return $this->Gender;
    }
	function getGenderPrint( ) {
        if($this->gender == 0)
			return "Nữ";
		return "Nam";
    }
	function setNote( $Note ) {
        $this->Note = $Note;
        $this->markDirty();
    }
	function getNote( ) {
        return $this->Note;
    }
	
	function setUser( $User ) {
        $this->User = $User;
        $this->markDirty();
    }
	function getUser( ) {
        return $this->User;
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
