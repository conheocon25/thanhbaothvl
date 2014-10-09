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
                            "update ktth_salarydaily set id_category=?, id_employee=?, content=?, count=?, date_work=?, date_note=?, note=? where id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "insert into ktth_salarydaily ( id_category, id_employee, content, count, date_work, date_note, note ) 
							values( ?, ?, ?, ?, ?, ? , ?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "delete from ktth_salarydaily where id=?");
							
		$this->findByCateroryPageStmt = self::$PDO->prepare(
			"SELECT * FROM ktth_salarydaily			
			WHERE id_category=:id_category and month(date_work) =:mMonth and year(date_work) =:mYear
			ORDER BY date_work desc			
			LIMIT :start,:max" );
			
		$this->findByCateroryStmt = self::$PDO->prepare(
			"SELECT * FROM ktth_salarydaily			
			WHERE id_category=:id_category and month(date_work) =:mMonth and year(date_work) =:mYear
			ORDER BY date_work desc" );
			
		$this->findByCateroryGroupByStmt = self::$PDO->prepare(
			"SELECT `id`,`id_category`,`id_employee`,`content`,Sum(`count`) as `count`,`date_work`,`date_note`,`note` FROM `ktth_salarydaily` 			
			WHERE `id_category`=:id_category and month(`date_work`) =:mMonth and year(`date_work`) =:mYear
			GROUP BY `id_category`" );
			
		$this->findByCateroryYearStmt = self::$PDO->prepare(
			"SELECT * FROM ktth_salarydaily			
			WHERE id_category=:id_category and year(date_work) =:mYear
			ORDER BY date_work desc" );
		
		$this->findByCateroryYearGroupByStmt = self::$PDO->prepare(
			"SELECT `id`,`id_category`,`id_employee`,`content`,Sum(`count`) as `count`,`date_work`,`date_note`,`note` FROM `ktth_salarydaily` 			
			WHERE `id_category`=:id_category and year(date_work) =:mYear
			GROUP BY `id_category`" );
		
		$this->findByCateroryAllYearStmt = self::$PDO->prepare(
			"SELECT * FROM ktth_salarydaily			
			WHERE year(date_work) =:mYear
			ORDER BY date_work desc" );
			
		$this->findByCateroryAllYearGroupByStmt = self::$PDO->prepare(
			"SELECT `id`,`id_category`,`id_employee`,`content`,Sum(`count`) as `count`,`date_work`,`date_note`,`note` FROM `ktth_salarydaily` 	
			WHERE year(date_work) =:mYear
			GROUP BY `id_category`" );
			
		$this->findByCateroryAllStmt = self::$PDO->prepare(
			"SELECT * FROM ktth_salarydaily			
			WHERE month(date_work) =:mMonth and year(date_work) =:mYear
			ORDER BY date_work desc" );
			
		$this->findByCateroryAllGroupByStmt = self::$PDO->prepare(
			"SELECT `id`,`id_category`,`id_employee`,`content`,Sum(`count`) as `count`,`date_work`,`date_note`,`note` FROM `ktth_salarydaily`  		
			WHERE month(date_work) =:mMonth and year(date_work) =:mYear
			GROUP BY `id_category`" );
			
		$this->findByCateroryDateStmt = self::$PDO->prepare(
			"SELECT * FROM ktth_salarydaily			
			WHERE id_category=:id_category and date_work between :mDateStart and :mDateEnd
			ORDER BY date_work desc" );	
		
		$this->findByCateroryDateGroupByStmt = self::$PDO->prepare(
			"SELECT `id`,`id_category`,`id_employee`,`content`,Sum(`count`) as `count`,`date_work`,`date_note`,`note` FROM `ktth_salarydaily` 			
			WHERE id_category=:id_category and date_work between :mDateStart and :mDateEnd
			GROUP BY `id_category`" );	
			
		$this->findByCateroryAllDateStmt = self::$PDO->prepare(
			"SELECT * FROM ktth_salarydaily			
			WHERE date_work between :mDateStart and :mDateEnd
			ORDER BY date_work desc" );	
		
		$this->findByCateroryAllDateGroupByStmt = self::$PDO->prepare(
			"SELECT `id`,`id_category`,`id_employee`,`content`,Sum(`count`) as `count`,`date_work`,`date_note`,`note` FROM `ktth_salarydaily` 			
			WHERE date_work between :mDateStart and :mDateEnd
			GROUP BY `id_category`" );	
			
		$this->findByEmployeePageStmt = self::$PDO->prepare(
			"SELECT * FROM ktth_salarydaily			
			WHERE id_employee=:id_employee and month(date_work) =:mMonth and year(date_work) =:mYear
			ORDER BY date_work desc			
			LIMIT :start,:max" );	
			
		$this->findByEmployeeStmt = self::$PDO->prepare(
			"SELECT * FROM ktth_salarydaily			
			WHERE id_employee=:id_employee and month(date_work) =:mMonth and year(date_work) =:mYear
			ORDER BY date_work desc" );				
		
		
		$this->findEmployeeByTimeStmt = self::$PDO->prepare(
			"SELECT * FROM ktth_salarydaily			
			WHERE id_employee=:id_employee and date_work between :mDateStart and :mDateEnd
			ORDER BY date_work desc" );	
			
		$this->findByPositionStmt = self::$PDO->prepare(
			"SELECT ktth_salarydaily.id, ktth_salarydaily.id_category, ktth_salarydaily.id_employee, ktth_salarydaily.content, ktth_salarydaily.count, ktth_salarydaily.date_work, ktth_salarydaily.date_note, ktth_salarydaily.note 
			FROM ktth_salarydaily , ktth_category			
			WHERE ktth_salarydaily.id_category=ktth_category.id and ktth_category.id_position=:id_position and ktth_salarydaily.id_employee=:id_employee and date_work between :mDateStart and :mDateEnd"
			);
		
		$this->findBySumPointEmployeeTimeStmt = self::$PDO->prepare(
			"SELECT sum((select factory from ktth_category where id = `id_category`)* count * (select rule from ktth_user where id = `id_employee`))  
			FROM `ktth_salarydaily` 
			WHERE id_employee=:id_employee and date_work between :mDateStart and :mDateEnd"
			);	
						
		$this->findBySumPointEmployeeMonthStmt = self::$PDO->prepare(
			"SELECT sum((select factory from ktth_category where id = `id_category`)* count * (select rule from ktth_user where id = `id_employee`))  
			FROM `ktth_salarydaily` 
			WHERE id_employee=:id_employee and month(date_work) =:mMonth and year(date_work) =:mYear"
			);
			
		$this->findGroupByStmt = self::$PDO->prepare(
			"SELECT `id`,`id_category`,`id_employee`,`content`,count(`count`) as `count`,`date_work`,`date_note`,`note` FROM `ktth_salarydaily` 
			WHERE date_work between :mDateStart and :mDateEnd GROUP BY `id_category`"
			);					
		
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
			$object->getid_category(),
			$object->getid_employee(),
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
			$object->getid_category(),
			$object->getid_employee(),
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
		$this->findEmployeeByTimeStmt->bindValue(':id_employee', $values[0], \PDO::PARAM_INT);
		$this->findEmployeeByTimeStmt->bindValue(':mDateStart', $values[1] , \PDO::PARAM_STR);
		$this->findEmployeeByTimeStmt->bindValue(':mDateEnd', $values[2] , \PDO::PARAM_STR);
		$this->findEmployeeByTimeStmt->execute();
        return new SalarydailyCollection( $this->findEmployeeByTimeStmt->fetchAll(), $this );
    }
	
	function SumPointEmployeeMonth( $values ) {
		$this->findBySumPointEmployeeMonthStmt->bindValue(':id_employee', $values[0], \PDO::PARAM_INT);
		$this->findBySumPointEmployeeMonthStmt->bindValue(':mMonth', $values[1] , \PDO::PARAM_STR);
		$this->findBySumPointEmployeeMonthStmt->bindValue(':mYear', $values[2] , \PDO::PARAM_STR);
		$this->findBySumPointEmployeeMonthStmt->execute();
		$result = $this->findBySumPointEmployeeMonthStmt->fetchAll();
		return $result[0][0];        
    }
	
	function SumPointEmployeeTime( $values ) {
		$this->findBySumPointEmployeeTimeStmt->bindValue(':id_employee', $values[0], \PDO::PARAM_INT);
		$this->findBySumPointEmployeeTimeStmt->bindValue(':mDateStart', $values[1] , \PDO::PARAM_STR);
		$this->findBySumPointEmployeeTimeStmt->bindValue(':mDateEnd', $values[2] , \PDO::PARAM_STR);
		$this->findBySumPointEmployeeTimeStmt->execute();
		$result = $this->findBySumPointEmployeeTimeStmt->fetchAll();
		return $result[0][0];        
    }
	
	function findByPosition( $values ) {
		$this->findByPositionStmt->bindValue(':id_position', $values[0], \PDO::PARAM_INT);
		$this->findByPositionStmt->bindValue(':id_employee', $values[1], \PDO::PARAM_INT);
		$this->findByPositionStmt->bindValue(':mDateStart', $values[2] , \PDO::PARAM_STR);
		$this->findByPositionStmt->bindValue(':mDateEnd', $values[3] , \PDO::PARAM_STR);
		$this->findByPositionStmt->execute();
        return new SalarydailyCollection( $this->findByPositionStmt->fetchAll(), $this );
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
	function findGroupBy( $values ) {		
		$this->findGroupByStmt->bindValue(':mDateStart', $values[0], \PDO::PARAM_INT);
		$this->findGroupByStmt->bindValue(':mDateEnd', $values[1], \PDO::PARAM_INT);		
		$this->findGroupByStmt->execute();
        return new SalarydailyCollection( $this->findGroupByStmt->fetchAll(), $this );
    }
	
	function findByCaterory( $values ) {
		$this->findByCateroryStmt->bindValue(':id_category', $values[0], \PDO::PARAM_INT);
		$this->findByCateroryStmt->bindValue(':mMonth', $values[1], \PDO::PARAM_INT);
		$this->findByCateroryStmt->bindValue(':mYear', $values[2], \PDO::PARAM_INT);		
		$this->findByCateroryStmt->execute();
        return new SalarydailyCollection( $this->findByCateroryStmt->fetchAll(), $this );
    }
		
	function findByCateroryYear( $values ) {
		$this->findByCateroryYearStmt->bindValue(':id_category', $values[0], \PDO::PARAM_INT);		
		$this->findByCateroryYearStmt->bindValue(':mYear', $values[1], \PDO::PARAM_INT);		
		$this->findByCateroryYearStmt->execute();
        return new SalarydailyCollection( $this->findByCateroryYearStmt->fetchAll(), $this );
    }
	
	function findByCateroryGroupBy( $values ) {
		$this->findByCateroryGroupByStmt->bindValue(':id_category', $values[0], \PDO::PARAM_INT);
		$this->findByCateroryGroupByStmt->bindValue(':mMonth', $values[1], \PDO::PARAM_INT);
		$this->findByCateroryGroupByStmt->bindValue(':mYear', $values[2], \PDO::PARAM_INT);		
		$this->findByCateroryGroupByStmt->execute();
        return new SalarydailyCollection( $this->findByCateroryGroupByStmt->fetchAll(), $this );
    }
		
	function findByCateroryYearGroupBy( $values ) {
		$this->findByCateroryYearGroupByStmt->bindValue(':id_category', $values[0], \PDO::PARAM_INT);		
		$this->findByCateroryYearGroupByStmt->bindValue(':mYear', $values[1], \PDO::PARAM_INT);		
		$this->findByCateroryYearGroupByStmt->execute();
        return new SalarydailyCollection( $this->findByCateroryYearGroupByStmt->fetchAll(), $this );
    }
	
	function findByCateroryAll( $values ) {
		$this->findByCateroryAllStmt->bindValue(':mMonth', $values[0], \PDO::PARAM_INT);
		$this->findByCateroryAllStmt->bindValue(':mYear', $values[1], \PDO::PARAM_INT);		
		$this->findByCateroryAllStmt->execute();
        return new SalarydailyCollection( $this->findByCateroryAllStmt->fetchAll(), $this );
    }
	
	function findByCateroryAllYear( $values ) {		
		$this->findByCateroryAllYearStmt->bindValue(':mYear', $values[0], \PDO::PARAM_INT);		
		$this->findByCateroryAllYearStmt->execute();
        return new SalarydailyCollection( $this->findByCateroryAllYearStmt->fetchAll(), $this );
    }
	
	function findByCateroryAllGroupBy( $values ) {
		$this->findByCateroryAllGroupByStmt->bindValue(':mMonth', $values[0], \PDO::PARAM_INT);
		$this->findByCateroryAllGroupByStmt->bindValue(':mYear', $values[1], \PDO::PARAM_INT);		
		$this->findByCateroryAllGroupByStmt->execute();
        return new SalarydailyCollection( $this->findByCateroryAllGroupByStmt->fetchAll(), $this );
    }
	
	function findByCateroryAllYearGroupBy( $values ) {		
		$this->findByCateroryAllYearGroupByStmt->bindValue(':mYear', $values[0], \PDO::PARAM_INT);		
		$this->findByCateroryAllYearGroupByStmt->execute();
        return new SalarydailyCollection( $this->findByCateroryAllYearGroupByStmt->fetchAll(), $this );
    }
	
	function findByCateroryDate( $values ) {
		$this->findByCateroryDateStmt->bindValue(':id_category', $values[0], \PDO::PARAM_INT);
		$this->findByCateroryDateStmt->bindValue(':mDateStart', $values[1], \PDO::PARAM_INT);
		$this->findByCateroryDateStmt->bindValue(':mDateEnd', $values[2], \PDO::PARAM_INT);		
		$this->findByCateroryDateStmt->execute();
        return new SalarydailyCollection( $this->findByCateroryDateStmt->fetchAll(), $this );
    }
	function findByCateroryAllDate( $values ) {
		$this->findByCateroryAllDateStmt->bindValue(':mDateStart', $values[0], \PDO::PARAM_INT);
		$this->findByCateroryAllDateStmt->bindValue(':mDateEnd', $values[1], \PDO::PARAM_INT);		
		$this->findByCateroryAllDateStmt->execute();
        return new SalarydailyCollection( $this->findByCateroryAllDateStmt->fetchAll(), $this );
    }
	
	function findByCateroryDateGroupBy( $values ) {
		$this->findByCateroryDateGroupByStmt->bindValue(':id_category', $values[0], \PDO::PARAM_INT);
		$this->findByCateroryDateGroupByStmt->bindValue(':mDateStart', $values[1], \PDO::PARAM_INT);
		$this->findByCateroryDateGroupByStmt->bindValue(':mDateEnd', $values[2], \PDO::PARAM_INT);		
		$this->findByCateroryDateGroupByStmt->execute();
        return new SalarydailyCollection( $this->findByCateroryDateGroupByStmt->fetchAll(), $this );
    }
	function findByCateroryAllDateGroupBy( $values ) {
		$this->findByCateroryAllDateGroupByStmt->bindValue(':mDateStart', $values[0], \PDO::PARAM_INT);
		$this->findByCateroryAllDateGroupByStmt->bindValue(':mDateEnd', $values[1], \PDO::PARAM_INT);		
		$this->findByCateroryAllDateGroupByStmt->execute();
        return new SalarydailyCollection( $this->findByCateroryAllDateGroupByStmt->fetchAll(), $this );
    }
    function selectStmt() {
        return $this->selectStmt;
    }	
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
}
?>