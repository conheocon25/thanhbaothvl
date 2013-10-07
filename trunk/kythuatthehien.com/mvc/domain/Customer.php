<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Customer extends Object{

    private $Id;
	private $Name;
	private $PassWord;
	private $Phone;
	private $Address;
	private $Note;
	
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $Name=null, $PassWord=null, $Phone=null, $Address=null, $Note=null ) {
        $this->Id = $Id;
		$this->Name = $Name;
		$this->PassWord = $PassWord;
		$this->Phone = $Phone;
		$this->Address = $Address;
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
    function getPassWord( ) {
        return $this->PassWord;
    }
    function setPassWord( $PassWord ) {
        $this->PassWord = $PassWord;
        $this->markDirty();
    }
    function getPhone( ) {
        return $this->Phone;
    }
    function setPhone( $Phone ) {
        $this->Phone = $Phone;
        $this->markDirty();
    }
    function getAddress( ) {
        return $this->Address;
    }
    function setAddress( $Address ) {
        $this->Address = $Address;
        $this->markDirty();
    }
    function getNote( ) {
        return $this->Note;
    }
    function setNote( $Note ) {
        $this->Note = $Note;
        $this->markDirty();
    }
	
	
	function getPictureLinked( ) {
		//if ($this->gender == 0)
		//	return "mvc/templates/theme/image/user_female.png";
        return "mvc/templates/theme/base/images/app/user.png";
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
