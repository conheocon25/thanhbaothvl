<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Network extends Mapper implements \MVC\Domain\NetworkFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "select id, name, picture from sim24h_network");
        $this->selectStmt = self::$PDO->prepare( 
                            "select id, name, picture from sim24h_network where id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "update sim24h_network set name=?, picture=? where id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "insert into sim24h_network (name, picture ) 
							values( ?, ?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "delete from sim24h_network where id=?");
    } 
    function getCollection( array $raw ) {
        return new NetworkCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\Network( 
			$array['id'],  
			$array['name'],  
			$array['picture'] );
        return $obj;
    }
	
    protected function targetClass() {        
		return "Network";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  
			$object->getName(),
			$object->getPicture()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getName(),
			$object->getPicture(),
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
}
?>