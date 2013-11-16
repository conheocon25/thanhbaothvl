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
							
		$this->findByCateroryStmt = self::$PDO->prepare(
			"SELECT * FROM ktth_salarydaily			
			WHERE id_caterory=:id_caterory
			ORDER BY date_work desc			
			LIMIT :start,:max" );
			
		$this->findByEmployeePageStmt = self::$PDO->prepare(
			"SELECT * FROM ktth_salarydaily			
			WHERE id_employee=:id_employee
			ORDER BY date_work desc			
			LIMIT :start,:max" );					
		
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
	
	function findByEmployeePage( $values ) {
		$this->findByEmployeePageStmt->bindValue(':id_employee', $values[0], \PDO::PARAM_INT);
		$this->findByEmployeePageStmt->bindValue(':start', ((int)($values[1])-1)*(int)($values[2]), \PDO::PARAM_INT);
		$this->findByEmployeePageStmt->bindValue(':max', (int)($values[2]), \PDO::PARAM_INT);
		$this->findByEmployeePageStmt->execute();
        return new NewsCollection( $this->findByEmployeePageStmt->fetchAll(), $this );
    }
	
	function findByCateroryPage( $values ) {
		$this->findByCateroryStmt->bindValue(':id_caterory', $values[0], \PDO::PARAM_INT);
		$this->findByCateroryStmt->bindValue(':start', ((int)($values[1])-1)*(int)($values[2]), \PDO::PARAM_INT);
		$this->findByCateroryStmt->bindValue(':max', (int)($values[2]), \PDO::PARAM_INT);
		$this->findByCateroryStmt->execute();
        return new NewsCollection( $this->findByCateroryStmt->fetchAll(), $this );
    }
	
	
    function selectStmt() {
        return $this->selectStmt;
    }	
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
}
?>