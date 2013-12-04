<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Customer extends Mapper implements \MVC\Domain\CustomerFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "select id, name, password, phone, address, note from sim24h_customer");
        $this->selectStmt = self::$PDO->prepare( 
                            "select id, name, password, phone, address, note from sim24h_customer where id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "update sim24h_customer set name=?, password=?, phone=?, address=?, note=? where id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "insert into sim24h_customer (name, password, phone, address, note ) 
							values( ?, ?, ?, ?, ?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "delete from sim24h_customer where id=?");
    } 
    function getCollection( array $raw ) {
        return new CustomerCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\Customer( 
			$array['id'],  
			$array['name'],
			$array['password'],
			$array['phone'],
			$array['address'],
			$array['note']
			);
        return $obj;
    }
	
    protected function targetClass() {        
		return "Customer";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  
			$object->getName(),
			$object->getPassWord(),
			$object->getPhone(),
			$object->getAddress(),
			$object->getNote()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getName(),
			$object->getPassWord(),
			$object->getPhone(),
			$object->getAddress(),
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
}
?>