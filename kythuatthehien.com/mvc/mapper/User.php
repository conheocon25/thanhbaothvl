<?php
namespace MVC\Mapper;
use MVC\Library\Encrypted;
require_once( "mvc/base/Mapper.php" );
class User extends Mapper implements \MVC\Domain\UserFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "select id, id_position, user, pass, gender, note, type, rule from ktth_user");
        $this->selectStmt = self::$PDO->prepare( 
                            "select id, id_position, user, pass, gender, note, type , rule from ktth_user where id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "update ktth_user set id_position=? , user=?, pass=?,gender=?, note=?, type=?, rule=? where id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "insert into ktth_user (id_position, user, pass, gender, note, type, rule ) 
							values( ?, ?, ?, ?, ?, ?, ?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "delete from ktth_user where id=?");
		$this->checkStmt = self::$PDO->prepare( 
                            "select id from ktth_user where user=? and pass=?");
							
		$this->selectByPositionStmt = self::$PDO->prepare( 
                            "select * from ktth_user where id_position=?");
    } 
    function getCollection( array $raw ) {
        return new UserCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\User( 
			$array['id'],  
			$array['id_position'], 
			$array['user'], 
			$array['pass'],				
			$array['gender'],	
			$array['note'],
			$array['type'],
			$array['rule']
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "User";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  
			$object->getIdPosition(), 
			$object->getUser(), 
			$this->createPass($object->getPass()),	
			$object->getGender(),	
			$object->getNote(),
			$object->getType(),
			$object->getRule()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdPosition(), 
			$object->getUser(), 			
			$this->createPass($object->getPass()),
			$object->getGender(),			
			$object->getNote(),
			$object->getType(),
			$object->getRule(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }
	
    function selectStmt() {
        return $this->selectStmt;
    }	
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
		
	function createPass($pass) {
		$mEncrypt = new Encrypted();	
		return $mEncrypt->setData($pass);		
	}
	
	function check($name, $pass) {
		$repass = $this->createPass($pass);
		$values = array( $name, $repass);	
        $this->checkStmt->execute( $values );
        $result = $this->checkStmt->fetchAll();
		return $result[0]['id'];
    }
	
	function findByPosition( $values ){
        $this->selectByPositionStmt->execute( $values );
        return new UserCollection( $this->selectByPositionStmt->fetchAll(), $this);
    }
}
?>