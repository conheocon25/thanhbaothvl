<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class User extends Object{

    private $Id;
	private $User;
	private $Type;
    private $Pass;
	private $Gender;
	private $Note;
	
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $User=null, $Pass=null, $Type=null, $Gender=null, $Note=null ) {
        $this->Id = $Id;
		$this->User = $User;
		$this->Pass = $Pass;
		$this->Type = $Type;
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
	function getType( ) {
        return $this->Type;
    }
    function setGender( $Gender ) {
        $this->Gender = $Gender;
        $this->markDirty();
    }
	function setType( $Type ) {
        $this->Type = $Type;
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
	function getPictureLinked( ) {
		//if ($this->gender == 0)
		//	return "mvc/templates/theme/image/user_female.png";
        return "mvc/templates/theme/base/images/app/user.png";
    }
	function getUpdateLinked() {
        return "?cmd=UpdateUser&id_user=".$this->id;
    }
	function getViewLinked() {
        return "?cmd=".$this->id;
    }
	function getURLUpdate(){
		return "?cmd=UpdateUser&Id=".$this->id;
	}
	function getURLDelete(){
		return "?cmd=DeleteUser&Id=".$this->id;
	}
	function getURLImageDelete(){
		return "mvc/templates/images/Delete.png";
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
