<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Salarydaily extends Mapper implements \MVC\Domain\SalarydailyFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "select * from ktth_salarydaily");
        $this->selectStmt = self::$PDO->prepare( 
                            "select * from ktth_salarydaily where id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "update ktth_salarydaily set Id_category=?, id_employee=?, content=?, count=?, date_work=?, date_note=?, note=? where id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "insert into ktth_salarydaily ( Id_category, id_employee, content, count, date_work, date_note, note ) 
							values( ?, ?, ?, ?, ?, ? , ?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "delete from ktth_salarydaily where id=?");
							
		$this->findByCateroryPageStmt = self::$PDO->prepare(
			"SELECT * FROM ktth_salarydaily			
			WHERE Id_category=:id_category and month(date_work) =:mMonth and year(date_work) =:mYear
			ORDER BY date_work desc			
			LIMIT :start,:max" );
			
		$this->findByCateroryStmt = self::$PDO->prepare(
			"SELECT * FROM ktth_salarydaily			
			WHERE Id_category=:id_category and month(date_work) =:mMonth and year(date_work) =:mYear
			ORDER BY date_work desc" );
			
		$this->findByEmployeePageStmt = self::$PDO->prepare(
			"SELECT * FROM ktth_salarydaily			
			WHERE id_employee=:id_employee and month(date_work) =:mMonth and year(date_work) =:mYear
			ORDER BY date_work desc			
			LIMIT :start,:max" );	
			
		$this->findByEmployeeStmt = self::$PDO->prepare(
			"SELECT * FROM ktth_salarydaily			
			WHERE id_employee=:id_employee and month(date_work) =:mMonth and year(date_work) =:mYear
			ORDER BY date_work desc" );	
		
		$this->findByEmployeeByTimeStmt = self::$PDO->prepare(
			"SELECT * FROM ktth_salarydaily			
			WHERE id_employee=:id_employee and date_work between :mDateStart and :mDateEnd
			ORDER BY date_work desc" );					
		
    } 
    function getCollection( array $raw ) {
        return new SalarydailyCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\Salarydaily( 
			$array['id'],  
			$array['id_category'],
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
			$object->getId_category(),
			$object->getId_employee(),
			$object->getContent(),
			$object->getCount(),
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
			$object->getId_category(),
			$object->getId_employee(),
			$object->getContent(),
			$object->getCount(),
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
		$this->findByEmployeePageStmt->bindValue(':mMonth', $values[1], \PDO::PARAM_INT);
		$this->findByEmployeePageStmt->bindValue(':mYear', $values[2], \PDO::PARAM_INT);
		$this->findByEmployeePageStmt->bindValue(':start', ((int)($values[3])-1)*(int)($values[4]), \PDO::PARAM_INT);
		$this->findByEmployeePageStmt->bindValue(':max', (int)($values[4]), \PDO::PARAM_INT);
		$this->findByEmployeePageStmt->execute();
        return new SalarydailyCollection( $this->findByEmployeePageStmt->fetchAll(), $this );
    }
	//$statement->bindParam (":date", strtotime (date ("Y-m-d H:i:s")), PDO::PARAM_STR);
	function findByEmployee( $values ) {
		$this->findByEmployeeStmt->bindValue(':id_employee', $values[0], \PDO::PARAM_INT);
		$this->findByEmployeeStmt->bindValue(':mMonth', $values[1], \PDO::PARAM_INT);
		$this->findByEmployeeStmt->bindValue(':mYear', $values[2], \PDO::PARAM_INT);
		$this->findByEmployeeStmt->execute();
        return new SalarydailyCollection( $this->findByEmployeeStmt->fetchAll(), $this );
    }
	
	function findByEmployeeByTime( $values ) {
		$this->findByEmployeeByTimeStmt->bindValue(':id_employee', $values[0], \PDO::PARAM_INT);
		$this->findByEmployeeByTimeStmt->bindValue(':mDateStart', $values[1] , \PDO::PARAM_STR);
		$this->findByEmployeeByTimeStmt->bindValue(':mDateEnd', $values[2] , \PDO::PARAM_STR);
		$this->findByEmployeeByTimeStmt->execute();
        return new SalarydailyCollection( $this->findByEmployeeByTimeStmt->fetchAll(), $this );
    }
	
	function findByCateroryPage( $values ) {
		$this->findByCateroryPageStmt->bindValue(':id_category', $values[0], \PDO::PARAM_INT);
		$this->findByCateroryPageStmt->bindValue(':mMonth', $values[1], \PDO::PARAM_INT);
		$this->findByCateroryPageStmt->bindValue(':mYear', $values[2], \PDO::PARAM_INT);
		$this->findByCateroryPageStmt->bindValue(':start', ((int)($values[3])-1)*(int)($values[4]), \PDO::PARAM_INT);
		$this->findByCateroryPageStmt->bindValue(':max', (int)($values[4]), \PDO::PARAM_INT);
		$this->findByCateroryPageStmt->execute();
        return new SalarydailyCollection( $this->findByCateroryPageStmt->fetchAll(), $this );
    }
	
	function findByCaterory( $values ) {
		$this->findByCateroryStmt->bindValue(':id_category', $values[0], \PDO::PARAM_INT);
		$this->findByCateroryStmt->bindValue(':mMonth', $values[1], \PDO::PARAM_INT);
		$this->findByCateroryStmt->bindValue(':mYear', $values[2], \PDO::PARAM_INT);		
		$this->findByCateroryStmt->execute();
        return new SalarydailyCollection( $this->findByCateroryStmt->fetchAll(), $this );
    }
	
    function selectStmt() {
        return $this->selectStmt;
    }	
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
}
?>