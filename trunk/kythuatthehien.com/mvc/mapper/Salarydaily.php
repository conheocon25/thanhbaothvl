<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Salarydaily extends Mapper implements \MVC\Domain\SalarydailyFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "select id, id_caterory, id_employee, content, count, date_work, date_note, note from ktth_salarydaily");
        $this->selectStmt = self::$PDO->prepare( 
                            "select id, id_caterory, id_employee, content, count, date_work, date_note, note from ktth_salarydaily where id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "update ktth_salarydaily set id_caterory=?, id_employee=?, content=?, count=?, date_work=?, date_note=?, note=? where id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "insert into ktth_salarydaily ( id_caterory, id_employee, content, count, date_work, date_note, note ) 
							values( ?, ?, ?, ?, ?, ? , ?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "delete from ktth_salarydaily where id=?");
    } 
    function getCollection( array $raw ) {
        return new SalarydailyCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\Salarydaily( 
			$array['id'],  
			$array['id_caterory'],
			$array['id_employee'],
			$array['content'],
			$array['count'],
			$array['date_work'],
			$array['date_note'],
			$array['note']
			);
        return $obj;
    }
	
    protected function targetClass() {        
		return "Salarydaily";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(  
			$object->getId_caterory(),
			$object->getId_employee(),
			$object->getContent(),
			$object->getDate_work(),
			$object->getDate_note(),
			$object->getNote()
			
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getId_caterory(),
			$object->getId_employee(),
			$object->getContent(),
			$object->getDate_work(),
			$object->getDate_note(),
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