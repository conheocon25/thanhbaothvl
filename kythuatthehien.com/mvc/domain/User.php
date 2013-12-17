<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
use MVC\Library\Number;
class User extends Object{

    private $Id;
    private $IdPosition;
	private $User;	
    private $Pass;
	private $Gender;
	private $Note;
	private $Type;
	private $Rule;
	
	private $Apps;
	private $Position;
	private $NTotal;
	
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $IdPosition=null, $User=null, $Pass=null, $Gender=null, $Note=null, $Type=null, $Rule=null ) {
        $this->Id = $Id;
        $this->IdPosition = $IdPosition;
		$this->User = $User;
		$this->Pass = $Pass;		
		$this->Gender = $Gender;
		$this->Note = $Note;
		$this->Type = $Type;
		$this->Rule = $Rule;
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
	
	function setIdPosition( $IdPosition ) {
        $this->IdPosition = $IdPosition;
        $this->markDirty();
    }
    function getIdPosition( ) {
        return $this->IdPosition;
    }
	
	function setType( $Type ) {
        $this->Type = $Type;
        $this->markDirty();
    }
    function getType( ) {
        return $this->Type;
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
	
	function setRule( $Rule ) {
        $this->Rule = $Rule;
        $this->markDirty();
    }
	function getRule( ) {
        return $this->Rule;
    }
	
	function getRulePrint( ) {
		if ($this->Rule == 5){
			return 120;
		}
		if ($this->Rule == 4){
			return 80;
		}
		if ($this->Rule == 2){
			return 45;
		}
        return 120;
    }
	
	function setNTotal( $NTotal ) {
        $this->NTotal = $NTotal;
        $this->markDirty();
    }
	function getNTotal( ) {		
        return $this->NTotal;
    }
	
	function getNTotalPrint( ) {
		$Total = new \MVC\Library\Number($this->getNTotal());
        return $Total;
    }
	
	function getNTotalABC() {
	
		$Value = round((($this->getNTotal() / $this->getRulePrint() ) * 50), 2);
		$Total1 = new \MVC\Library\Number($Value);
        return $Total1;
    }
	
	function getEmail( ) {
        return $this->User;
    }
	
	function isVIP( ) {
		if ($this->Id == 3) {
			return true;
		}
		return false;
    }
	
	function getPosition(){		
			$mPositions = new \MVC\Mapper\Positions();
			$this->Position = $mPositions->find($this->IdPosition);		
		return $this->Position;
	}
	
	
	function isAdmin(){if ($this->getType()==4)return true;return false;}		
	function isManager(){if ($this->getType()>=3)return true;return false;}	
	function isUser(){	if ($this->getType()==0)return true;return false;}
	
	
	
	function getApps(){
		if (!isset($this->Apps)){
			$mUserApp = new \MVC\Mapper\UserApp();
			$this->Apps = $mUserApp->findBy(array($this->Id));
		}
		return $this->Apps;
	}
	
	
	function setApp( $App ){$this->App = $App;$this->markDirty();}
	function getApp($IdApp=null){return $this->App;}	
		
	function getNotSigned(){$mApp = new \MVC\Mapper\App();$Apps = $mApp->notSigned(array($this->Id));return $Apps;}
		
	function setDateCreate( $DateCreate){$this->DateCreate = $DateCreate;$this->markDirty();}	
	function getDateCreate(){return $this->DateCreate;}	
	function setDateUpdate( $DateUpdate){$this->DateUpdate = $DateUpdate;$this->markDirty();}	
	function getDateUpdate(){return $this->DateUpdate;}	
	function setDateActivity( $DateActivity){$this->DateActivity = $DateActivity;$this->markDirty();}
	
	function getDateActivity(){return $this->DateActivity;}	
	
	
	//Chứng thực quyền người dùng
	function authorize($Command){
		$mUser = new \MVC\Mapper\User();		
		$result = $mUser->authorize(array($Command, $Command, $this->Type));
		return $result;
	}
	
	//Lấy địa chỉ
		
	function getURLViewSystem(){return "/thu_lao/".$this->Id;}			
	function getURLViewIndex(){$Prefix = $this->getApp()->getAlias();return $Prefix;}
		
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
