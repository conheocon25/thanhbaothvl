<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Category extends Mapper implements \MVC\Domain\CategoryFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "select id, id_position, name, factory from ktth_category");
        $this->selectStmt = self::$PDO->prepare( 
                            "select id, id_position, name, factory from ktth_category where id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "update ktth_category set id_position=?, name=?, factory=? where id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "insert into ktth_category ( id_position, name, factory ) 
							values( ?,  ? , ?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "delete from ktth_category where id=?");
    } 
    function getCollection( array $raw ) {
        return new CategoryCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\Category( 
			$array['id'],  
			$array['id_position'],
			$array['name'],
			$array['factory'] 
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "Category";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  
			$object->getId_position(),
			$object->getName(),
			$object->getFactory()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getId_position(),
			$object->getName(),
			$object->getFactory(),
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