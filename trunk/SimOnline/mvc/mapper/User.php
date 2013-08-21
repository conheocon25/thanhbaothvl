<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class User extends Mapper implements \MVC\Domain\UserFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "select id, user, pass, type, gender, note from sim24h_user");
        $this->selectStmt = self::$PDO->prepare( 
                            "select id, user, pass, type, gender, note from sim24h_user where id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "update sim24h_user set user=?, pass=?, type=?, gender=?, note=? where id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "insert into sim24h_user (user, pass, gender, note ) 
							values( ?, ?, ?, ?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "delete from sim24h_user where id=?");
		$this->checkStmt = self::$PDO->prepare( 
                            "select id from sim24h_user where user=? and pass=?");
    } 
    function getCollection( array $raw ) {
        return new UserCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\User( 
			$array['id'],  
			$array['user'], 
			$array['pass'],	
			$array['type'],	
			$array['gender'],	
			$array['note'] );
        return $obj;
    }
	
    protected function targetClass() {        
		return "User";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  
			$object->getUser(), 
			$object->getPass(),	
			$object->getGender(),	
			$object->getNote()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getUser(), 
			$object->getPass(),
			$object->getType(),
			$object->getGender(),			
			$object->getNote(),
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
		
	function check($name, $pass) {
		$repass = hash("sha512", "54321saophuongnamcompany12345".$pass,false);
		$values = array( $name, $repass);	
        $this->checkStmt->execute( $values );
        $result = $this->checkStmt->fetchAll();
		return $result[0]['id'];
    }
	function createPass($pass) {
		return hash("sha512", "54321saophuongnamcompany12345".$pass,false);
	}
}
?>