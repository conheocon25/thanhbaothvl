<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Category extends Mapper implements \MVC\Domain\CategoryFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "select id, name from sim24h_category");
        $this->selectStmt = self::$PDO->prepare( 
                            "select id, name from sim24h_category where id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "update sim24h_category set name=? where id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "insert into sim24h_category (name ) 
							values( ?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "delete from sim24h_category where id=?");
    } 
    function getCollection( array $raw ) {
        return new CategoryCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\Category( 
			$array['id'],  
			$array['name'] );
        return $obj;
    }
	
    protected function targetClass() {        
		return "Category";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  
			$object->getName()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getName(),
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