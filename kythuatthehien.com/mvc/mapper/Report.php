<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Report extends Mapper implements \MVC\Domain\ReportFinder{

    function __construct() {
        parent::__construct();			
		$tblReport = "ktth_report";
		
		$selectAllStmt = sprintf("select * from %s ORDER BY date_start DESC", $tblReport);
		$selectStmt = sprintf("select *  from %s where id=?", $tblReport);
		$updateStmt = sprintf("update %s set name=?, date_start=?, date_end=?, description=? where id=?", $tblReport);
		$insertStmt = sprintf("insert into %s ( name, date_start, date_end, description) values(?, ?, ?, ?)", $tblReport);
		$deleteStmt = sprintf("delete from %s where id=?", $tblReport);
		$findTopStmt = sprintf("select *  from %s order by date_end desc limit 1", $tblReport);
		$findByYearStmt = sprintf("select *  from %s where year(date_end)=? order by date_end desc", $tblReport);
		$findByNearStmt = sprintf("select *  from %s where date_end >= NOW( ) AND date_start <= NOW( )", $tblReport);
		
		$findByPageStmt = sprintf("SELECT * FROM  %s LIMIT :start,:max", $tblReport);
				
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findTopStmt = self::$PDO->prepare($findTopStmt);
		$this->findByYearStmt = self::$PDO->prepare($findByYearStmt);
		$this->findByNearStmt = self::$PDO->prepare($findByNearStmt);			
		$this->findByPageStmt = self::$PDO->prepare($findByPageStmt);
	}
	
    function getCollection( array $raw ){
        return new ReportCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\Report( 
			$array['id'],			
			$array['name'],
			$array['date_start'],
			$array['date_end'],
			$array['description']		
		);
        return $obj;
    }

    protected function targetClass() {        
		return "Report";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getName(),
			$object->getDateStart(),
			$object->getDateEnd(),
			$object->getDescription()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 			
			$object->getName(),
			$object->getDateStart(),
			$object->getDateEnd(),
			$object->getDescription(),
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}

    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {return $this->selectAllStmt;}
	
	function findTop( $values ){
        $this->findTopStmt->execute( $values );
        return new CourseCollection( $this->findTopStmt->fetchAll(), $this);
    }
	function findByYear( $values ){
        $this->findByYearStmt->execute( $values );
        return new CourseCollection( $this->findByYearStmt->fetchAll(), $this);
    }
	function findByNear( $values ){
        $this->findByNearStmt->execute( $values );
        return new CourseCollection( $this->findByNearStmt->fetchAll(), $this);
    }
	
		
	function findByPage( $values ){
		$this->findByPageStmt->bindValue(':start', ((int)($values[0])-1)*(int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[1]), \PDO::PARAM_INT);
		$this->findByPageStmt->execute();
        return new CourseCollection( $this->findByPageStmt->fetchAll(), $this );
    }
}
?>