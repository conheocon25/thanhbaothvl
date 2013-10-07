<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class HotNumber extends Mapper implements \MVC\Domain\HotNumberFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "select id, idnumber, date from sim24h_hotnumber");
        $this->selectStmt = self::$PDO->prepare( 
                            "select id, idnumber, date from sim24h_hotnumber where id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "update sim24h_hotnumber set idnumber=?, date=? where id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "insert into sim24h_hotnumber (idnumber, date ) 
							values( ?, ?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "delete from sim24h_hotnumber where id=?");
    } 
    function getCollection( array $raw ) {
        return new HotNumberCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\HotNumber( 
			$array['id'],  
			$array['idnumber'],  
			$array['date'] );
        return $obj;
    }
	
    protected function targetClass() {        
		return "HotNumber";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  
			$object->getIdNumber(),
			$object->getDate()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdNumber(),
			$object->getDate(),
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