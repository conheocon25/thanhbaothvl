<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Order extends Mapper implements \MVC\Domain\NumberFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "select id, idcustomer, idsim, type, date, note, state from sim24h_order");
        $this->selectStmt = self::$PDO->prepare( 
                            "select id, idcustomer, idsim, type, date, note, state from sim24h_order where id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "update sim24h_order set idcustomer=?, idsim=?, type=?, date=?, note=?, state=? where id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "insert into sim24h_order (idcustomer, idsim, type, date, note, state ) 
							values( ?, ?, ?, ?, ?, ?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "delete from sim24h_order where id=?");
    } 
    function getCollection( array $raw ) {
        return new OrderCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\Order( 
			$array['id'],  
			$array['idcustomer'], 
			$array['idsim'],	
			$array['type'],	
			$array['date'],	
			$array['note'],
			$array['state']
			);
        return $obj;
    }
	
    protected function targetClass() {        
		return "Order";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  
			$object->getIdCustomer(), 
			$object->getIdSim(),	
			$object->getType(),	
			$object->getDate(),	
			$object->getNote(),	
			$object->getState()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdCustomer(), 
			$object->getIdSim(),	
			$object->getType(),	
			$object->getDate(),	
			$object->getNote(),	
			$object->getState(),
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