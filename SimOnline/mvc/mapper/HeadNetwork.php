<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class HeadNetwork extends Mapper implements \MVC\Domain\HeadNetworkFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "select id, name, idnetwork from sim24h_headnumber");
        $this->selectStmt = self::$PDO->prepare( 
                            "select id, name, idnetwork from sim24h_headnumber where id=?");
		$this->findByStmt = self::$PDO->prepare( 
                            "select id, name, idnetwork from sim24h_headnumber where name=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "");
        $this->insertStmt = self::$PDO->prepare( 
                            "");
		$this->deleteStmt = self::$PDO->prepare( 
                            "delete from sim24h_headnumber where id=?");
    } 
    function getCollection( array $raw ) {
        return new HeadNetworkCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\HeadNetwork( 
			$array['id'],  
			$array['idnetwork'], 
			$array['name']
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "HeadNetwork";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getIdNetwork(),
			$object->getName()			
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getIdNetwork(),
			$object->getName(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }
	function findBy($values) {
		$this->findByStmt->execute($values);
        return new HeadNetworkCollection( $this->findByStmt->fetchAll(), $this );
    }
    function selectStmt() {
        return $this->selectStmt;
    }
	
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
}
?>