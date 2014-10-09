<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Positions extends Mapper implements \MVC\Domain\PositionsFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "select id, name, count, note from ktth_positions");
        $this->selectStmt = self::$PDO->prepare( 
                            "select id, name, count, note from ktth_positions where id=?");
		$this->findByNameStmt = self::$PDO->prepare( 
                            "select id, name, count, note from ktth_positions where name=?");
        $this->updateStmt = self::$PDO->prepare( 
							"insert into ktth_positions (name, count, note ) 
							values( ?, ?, ?)");
        $this->insertStmt = self::$PDO->prepare( 
                             "update ktth_positions set name=?, count=?, note=? where id=?");
		$this->deleteStmt = self::$PDO->prepare( 
                            "delete from ktth_positions where id=?");
    } 
    function getCollection( array $raw ) {
        return new PositionsCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\Positions( 
			$array['id'],  
			$array['name'], 
			$array['count'], 
			$array['note']		
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "Positions";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getName(),
			$object->getCount(),		
			$object->getNote()			
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getName(),
			$object->getCount(),
			$object->getNote(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }
	
	function findByName($values) {
		$this->findByNameStmt->execute($values);
        return new PositionsCollection( $this->findByNameStmt->fetchAll(), $this );
    }
    function selectStmt() {
        return $this->selectStmt;
    }
	
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
}
?>